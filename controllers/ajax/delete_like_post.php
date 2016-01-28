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
class DeleteLikePost extends Controller {

    function __construct() {
        parent::__construct();
		$this->loadModel('post_delete_like', BASE_DIR.'models'.DS);
    }
    
    function index() 
    {
		isset($_POST['action']) && $_action = $_POST['action'];
		if ($this->is_Ajax()) {
			if(isset($_action) && !empty($_action)) {
				if($_action=='delete_member_job') {
					$this->delete_member_job();
				} else {
					return false;
				}
			}
		}
    }
	
	//Function to check if the request is an AJAX request
	public function is_Ajax() {
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
	}
	
	public function delete_member_job() {
		$return = array();
		$return['success']=false;
		$vieclam_id = null;
		isset($_POST['vieclam_id']) && $vieclam_id = $_POST['vieclam_id'];
		$member_id = null;
		isset($_SESSION['member_id']) && $member_id=$_SESSION['member_id'];
		if(!isset($member_id) || empty($vieclam_id)) {
			$return['is_login'] = false;
		} else {
			$return['is_login'] = true;
		}
		$return['member_id'] = $member_id;
		$return['vieclam_id'] = $vieclam_id;
		$return['message'] = 'Đang chuẩn bị thực thi...';
		if(isset($vieclam_id) && !empty($vieclam_id) && !empty($member_id)) {
			$_result = $this->model->delete_member_job($member_id, $vieclam_id);
			if($_result) {
				$return['success'] = true;
				$return['message'] = 'Đã xóa dữ liệu';
			} else {
				$return['message'] = nl2br('Chúng tôi rất tiếc vì hiện tại chưa thể xử lý yêu cầu này!\n<font color="#f00">Bạn nên tải lại trình duyệt để làm mới dữ liệu.</font>');
			}
		}
		echo json_encode($return);
	}
	
}

$del_likepost = new DeleteLikePost();
$del_likepost->index();
//$del_likepost->delete_member_job();

?>