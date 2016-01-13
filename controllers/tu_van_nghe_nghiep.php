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
}