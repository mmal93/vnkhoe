<?php
class Login extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {    
		//$this->view->title = 'Đăng nhập - vnkhoe';
		$this->view->showBodyClass('login-page');
		$this->view->loadPageConfig('login');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->showTemplate('account/login/index.tpl');
        //$this->view->render('login/index');
		$this->view->showFooter();
    }
    
    function run()
    {
        $this->model->run();
    }
    
	public function showLoginForm() {
		$this->view->showTemplate('account'.DS.'login'.DS.'form.tpl');
	}
}