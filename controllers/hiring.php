<?php
class Hiring extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {    
		Session::destroy();
		$this->view->showBodyClass('hiring-page');
		$this->view->loadPageConfig('hiring');
		$this->view->showTemplate('hiring/header');
		$this->view->mainStart('container-fluid');
		$this->view->showTemplate('hiring/our_services');
		$this->view->showPartner();
		$this->view->mainEnd();
        $this->view->showFooter();
    }
}