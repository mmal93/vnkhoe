<?php
class tu_van_suc_khoe extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {
		$this->view->loadPageConfig('index');
		$this->view->show_header_banner();
		$this->view->showHeader();
		$this->view->mainStart();
		
		$this->view->showPartner();
		$this->view->mainEnd();
		$this->view->showFooter();
    }
}
