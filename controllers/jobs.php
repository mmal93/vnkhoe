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
		$this->view->showTemplate('jobs/main_start.tpl');
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
		$new_data = $this->model->getHotContacts();
		if($new_data) {
			$this->view->assign('_new_data', $hot_data);
			$this->view->showTemplate('jobs/new_unit.tpl');
		}
		$category_data = $this->model->getCategories();
		if($category_data) {
			$this->view->assign('_categories', $category_data);
			$this->view->showTemplate('jobs/category_unit.tpl');
		}
		$this->view->showTemplate('jobs/main_end.tpl');
        $this->view->showFooter();
    }
	
	function search() {
		
		$this->view->showBodyClass('job-page');
		$this->view->loadPageConfig('job');
		$this->view->show_header_banner();
        $this->view->showHeader();
		$_form_data = $this->model->getSeachOptionValue();
		if($_form_data) {
			$this->view->assign('_form_data', $_form_data);
		}
		$this->view->showTemplate('contacts/form.tpl');
		
        $this->view->showFooter();
	}
    
    function run()
    {
        $this->model->run();
    }
}