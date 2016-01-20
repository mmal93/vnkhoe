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
		$this->view->showTopSearch();
		$this->view->showHeader();
		$this->view->mainStart('index-page home-page container-fluid');
		$this->view->showTemplate('home_advertisments');
		$this->view->showPartner();
		$this->view->showTemplate('home_employer');
		$this->view->showTemplate('bottom_link');
		$this->view->mainEnd();
		$this->view->showFooter();
    }   
}