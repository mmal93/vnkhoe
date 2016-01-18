<?php
class Authors extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {
		$this->view->showBodyClass('authors-page');
		$this->view->loadPageConfig('authors');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->mainStart('container-fluid');
		echo '<div style="min-height: 120px; width: 100%;"></div>';
		$this->view->mainEnd();
        $this->view->showFooter();
    }
	
    function id() 
    {
		$this->view->showBodyClass('author-detail-page');
		$this->view->loadPageConfig('author-detail');
		$_id = $this->getParam('id');
		if($_id) {
			$_detail_data = $this->model->getData($_id);
			if($_detail_data) {
				$this->view->assign('_author_data', $_detail_data);
				$this->view->showTemplate('authors/author_header');
				$this->view->mainStart('container-fluid');
				$this->view->ShowTemplate('authors/detail');
			} else {
				$this->view->mainStart('container-fluid');
				echo 'Không tìm thấy nội dung';
			}
		} else {
			$this->view->mainStart('container-fluid');
			echo 'Không tìm thấy nội dung!';
		}
		$this->view->mainEnd();
        $this->view->showFooter();
    }
}