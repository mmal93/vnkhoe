<?php
class Contacts extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {
		$this->view->showBodyClass('contact-page');
		$this->view->loadPageConfig('contact');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->showTemplate('contacts/main_start.tpl');
		$top_slider_data = $this->model->getSlideContacts();
		if($top_slider_data) {
			$this->view->assign('_data', $top_slider_data);
			$this->view->showTemplate('contacts/top_slider.tpl');
		}
		$hot_data = $this->model->getHotContacts();
		if($hot_data) {
			$this->view->assign('_hot_data', $hot_data);
			$this->view->showTemplate('contacts/hot_unit.tpl');
		}
		$new_data = $this->model->getHotContacts();
		if($new_data) {
			$this->view->assign('_new_data', $hot_data);
			$this->view->showTemplate('contacts/new_unit.tpl');
		}
		$category_data = $this->model->getCategories();
		if($category_data) {
			$this->view->assign('_categories', $category_data);
			$this->view->showTemplate('contacts/category_unit.tpl');
		}
		$this->view->showTemplate('contacts/main_end.tpl');
        $this->view->showFooter();
    }
	
	function search() {
		$this->getParam('id');
		$this->view->showBodyClass('contact-page');
		$this->view->loadPageConfig('contact');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->mainStart('container-fluid');
		$_form_data = $this->model->getSeachOptionValue();
		if($_form_data) {
			$this->view->assign('_form_data', $_form_data);
		}
		$this->view->showTemplate('contacts/form.tpl');
		
		$id = $this->getParam('id');
		isset($_POST['job']) && $job = $_POST['job'];
		isset($_POST['place']) && $place = $_POST['place'];
		isset($_POST['type']) && $type = $_POST['type'];
		isset($_POST['count']) && $type = $_POST['count'];
		
		if($id) {
			$_data = $this->model->getDetailData($id);
			if($_data) {
				$this->view->assign('_contact_data', $_detail_data);
				$this->view->ShowTemplate('contacts/detail');
			} else {
				echo 'Không tìm thấy nội dung';
			}
		} else {
			$_data = $this->model->getAllDetailData();
			if($_data) {
				$this->view->assign('_all_data', $_data);
				$this->view->ShowTemplate('contacts/all_data');
			} else {
				echo 'Không tìm thấy nội dung nào';
			}
		}
		$this->view->mainEnd();
        $this->view->showFooter();
	}
	
    function id() 
    {
		$this->view->showBodyClass('job-page');
		$this->view->loadPageConfig('job');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$this->view->showTemplate('jobs/main_start.tpl');
		$_id = $this->getId();
		if($_id) {
			$_detail_data = $this->model->getDetailData($_id);
			if($_detail_data) {
				$this->view->assign('_contact_data', $_detail_data);
				$this->view->ShowTemplate('contacts/detail');
			} else {
				echo 'Không tìm thấy nội dung';
			}
		} else {
			echo 'Không tìm thấy nội dung!';
		}
		$this->view->showTemplate('jobs/main_end.tpl');
        $this->view->showFooter();
    }
	
	function getId() {
		return $this->getParam('id');
	}
}