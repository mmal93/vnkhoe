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
    
    function run()
    {
        $this->model->run();
    }
}