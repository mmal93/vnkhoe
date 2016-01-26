<?php
include '../../app/config.php';
// require BASE_DIR.'controllers'.DS.'login.php';
// require LIBS.'Controller.php';
// require LIBS.'Model.php';
// require LIBS.'Database.php';
//auto load function
function __autoload($class) {
    if(file_exists(LIBS . $class .".php")) {
		require LIBS.$class.'.php';
	}
	if(file_exists(BASE_DIR.'controllers'.DS.$class.'.php')) {
		require BASE_DIR.'controllers'.DS.$class.'.php';
	}
	if(file_exists(BASE_DIR.'models'.DS.$class.'_model.php')) {
		require BASE_DIR.'models'.DS.$class.'_model.php';
	}
}
?>
<?php
class Ajax extends Controller {

    function __construct() {
        parent::__construct();
		$this->loadModel('login', BASE_DIR.'models'.DS);
    }
    
    function index() 
    {
		isset($_POST['action']) && $_action = $_POST['action'];
		if ($this->is_ajax()) {
			if(isset($_action) && !empty($_action)) {
				if($_action=='check_login') {
					echo $this->check_login();
				} else if($_action=='logout') {
					echo $this->logout();
				} else {
					return false;
				}
			}
		}
    }
    
	public function showLoginForm() {
		$this->view->showTemplate('account'.DS.'login'.DS.'form');
	}
	
	//Function to check if the request is an AJAX request
	public function is_ajax() {
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
		// $headers = apache_request_headers();
		// $is_aja = (isset($headers['X-Requested-With']) && $headers['X-Requested-With'] == 'XMLHttpRequest');
		// return $is_aja;
		//return true;
	}

	public function check_login() {
		$return = array();
		isset($_POST['email']) && $_email = $_POST['email'];
		isset($_POST['password']) && $_password = $_POST['password'];
		
		// $return['is_member'] = $this->model->is_member($_email);
		// $login_data = $this->model->login($_email, $_password);
		$return['is_member'] = $this->model->is_member($_email);
		$login_data = $this->model->login('ducmonmz@gmail.com', 'admin');
		$return['email'] = $_email;
		if(isset($login_data)&&!empty($login_data)) {
			//loged in 
			// array(8) { 
				// ["tv_id"]=> string(2) "93" 
				// [0]=> string(2) "93" 
				// ["tv_firstname"]=> string(5) "luong" 
				// [1]=> string(5) "luong" 
				// ["tv_lastname"]=> string(3) "mon" 
				// [2]=> string(3) "mon" 
				// ["tv_trangthai"]=> string(1) "1" 
				// [3]=> string(1) "1" 
			// }
			$return['member_id'] = $login_data['tv_id'];
			$return['firstname'] = $login_data['tv_firstname'];
			$return['lastname'] = $login_data['tv_lastname'];
			$return['status'] = $login_data['tv_trangthai'];
			$return['is_member'] = true;
			$return['login'] = true;
			$return['action'] = true;
		} else {
			$return['login'] = false;
			$return['action'] = false;
		}
		$return['json'] = json_encode($return);
		return json_encode($return);
	}
	
	public function logout() {
		$return = array();
		if($this->model->logout()) {
			$return['message'] = 'Bạn đã đang xuất khỏi vnkhoe!';
			$return['success'] = true;
		} else {
			$return['message'] = 'Có lỗi trong quá trình xử lý!<br />Vui lòng thử lại sau.';
			$return['success'] = false;
		}
		return json_encode($return);
	}
}

$ajax = new Ajax();
$ajax->index();
//$ajax->logout();
//$ajax->check_login();

?>