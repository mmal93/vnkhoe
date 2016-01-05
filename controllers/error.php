<?php

class Error extends Controller {

    function __construct() {
        parent::__construct(); 
    }
    
    function index() {
		$this->view->loadPageConfig('404');
		$this->view->showBodyClass('error-404');
		$this->view->display('header.tpl'); 
		//$this->view->display('index.html');
		
		$this->view->display('error/content_404.tpl');
		$this->view->display('footer.tpl');
    }

}