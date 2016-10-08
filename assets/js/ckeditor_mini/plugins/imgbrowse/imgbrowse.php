<?
error_reporting(E_ALL);
class imgbrowse 
{
	protected $root = 'it_sites/008.ru/content';
	protected $imgext = ['gif', 'jpg', 'jpe', 'jpeg', 'png'];    //'bmp', 
	protected $imgdr = '';    

	function __construct()
	{
		if(isset($_POST['imgroot'])) $this->root = trim(strip_tags($_POST['imgroot']));
		$this->root = trim($this->root, '/') .'/';
		$this->imgdr = isset($_POST['imgdr']) ? trim(trim(strip_tags($_POST['imgdr'])), '/') .'/' : '';
	}

	public function getMenuImgs() 
	{
		$re = ['menu'=>'', 'imgs'=>''];
		try{
			$obdr = new DirectoryIterator($_SERVER['DOCUMENT_ROOT'] .'/'. $this->root . $this->imgdr);     
		}
		catch(Exception $e) {
			return '<h2>ERROR from PHP:</h2><h3>'. $e->getMessage() .'</h3><h4>Check the $root value in imgbrowse.php to see if it is the correct path to the image folder; RELATIVE TO ROOT OF YOUR WEBSITE ON SERVER</h4>';
		}

		$protocol = !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
		$site = $protocol. $_SERVER['SERVER_NAME'] .'/';

		foreach($obdr as $fileobj) 
		{
			$name = utf8_encode($fileobj->getFilename());

			if($fileobj->isFile() && in_array($fileobj->getExtension(), $this->imgext)) 
				$re['imgs'] .= '<span><img src="'. $site . $this->root . $this->imgdr . $name .'" alt="'. $name .
			'" height="50" />'. $name .'</span>';
			else if($fileobj->isDir() && !$fileobj->isDot()) $re['menu'] .= '<li><span title="'. $this->imgdr . $name .'">'. 
				$name .'</span></li>';
		}
		if($re['menu'] != '') $re['menu'] = '<ul>'. $re['menu'] .'</ul>';
		if($re['imgs'] == '') $re['imgs'] = '<h1>нет картинок</h1>';
		return $re;
	}
}

$obj = new imgbrowse;
$content = $obj->getMenuImgs();
$out = json_encode($content);
//echo json_last_error ();
echo $out;
