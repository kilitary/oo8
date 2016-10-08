<?
class elastic
{
	protected $elastic_client = null;
	protected $index = null;
	protected $type = null; 

	public function __construct($index=null, $type=null)
	{
		if($index)
			$this->index = $index;
		if($type)
			$this->type = $type;

		$params = array();
		$params['hosts'] = array (
			'127.0.0.1:19200',
		);
		try 
		{
			$this->elastic_client = new Elasticsearch\Client($params);
		}
		catch (Exception $e)
		{
			mlog("exception:elastic: ".$e->getMessage());
		}
	}

	function createDocument($opts)
	{
		try
		{
			$id = md5($this->index.$this->type.time().mt_rand(1111,999999999));
			$ret = $this->elastic_client->index(
				array(
					'index' => $opts['index'] ? $opts['index'] : $this->index,
					'type' => $opts['type'] ? $opts['type'] : $this->type,
					'id' => $opts['id'] ? $opts['id'] : $id,
					'body' => $opts['body']
				));
		}
		catch (Exception $e)
		{
			mlog("\r\nexception ".$e->getMessage()."\r\n");
			return null;
		}
		mlog("createDoc id=$ret[_id]");
		return $ret['_id'];
	}

	function deleteDocument($opts)
	{
		$deleteParams['id'] = $opts['id'];
		$deleteParams['index'] = $opts['index'] ? $opts['index'] : $this->index;
		$deleteParams['type'] = $opts['type'] ? $opts['type'] : $this->type;
		try 
		{
			$this->elastic_client->delete($deleteParams);
		}
		catch(Exception $e)
		{
			mlog("deleteDocument exception ".$e->getMessage()."\r\n");
		}
	}

	function searchDocument($opts)
	{
		$params['from']  = $opts['from'] ? $opts['from'] : 0;
		$params['size']  = $opts['size'] ? $opts['size'] : 99999999999;
		foreach($opts['keys'] as $k => $v)
		{
			$params['body']['query']['term'][$k] = $v;
		}
		$params['index'] = $opts['index'] ? $opts['index'] : $this->index;
		$params['type'] = $opts['type'] ? $opts['type'] : $this->type;
		try 
		{
			$ret = $this->elastic_client->search($params);
		}
		catch(Exception $e)
		{
			mlog("searchDocument exception ".$e->getMessage()."\r\n");
			return null;
		}
		
		mlog("searchDocument ".print_r($ret,1));
		return $ret['hits']['hits'];
	}

	function getDocument($opts)
	{
		$params['index'] = $opts['index'] ? $opts['index'] : $this->index;
		$params['type'] = $opts['type'] ? $opts['type'] : $this->type;
		$params['id'] = $opts['id'];

		//mlog(print_r($opts,1));
		try 
		{
			$ret = $this->elastic_client->get($params);
		}
		catch(Exception $e)
		{
			mlog("getDocument exception ".$e->getMessage()."\r\n");
			return null;
		}
		//mlog("getDocument ".print_r($ret,1));
		return $ret['_source'];
	}

	function deleteIndex($opts)
	{
		try 
		{
			$deleteParams['index'] = $opts['index'] ? $opts['index'] : $this->index;
			$eindex = $this->elastic_client->indices()->exists($deleteParams);
			if($eindex)
			{
				mlog("deleteIndex deleting $index ..."); 
				$this->elastic_client->indices()->delete($deleteParams);
				mlog("deleteIndex deleted");
			}
			else 
			{
				mlog("deleteIndex no such index $opts[index]");
			}
		}
		catch(Exception $e)
		{
			mlog("deleteIndex exception ".$e->getMessage()."\r\n");
		}
	}

	function createIndex( $opts)
	{
		try 
		{
			mlog("\rcreateIndex creating $index....");
			$params = array();
			$params['index'] = $opts['index'] ? $opts['index'] : $this->index;
			$params['body']['settings']['number_of_shards'] = 1;
			$params['body']['settings']['number_of_replicas'] = 0;
			$params['body']['settings']['analysis']['analyzer']['ru_analyzer'] = array(
				"type" => "custom",
				"tokenizer" => "standard",
				"filter" => array(
					'lowercase',
					'my_stopwords',
					'russian_morphology',
					'english_morphology'
				)
			);
			$params['body']['settings']['analysis']['filter']['my_stopwords'] = array(
				"type" => "stop",
				"stopwords" => array(
					'а,без,более,бы,был,была,были,было,быть,в,вам,вас,весь,во,вот,все,всего,всех,вы,где,да,даже,для,до,его,ее,если,есть,еще,же,за,здесь,и,из,или,им,их,к,как,ко,когда,кто,ли,либо,мне,может,мы,на,надо,наш,не,него,нее,нет,ни,них,но,ну,о,об,однако,он,она,они,оно,от,очень,по,под,при,с,со,так,также,такой,там,те,тем,то,того,тоже,той,только,том,ты,у,уже,хотя,чего,чей,чем,что,чтобы,чье,чья,эта,эти,это,я,a,an,and,are,as,at,be,but,by,for,if,in,into,is,it,no,not,of,on,or,such,that,the,their,then,there,these,they,this,to,was,will,with'
				)
			);

			$ret = $this->elastic_client->indices()->create($params);
			mlog("createIndex ret=".print_r($ret,1));
		}
		catch(Exception $e)
		{
			mlog("createIndex exception ".$e->getMessage()."\r\n");
		}
	}
}
?>