<?php

class Controller {

    function __construct() {
        //Main controller
		Session::init();
        $this->view = new View();
		$this->view->assign('CURRENT_URL', $this->getCurrentURL());
		$this->view->assign('CURRENT_PAGE_URL', $this->getCurrentPageURL());
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
		$currentURL = 'http';
		if (!empty($_SERVER['HTTPS'])) {if($_SERVER['HTTPS'] == 'on'){$currentURL .= "s";}} 
		$currentURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$currentURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$currentURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		$currentURL = preg_replace('/\?(.+)$/', '', $currentURL);
		return $currentURL;
	}
	
	function getCurrentURL() {
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
	
	public function getParamFromURL($param_name = null, $_url = null) {
		if(!isset($param_name) || empty($param_name) || !isset($_url) || empty($_url)) {
			return false;
		}
		$param_name = trim($param_name.'/');
		$url = $_url;
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
	
	public function closeTags($html='')
        {
        #put all opened tags into an array
        preg_match_all ( "#<([a-z]+)( .*)?(?!/)>#iU", $html, $result );
        $openedtags = $result[1];
        #put all closed tags into an array
        preg_match_all ( "#</([a-z]+)>#iU", $html, $result );
        $closedtags = $result[1];
        $len_opened = count ( $openedtags );
        # all tags are closed
        if( count ( $closedtags ) == $len_opened )
        {
        return $html;
        }
        $openedtags = array_reverse ( $openedtags );
        # close tags
        for( $i = 0; $i < $len_opened; $i++ )
        {
            if ( !in_array ( $openedtags[$i], $closedtags ) )
            {
            $html .= "</" . $openedtags[$i] . ">";
            }
            else
            {
            unset ( $closedtags[array_search ( $openedtags[$i], $closedtags)] );
            }
        }
        return $html;
    }
}