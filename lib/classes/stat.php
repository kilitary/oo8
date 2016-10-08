<?

class stat
{
	function apc_compile_dir($root, $recursively = true)
	{
		mlog("apc compile dir $root");
		$compiled   = true;
		switch($recursively)
		{
			case    true:
			foreach(glob($root.DIRECTORY_SEPARATOR.'*', GLOB_ONLYDIR) as $dir)
				$compiled   = $compiled && @self::apc_compile_dir($dir, $recursively);
			case    false:
			foreach(glob($root.DIRECTORY_SEPARATOR.'*.php') as $file)
			{
				mlog("[apc compile file $file] ");
				$compiled   = $compiled && @self::apc_compile_file($file);
			}
			break;
		}
		return  $compiled;
	}

	public static function load()
	{
		global $app;
		
		return;
		mlog("loading stat");
		$start=microtime_float();

		$names=$app->db->query("SELECT name FROM evo_vars LIMIT 1000", null,'col');
		foreach($names as $name)
		{
			$val = $app->db->query("SELECT value FROM evo_vars
				WHERE name = ?", array($name), 'el');
			if($val)
			{
					//Cache::set($name, $val);
				stat::set($name, (($val)? ($val):$val));
				mlog("loaded $name from db".strlen($val)." [$val]");
			}
			else
			{
				mlog("lost var $name");
			}

		}
			//$app->db->query("UNLOCK TABLES");
		mlog("loaded ".count($names)." stat in ".(microtime_float()-$start)." secs");
		
		stat::set('MemCacheStatLoaded',time());
	}
	
	public static function loaded()
	{
		return 1;
		return intval(apc_fetch("MemCacheStatLoaded"));
	}
	
	public static function save()
	{
		global $app;
		return;
		$start=microtime_float();
		//$varCacheCount = xcache_count(XC_TYPE_VAR);
		$data = apc_cache_info();
		mlog("saving ".count($data['cache_list'])." recs");
		
		foreach($data['cache_list'] as $idx => $var)
		{
			
			$id = $app->db->query("INSERT DELAYED INTO evo_vars SET name = ?, value = ? 
				ON DUPLICATE KEY UPDATE value=?, updated=NOW()",
				array($var['info'], stat::get($var['info']),stat::get($var['info'])),'id');
			mlog("saved to DB: sys var $var[info] [".stat::get($var['info'])."] $id");
		}

		mlog("save $idx in ".(microtime_float()-$start)." s");
	}
	
	// increment
	public static function inc($var)
	{
		return;
		$value = intval( stat::get($var));
		$newval=apc_store($var,intval($value)+1);
	//	if($ret==false)
		//	mlog("apc_inc failed with [$var:$newval] (".self::get($var).")");

		return $newval;
		
	}
	
	// decrement
	public static function dec($var)
	{
		return;
		if(!apc_exists($var))
			apc_add($var, 0);
		return apc_dec($var);
		//return Cache::dec($var);
	}
	
	// set
	public static function set($var,$val)
	{
		return;
	//	if(intval($val)>0)
		//	$val=intval($val);
		
		return apc_store($var,$val);
		//return Cache::set($var,$val);
	}
	
	// set
	public static function delete($var)
	{
		return;
		return apc_delete($var);
		//return xcache_unset($var);
	}
	
	// get
	public static function get($var)
	{
		return;
		return apc_fetch($var);
		//return Cache::get($var);
	}
	
	public static function has($var)
	{
		return;
		return apc_exists($var);
		//return xcache_isset($var);
	}
}
?>