<?
class Cache
{
	public static $memcached;
	public static $connected = false;
	
	public static function connect()
	{
		global $app;
		
	//	mlog("connecting memcached ".self::$connected);
		
		if(self::$connected == true)
		{
			mlog("connect memcached again!");
			return;
		}
		
		self::$memcached = new Memcached();
		self::$memcached->addServer($app->config['memcached_host'], $app->config['memcached_port']);
		self::$memcached->setOption(Memcached::OPT_BINARY_PROTOCOL,true) ;
		self::$memcached->setOption(Memcached::OPT_NO_BLOCK, true);
		self::$memcached->setOption(Memcached::OPT_TCP_NODELAY, true);
		self::$memcached->setOption(Memcached::OPT_COMPRESSION, true);
		self::$memcached->setOption(Memcached::OPT_CACHE_LOOKUPS, true);
		self::$memcached->setOption(Memcached::OPT_BUFFER_WRITES, false);
		
		self::$connected = true;
	}
	
	public static function clear()
	{
		global $app;
		
		
		if($app->config['memcached_enable'] == true && !$memcached)
		{
	//		mlog("enable cache");
			Cache::connect();
		}
	//	mlog("memc: ".print_r($memcached,1));
		if(self::$memcached)
		{
			self::$memcached->flush();
			//mlog("cache flush all");
		}
		else
			mlog("cache::clear() fail");
	}
	
	public static function set($key, &$val, $time=0)
	{
		global $app;
		
		if($app->config['enable_cache']!=true)
			return null;
		
		//stat::inc("xcache_sets");
		
		if($app->config['memcached_enable'] == true && !self::$memcached)
		{
			Cache::connect();
		}
		
		if($app->config['memcached_enable'])
		{
			if($app->config['enable_cache_compression'])
				$ser_val = gzcompress(serialize($val),	$app->config['cache_gz_compression_level']);
			else
				$ser_val = $val;
			
			$ret = self::$memcached->set($key, $ser_val, $time);
			
			if($app->config['memcached_debug']==true)
			{
				if($app->config['enable_html_debug'])
					echo "cache::set($key, ".strlen($ser_val).", $time) = $ret<br/>";
				mlog("cache:set($key, ".strlen($ser_val).", $time) = $ret");
			}
			if($ret!=1)
				mlog("! cache::set fail to store $key due to size limit [".(sprintf("%.2f",strlen($ser_val)/1024/1024))." mb]");
			
			
			return $ret;
		}
	/*
		if(strstr($key,"/"))
		{
			$path = explode("/",$key);
			$dir = $path[0];
			if(!is_dir("cache/$dir"))
				mkdir("cache/$dir");
			$key = $path[1];
		}
			
		if($dir)
			$file="cache/$dir/$key.dat";
		else
			$file="cache/$key.dat";
			
		if($app->config['enable_cache_compression'])
			$ser_val = gzcompress(serialize($val),
				$app->config['cache_gz_compression_level']);
		else
			$ser_val = serialize($val);
		$written = file_put_contents($file, $ser_val);
		if($written==false)
		{
			if(!is_dir("cache"))
				mkdir("cache");
			if($dir && !is_dir("cache/$dir"))
				mkdir("cache/$dir");
			$written = file_put_contents($file, $ser_val);
		}*/
		return $written;
	}
	
	static public function db_size()
	{
		global $app;
		
		$memcache_obj = new Memcache; 
		$memcache_obj->addServer($app->config['memcached_host'], $app->config['memcached_port']); 
	//	mlog("geting Stats");
		
		$stats=$memcache_obj->getStats();
	//	mlog("get stats");
		
		return $stats['bytes'];
	}
	
	static public function current_connections()
	{
		global $app;
		
		$memcache_obj = new Memcache; 
		$memcache_obj->addServer($app->config['memcached_host'], $app->config['memcached_port']); 
	//	mlog("geting Stats");
		
		$stats=$memcache_obj->getStats();
	//	mlog("get stats");
		
		return $stats['curr_connections'];
	}
	
	static public function have($key)
	{
		return xcache_isset($key);
	}
	
	static function dec($key)
	{
		if($app->config['memcached_enable'] == true && !self::$memcached)
		{
			Cache::connect();
		}
		
		$val = intval(self::$memcached->get($key));
		$val--;
		
		self::$memcached->set($key,$val);
	}
	
	static function inc($key)
	{
		if($app->config['memcached_enable'] == true && !self::$memcached)
		{
			Cache::connect();
		}
		if(self::$memcached)
			$val = intval(self::$memcached->get($key));
		$val++;
	//	mlog("inc $key: $val");
		if(self::$memcached)
			self::$memcached->set($key,$val);
	}
	
	static function get($key)
	{
		global $app;
		
		if($app->config['enable_cache']!=true)
			return null; 
		
		if($app->config['memcached_return_null'])
		{
		//	mlog("xcache false $key");
			return null;
		}
		
		//stat::inc("xcache_gets");
		
		if($app->config['memcached_enable'] == true && !self::$memcached)
		{
			Cache::connect();
		}
		
		if($app->config['memcached_enable'])
		{
			$data = self::$memcached->get($key);
			if(empty($data))
			{
				$app->info['cache_misses']+=1;
				stat::inc("cache_misses");
			}
			else
			{
				$app->info['cache_hits']+=1;
				stat::inc("cache_hits");
			}
			
		//	mlog("get $key: $data");
			
			if($app->config['memcached_debug']==true)
			{
				if($app->config['enable_html_debug'])
					echo "cache::get($key) = ".strlen($data)."<br/>";
				mlog("cache:get($key) = ".strlen($data));
			}
			
			if($app->config['enable_cache_compression'])
				return unserialize(gzuncompress($data));
			else
				return ($data);
		}
		/*
		if(!is_file("cache/$key.dat"))
		{
			$app->info['cache_misses']+=1;
			return null;
		}
			
		if(strstr($key,"/"))
		{
			$path = explode("/",$key);
			$dir = $path[0];
			$key = $path[1];
		}
			
		if($dir)
			$file="cache/$dir/$key.dat";
		else
			$file="cache/$key.dat";
			
		$data = file_get_contents($file);
		if($data==false)
		{
			$app->info['cache_misses']+=1;
			return null;
		}
		
		$in = false;
		
		$app->info['cache_hits']+=1;
		if($app->config['enable_cache_compression'])
			return unserialize(gzuncompress($data));
		else
		return unserialize($data);*/
	}
}