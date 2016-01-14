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
		$this->view->mainStart();
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
		$this->view->mainStart();
		$_id = $this->getId();
		if($_id) {
			$_detail_data = $this->model->getData($_id);
			if($_detail_data) {
				$this->view->assign('_job_data', $_detail_data);
				$this->view->ShowTemplate('tu_van_nghe_nghiep/detail');
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