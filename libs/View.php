<?php
/**
 * set SMARTY_DIR to absolute path to Smarty library files.
 * Sets SMARTY_DIR only if user application has not already defined it.
 */
//define ('SMARTY_DIR','http://localhost/CMS/class/smarty/');
if (!defined('SMARTY_DIR')) {
	define ('SMARTY_DIR', BASE_DIR.'libs'.DS.'smarty'.DS);
}

/**
 * set SMARTY_SYSPLUGINS_DIR to absolute path to Smarty internal plugins.
 * Sets SMARTY_SYSPLUGINS_DIR only if user application has not already defined it.
 */
if (!defined('SMARTY_SYSPLUGINS_DIR')) {
    define('SMARTY_SYSPLUGINS_DIR', SMARTY_DIR . 'sysplugins' . DS);
}
if (!defined('SMARTY_PLUGINS_DIR')) {
    define('SMARTY_PLUGINS_DIR', SMARTY_DIR . 'plugins' . DS);
}
if (!defined('SMARTY_MBSTRING')) {
    define('SMARTY_MBSTRING', function_exists('mb_get_info'));
}
if (!defined('SMARTY_RESOURCE_CHAR_SET')) {
    // UTF-8 can only be done properly when mbstring is available!
    /**
     * @deprecated in favor of Smarty::$_CHARSET
     */
    define('SMARTY_RESOURCE_CHAR_SET', SMARTY_MBSTRING ? 'UTF-8' : 'ISO-8859-1');
}


// if(!class_exists('Smarty')) {
	// require_once LIBS .'smarty/Smarty.class.php';
// }

class View extends Smarty{
	
	public $title;
	public $msg;
	
    function __construct() {
		
		//$this->Smarty();
		parent::__construct();
		$this->template_dir = USER_TEMPLATE_DIR;
        //$this->setTemplateDir(USER_TEMPLATE_DIR);
		$this->compile_dir = BASE_DIR.'templates_c';
        //$this->setCompileDir(BASE_DIR.'templates_c');
		$this->cache_dir = BASE_DIR.'cache';
        //$this->setCacheDir(BASE_DIR.'cache');
		$this->config_dir = BASE_DIR.'configs';
        //$this->setConfigDir(BASE_DIR.'configs');
		$this->debugging = false;
		$this->compile_check = true;
		$this->caching = false;
		//$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
		//$this->cache_lifetime = 120;
		
		//$this->Smarty();
		//assign variable to default template
		$this->assign('BASE_URL', BASE_URL);
		//$this->assign('TEMPLATE_DIR', USER_TEMPLATE_DIR);
		$this->assign('TEMPLATE_URL', BASE_URL.'templates/users/vnkhoe/');
		$this->assign('LIB_TEMPLATE_URL', BASE_URL.'libs/template');
		
		$this->assign_lib_files('css', 'css', 'css');
		$this->assign_lib_files('js', 'js', 'js');
		
		$this->loadRootConfig();
		
		Session::init();
        $_loged_in = Session::get('loggedIn');
		if(!empty($_loged_in)) {
			$this->assign('_session', $_SESSION);
		}
    }
	
	public function assign_lib_files($assign_name, $file_extension, $folder = null) {
		$file_dir = LIBS.'template'.DS.$folder.DS;
		$file_array = array();
		$files = glob($file_dir.'*.{'.$file_extension.'}', GLOB_BRACE);
		foreach($files as $file) {
			$file_array[] = basename($file);
		}
		$this->assign(strToUpper($assign_name), $file_array);
	}

    public function render($name, $noInclude = false)
    {
        require USER_TEMPLATE_DIR . $name . '.php';
		//require 'views/' . $name . '.php';
    }
	
	public function showHeader($header_file_name = 'header.tpl') {
		if(file_exists(USER_TEMPLATE_DIR.$header_file_name)) {
			$this->display(USER_TEMPLATE_DIR.$header_file_name);
			//$this->display(USER_TEMPLATE_DIR.$header_file_name);
		}
	}
	
	public function showFooter($footer_file_name = 'footer.tpl') {
		if(file_exists(USER_TEMPLATE_DIR.$footer_file_name)) {
			$this->display(USER_TEMPLATE_DIR.$footer_file_name);
		}
	}
	
	public function showTemplate($template_name) {
        if(file_exists(USER_TEMPLATE_DIR.$template_name)) {
			$this->display(USER_TEMPLATE_DIR.$template_name);
		}
    }
	
	public function loadRootConfig() {
		$root_config = xml_data::get_config_data(BASE_DIR.'app/local.xml');
		$this->assign("root_config", $root_config);
	}
	
	public function loadPageConfig($file) {
		$page_config = xml_data::get_page_config(BASE_DIR.'app/'.$file.'.xml');
		$this->assign("page_config", $page_config);
	}
	
	public function showBodyClass($class){
		if((isset($class))&&(!empty($class))) {
			$this->assign('body_class', $class);
		}
	}
	
	public function show_header_banner() {
		if(!file_exists(BASE_DIR.'app/banner.xml')){
			return;
		}
		$_banner = xml_data::get_xml_data(BASE_DIR.'app/banner.xml');
		$file_extension = $_banner->extensions;
		if($_banner->active == true) {
			$_images_url = USER_TEMPLATE_URL.'images/'.$_banner->images.'/';
			$_images_dir = USER_TEMPLATE_DIR.'images'.DS.$_banner->images.DS;
			if(is_dir($_images_dir)) {
				$_images_arr = glob($_images_dir.'*.{'.$file_extension.'}', GLOB_BRACE);
				$images_list = array();
				foreach($_images_arr as $_image_arr) {
					$images_list[] = $_images_url.basename($_image_arr);
				}
				$this->assign('banner_images', $images_list);
				$this->assign('banner_alt', $_banner->alt);
			}
		}
	}
}

//$view = new View();
?>