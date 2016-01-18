<?php
class Jobs extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {
		$this->view->showBodyClass('job-page');
		$this->view->loadPageConfig('job');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->mainStart('container-fluid');
		$top_slider_data = $this->model->getSlideContacts();
		if($top_slider_data) {
			$this->view->assign('_data', $top_slider_data);
			$this->view->showTemplate('jobs/top_slider.tpl');
		}
		$hot_data = $this->model->getHotContacts();
		if($hot_data) {
			$this->view->assign('_hot_data', $hot_data);
			$this->view->showTemplate('jobs/hot_unit.tpl');
		}
		$new_data = $this->model->getNewContacts();
		if($new_data) {
			$this->view->assign('_new_data', $hot_data);
			$this->view->showTemplate('jobs/new_unit.tpl');
		}
		$category_data = $this->model->getCategories();
		if($category_data) {
			$this->view->assign('_categories', $category_data);
			$this->view->showTemplate('jobs/category_unit.tpl');
		}
		$this->view->mainEnd();
        $this->view->showFooter();
    }
	
	function search() {
		$this->view->showBodyClass('job-search-page');
		$this->view->loadPageConfig('job-search');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->mainStart('container-fluid');
		$_form_data = $this->model->getSeachOptionValue();
		if($_form_data) {
			$this->view->assign('_form_data', $_form_data);
		}
		$this->view->showTemplate('jobs/form.tpl');
		
		$id = $this->getParam('id');
		$data = $this->model->getSearchData();
		if(isset($_POST['submit'])) {
			$this->view->assign('_search_data', $data);
			$this->view->ShowTemplate('jobs/result');
		}
		else if($id) {
			$_data = $this->model->getDetailData($id);
			if($_data) {
				$this->view->assign('_job_data', $_detail_data);
				$this->view->ShowTemplate('jobs/detail');
			} else {
				echo 'Không tìm thấy nội dung';
			}
		} else {
			$_data = $this->model->getAllDetailData();
			if($_data) {
				$this->view->assign('_all_data', $_data);
				$this->view->ShowTemplate('jobs/all_data');
			} else {
				echo 'Không tìm thấy nội dung nào';
			}
		}
		$this->view->mainEnd();
        $this->view->showFooter();
	}
    function id() 
    {
		$this->view->showBodyClass('job-detail-page');
		$this->view->loadPageConfig('job-detail');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->mainStart('container-fluid');
		$_id = $this->getParam('id');
		if($_id) {
			$_detail_data = $this->model->getDetailData($_id);
			if($_detail_data) {
				$this->view->assign('_job_data', $_detail_data);
				$this->view->ShowTemplate('jobs/detail');
			} else {
				echo 'Không tìm thấy nội dung';
			}
		} else {
			echo 'Không tìm thấy nội dung!';
		}
		$this->view->mainEnd();
        $this->view->showFooter();
    }
}