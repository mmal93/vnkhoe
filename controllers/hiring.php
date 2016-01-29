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
	function dang_tuyen() {
		$_step_id = 1;
		Session::destroy();
		$this->view->showBodyClass('hiring-page dang-tuyen-page');
		$this->view->loadPageConfig('hiring');
		//$this->view->showTemplate('hiring/header');
		$this->view->showHeader();
		$this->view->mainStart('container');
		if(isset($_POST['submit'])) {
			$_step_id = $_POST['step-id'];
			switch($_step_id) {
				case '1':
					$goi_id = $_POST['gid'];
					$data_step2 = $this->model->getStep2Data($goi_id);
					if($data_step2) {
						$this->view->assign("_data_step2", $data_step2);
						$_step_id = $_step_id + 1;
					} else {
						$_step_id = 1;
					}
					break;
				
				case '2':
					
					break;
				case '3':
					
					break;
				case '4':
					
					break;
				default: 
					$_step_id = 1;
					break;
			}
		} else {
			//normal case or error
			$data_step1 = $this->model->getStep1Data();
			if($data_step1) {
				$this->view->assign("_data_step1", $data_step1);
			}
		}
		$this->view->assign('_step_id', $_step_id);
		$this->view->showTemplate('hiring/dang_tuyen');
		//$this->view->showPartner();
		$this->view->mainEnd();
        $this->view->showFooter();
	}
}