<?php
class Account extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {    
		//$this->view->title = 'Đăng nhập - vnkhoe';
		$this->view->showBodyClass('dashboard-page');
		$this->view->loadPageConfig('user_dashboard');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->showTemplate('account/dashboard/index.tpl');
        $this->view->showFooter();
    }
    
    function login() {
		
	}
	function register() {
		//$this->view->title = 'Đăng nhập - vnkhoe';
		Session::destroy();
		$this->view->loadPageConfig('register');
		$this->view->showBodyClass('register-page');
		$this->view->show_header_banner();
		$this->view->showHeader();
		$this->view->mainStart('container');
		$this->view->showTemplate('account/register_form');
		$this->view->mainEnd();
        $this->view->showFooter();
	}
	
}