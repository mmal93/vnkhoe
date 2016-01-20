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
		Session::destroy();
		$_username = $_password = $_remember = null;
		if(isset($_POST['submit'])) {
			isset($_POST['username']) && $_username = $_POST['username'];
			isset($_POST['password']) && $_password = $_POST['password'];
			isset($_POST['remember']) && $_remember = $_POST['remember'];
			
			if(empty($_username)) {
				$_error[] = 'Tên đăng nhập trống';
			}
			if(empty($_password)) {
				$_error[] = 'Mật khẩu đăng nhập trống';
			}
			if(isset($_error)) {
				$this->view->assign('error_message', $_error);
			} else {
				$_result = $this->model->login($_username, $_password);
				if($_result){
					$this->view->assign('success_message', 'Cảm ơn bạn <strong><em>'.$_username.'</em></strong> đã đăng nhập vào vnkhoe!');
					isset($_GET['url']) && $_redirect_url = $_GET['url'];
					if(isset($_redirect_url)) {
						$this->view->assign('_redirect_url', $_redirect_url);
					}
				} else {
					$this->view->assign('error_message', 'Đăng nhập không thành công, vui lòng thử lại sau!');
				}
			}
			
		}
		$this->view->assign('_username', $_username);
		$this->view->assign('_password', $_password);
		$this->view->assign('_remember', $_remember);
		$this->view->loadPageConfig('login');
		$this->view->showBodyClass('login-page');
		$this->view->show_header_banner();
		$this->view->showHeader();
		$this->view->mainStart('container');
		$this->view->showTemplate('account/login_form');
		$this->view->mainEnd();
        $this->view->showFooter();
	}
	function register() {
		Session::destroy();
		$_username = $_password = $_repassword = $_firstname = $_lastname = $_tel = $_job = $_gender = null;
		if(isset($_POST['submit'])) {
			isset($_POST['username']) && $_username = $_POST['username'];
			isset($_POST['password']) && $_password = $_POST['password'];
			isset($_POST['repassword']) && $_repassword = $_POST['repassword'];
			isset($_POST['firstname']) && $_firstname = $_POST['firstname'];
			isset($_POST['lastname']) && $_lastname = $_POST['lastname'];
			isset($_POST['tel']) && $_tel = $_POST['tel'];
			isset($_POST['job']) && $_job = $_POST['job'];
			isset($_POST['gender']) && $_gender = $_POST['gender'];
			
			if(empty($_username)) {
				$_error[] = 'Tên đăng nhập trống';
			} else if($this->model->isMember($_username)) {
				$_error[] = 'Tài khoản email <strong><em>'.$_username.'</em></strong> đã tồn tại';
			}
			if(empty($_password)) {
				$_error[] = 'Mật khẩu đăng nhập trống';
			} else if(strlen(trim($_password))<5) {
				$_error[] = 'Mật khẩu quá ngắn, mật khẩu của bạn phải có ít nhất 5 ký tự';
			}
			if($_password != $_repassword) {
				$_error[] = 'Mật khẩu đăng nhập không khớp nhau';
			}
			if(empty($_firstname)) {
				$_error[] = 'Bạn chưa nhập họ';
			}
			if(empty($_lastname)) {
				$_error[] = 'Bạn chưa nhập tên';
			}
			if(empty($_job)) {
				$_error[] = 'Bạn phải nhập một công việc';
			} else if(strlen(trim($_job))<5) {
				$_error[] = 'Bạn phải nhập một công việc hợp lệ';
			}
			if(isset($_error)) {
				$this->view->assign('error_message', $_error);
			} else {
				$_result = $this->model->register($_username, $_password, $_firstname, $_lastname, ($_tel==null?'null':$_tel), $_job, ($_gender ==null?'0':'1'));
				if($_result){
					$this->view->assign('success_message', 'Cảm ơn bạn <strong><em>'.$_firstname.' '.$_lastname.'</em></strong> đã đăng nhập vào vnkhoe!');
					isset($_GET['url']) && $_redirect_url = $_GET['url'];
					if(isset($_redirect_url)) {
						$this->view->assign('_redirect_url', $_redirect_url);
					}
				} else {
					$this->view->assign('error_message', 'Chúng tôi rất tiếc vì đang có lỗi xảy ra trong quá trình đăng ký, xin các bạn vui lòng thử lại sau!');
				}
			}
			
		}
		$this->view->assign('_username', $_username);
		$this->view->assign('_password', $_password);
		$this->view->assign('_firstname', $_firstname);
		$this->view->assign('_lastname', $_lastname);
		$this->view->assign('_tel', $_tel);
		$this->view->assign('_job', $_job);
		$this->view->assign('_gender', $_gender);
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