<?php

class snapito
{
	const PATH = "./cache/";	//directory to save snaps
	
	private static $_apikey;
	private static $url;
	private static $view; 		//accepted types are ( web|mobile|desktop )
	private static $size; 		//accepted types are ( full|lc|mc|sc|tc|th )
	private static $freshness;	//accepted types are ( 0|1 )
	private static $imgType;	//accepts ( jpg|png)

	private static $file;
	private static $fileName;
	
	public function __construct($key,$url){
		$this->_apikey = $key;
		$this->url = $url;
	}
	
	public function size($size){
		$this->size = $size;
	}
	
	public function run(){
		$call = "http://api.snapito.com/web/".$this->_apikey."/full/".$this->url."?type=png";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $call ); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 ); 
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
		curl_setopt( $ch, CURLOPT_BINARYTRANSFER, true );
		
		$results=curl_exec($ch); 
		return $results;
	}

	public function save($name,$file){
		$fh = fopen(self::PATH.$name, 'wb') or die("cant open file");
		fwrite($fh, $file);
		fclose($fh);
	}

	public function saveAs($file){
		$tmp = explode(".", $file);
		$this->imgType 	= $ext 	= $tmp[count($tmp)-1];
		$this->fileName = $name = $tmp[0];
	}
	

}


