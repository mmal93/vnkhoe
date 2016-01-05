<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
		$this->view->loadPageConfig('index');
		$this->view->show_header_banner();
		$this->view->showHeader();
		$this->view->display('index/content_index.tpl');
		//$this->view->display('footer.tpl');
		//$this->view->showTemplate('partner.tpl');
		$this->view->showFooter();
    }
    
}