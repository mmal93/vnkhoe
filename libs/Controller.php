<?php

class Controller {

    function __construct() {
        //Main controller
        $this->view = new View();
    }
    
    /**
     * 
     * @param string $name Name of the model
     * @param string $path Location of the models
     */
    public function loadModel($name, $modelPath = 'models/') {
        
        $path = $modelPath . $name.'_model.php';
        
        if (file_exists($path)) {
            require $modelPath .$name.'_model.php';
            
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }        
    }
	
	function getCurrentPageURL() {
		$pageURL = 'http';
		if (!empty($_SERVER['HTTPS'])) {if($_SERVER['HTTPS'] == 'on'){$pageURL .= "s";}} 
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}
	
	public function rstrtrim($str, $remove=null) { 
		$str    = (string)$str; 
		$remove = (string)$remove;    
		
		if(empty($remove)) 
		{ 
			return rtrim($str); 
		} 
		
		$len = strlen($remove); 
		$offset = strlen($str)-$len; 
		while($offset > 0 && $offset == strpos($str, $remove, $offset)) 
		{ 
			$str = substr($str, 0, $offset); 
			$offset = strlen($str)-$len; 
		} 
		
		return rtrim($str);    
		
	}
	
	public function getParam($param_name = null) {
		if(!isset($param_name) || empty($param_name)) {
			return false;
		}
		$param_name = trim($param_name.'/');
		$url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = $this->rstrtrim($url, '/');
		$url = strstr($url, $param_name);
		$url = $this->rstrtrim($url, '.html');
		$url = $this->rstrtrim($url, '.htm');
        $url = filter_var($url, FILTER_SANITIZE_URL);
		$url = explode('/', $url);
		if(count($url)>1) {
			return $url[1];
		}
		return false;
	}
}