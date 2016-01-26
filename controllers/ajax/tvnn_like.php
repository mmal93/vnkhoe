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
class tvnnLike extends Controller {

    function __construct() {
        parent::__construct();
		$this->loadModel('post_like', BASE_DIR.'models'.DS);
    }
    
    function index() 
    {
		isset($_POST['action']) && $_action = $_POST['action'];
		if ($this->is_Ajax()) {
			if(isset($_action) && !empty($_action)) {
				if($_action=='job_like') {
					$this->member_like();
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
	
	public function member_like() {
		$return = array();
		$return['success']=false;
		$is_login = false;
		$member_id = $_SESSION['member_id'];
		$member_type = null;
		$_id = $this->getParamFromURL('id', $_POST['current_url']);
		//$_id = $this->getParamFromURL('id', 'http://localhost/vnkhoe/jobs/id/17');
		if(isset($_SESSION['member_login'])) {
			$is_login = $_SESSION['member_login'];
		}
		if(isset($_SESSION['member_type'])) {
			$member_type = $_SESSION['member_type'];
		}
		if($is_login==true) {
			//loged in 
			$return['is_login']=true;
			//check: is active or not
			$is_like = $_POST['is_like'];
			$is_like = $is_like=='false'?true:false;
			$_result = $this->model->member_job_like($_id, $member_id, $is_like);
			$return['job_id'] = $_id;
			$return['member_id'] = $member_id;
			if($_result) {
				$is_like==true?$return['message'] = 'Liked!':$return['message'] = 'Unliked!';
				$return['success'] = true;
			} else {
				$return['message'] = 'Xin lỗi, yêu cầu của quý khách hiện chưa được xử lý, chúng tôi rất tiếc về điều này!';
			}
			$return['is_like'] = $is_like;
		} else {
			$return['is_login']=false;
		}
		$return['str'] = $_result;
		echo json_encode($return);
	}
}

$tvnnlike = new tvnnLike();
$tvnnlike->index();
//$likepost->member_like();

?>