<?php
class Tu_van_nghe_nghiep extends Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() 
    {
		$this->view->loadPageConfig('index');
		$this->view->show_header_banner();
		$this->view->showHeader();
		$this->view->mainStart('container-fluid');
		$data = $this->model->getData();
		if($data) {
			$this->view->assign('_new_data', $data);
			$this->view->showTemplate('tu_van_nghe_nghiep'.DS.'new_unit');
		}
		
		$this->view->showPartner();
		$this->view->mainEnd();
		$this->view->showFooter();
    }
	public function id() {
		$this->view->loadPageConfig('index');
		$this->view->show_header_banner();
		$this->view->showHeader();
		$this->view->mainStart('container-fluid');
		$_id = $this->getId();
		if($_id) {
			$_detail_data = $this->model->getData($_id);
			if($_detail_data) {
				$this->view->assign('_job_data', $_detail_data);
				$this->view->ShowTemplate('tu_van_nghe_nghiep/detail');
				$_name = $_detail_data[0]['name_vi'];
				$_name_arr = preg_split("/[\s,]+/", $_name);
				$_name_arr = array_unique($_name_arr);
				$_related = $this->model->getRelatedData($_id, $_name_arr, 5);
				if($_related) {
					$this->view->assign('_related', $_related);
					$this->view->showTemplate('tu_van_nghe_nghiep/related_unit');
				}
			} else {
				echo 'Không tìm thấy nội dung';
			}
			
		} else {
			echo 'Không tìm thấy nội dung!';
		}
		$this->view->showPartner();
		$this->view->mainEnd();
		$this->view->showFooter();
	}
	
	function getId() {
		return $this->getParam('id');
	}
}