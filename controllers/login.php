<?php
class Login extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {
		$_submit = null;
		$_email = null;
		$_password = null;
		isset($_POST['submit']) && $_submit = $_POST['submit'];
		if(isset($_submit)&& (!empty($_submit))) {
			isset($_POST['username']) && $_username = $_POST['username'];
			isset($_POST['password']) && $_password = $_POST['password'];
			isset($_POST['remember']) && $_remember = $_POST['remember'];
			if($this->model->is_member($_email)) {
				$result = $this->model->login($_email, $_password);
				if($result) {
					header('location:'.BASE_URL.'/index.html');
				} else {
					$this->view->showBodyClass('login-page');
					$this->view->loadPageConfig('login');
					$this->view->show_header_banner();
					$this->view->showHeader();
					$this->view->assign('_message', '<span class="hllm-error">Mật khẩu đăng nhập không đúng!</span>');
					$this->view->showTemplate('account/login/index.tpl');
					$this->view->showFooter();
				}
			} else {
				$this->view->showBodyClass('login-page');
				$this->view->loadPageConfig('login');
				$this->view->show_header_banner();
				$this->view->showHeader();
				$this->view->assign('_message', '<span class="hllm-error">Tên đăng nhập '.$_email.' không đúng!</span>');
				$this->view->showTemplate('account/login/index.tpl');
				$this->view->showFooter();
			}
		} else {
			$this->view->showBodyClass('login-page');
			$this->view->loadPageConfig('login');
			$this->view->show_header_banner();
			$this->view->showHeader();
			$this->view->showTemplate('account/login/index.tpl');
			$this->view->showFooter();
		}
    }
    
	public function showLoginForm() {
		$this->view->showTemplate('account'.DS.'login'.DS.'form.tpl');
	}
}