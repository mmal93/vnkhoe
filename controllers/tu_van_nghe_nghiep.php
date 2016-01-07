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
		$data = $this->model->getJobs();
		$this->view->showPartner();
		$this->view->mainEnd();
		$this->view->showFooter();
    }
}