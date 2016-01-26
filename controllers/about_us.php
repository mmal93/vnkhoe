<?php

class About_Us extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
		$this->view->loadPageConfig('about_us');
		$this->view->show_header_banner();
		$this->view->showTopSearch();
		$this->view->showHeader();
		$this->view->mainStart('about-us-page container-fluid');
		$this->view->showTemplate('other/about_us_content');
		$this->view->showPartner();
		$this->view->showTemplate('bottom_link');
		$this->view->mainEnd();
		$this->view->showFooter();
    }   
}