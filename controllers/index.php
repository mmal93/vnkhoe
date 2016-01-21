<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
		if(Session::get('member_id')) {
			//is member
			$this->view->loadPageConfig('index');
			// $this->view->show_header_banner();
			//$this->view->showTopSearch();
			$this->view->showBodyClass('member-dashboard-page member-page index-page home-page');
			$this->view->showHeader();
			$this->view->mainStart('container-fluid');
			$this->view->showTemplate('account/dashboard/head_message');
			$this->view->assign('header_title_member', 'Trang chủ thông tin - xin chào '.Session::get('member_firstname').' '.Session::get('member_lastname'));
			$this->view->showTemplate('account/dashboard/top_banner');
			$this->view->showTemplate('home_advertisments');
			$this->view->showPartner();
			$this->view->showTemplate('home_employer');
			$this->view->showTemplate('bottom_link');
			$this->view->mainEnd();
			$this->view->showFooter();
		} else {
			$this->view->loadPageConfig('index');
			$this->view->show_header_banner();
			$this->view->showTopSearch();
			$this->view->showHeader();
			$this->view->mainStart('index-page home-page container-fluid');
			$this->view->showTemplate('home_advertisments');
			$this->view->showPartner();
			$this->view->showTemplate('home_employer');
			$this->view->showTemplate('bottom_link');
			$this->view->mainEnd();
			$this->view->showFooter();
		}
    }   
}