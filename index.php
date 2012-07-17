<?php

    define('SITE_PATH',realpath(dirname(__FILE__)).'/');
	define('DEFAULT_HOME','home');
	define('TEMPLATE_DIR',SITE_PATH.'template/');
	define('RESOURCE_DIR',SITE_PATH,'public/');
	
	function __autoload($name){
        $filename=SITE_PATH.'system/'.$name.'.php';
        if(file_exists($filename)){
            require $filename;
        }
    }
	
	try{
		$req=new Request();
		Router::route($req);
	}catch(Exception $e){
		echo $e->getMessage().'<br/>';
	}
