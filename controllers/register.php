<?php
class Register extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {    
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
    
    function run()
    {
        $this->model->run();
    }
}