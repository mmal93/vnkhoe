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
					$_company_position = $this->model->getCompanyPositionList();
					if($data_step2) {
						$this->view->assign("_data_step2", $data_step2);
						$this->view->assign("gid", $goi_id);
						if($_company_position) {
							$this->view->assign('_form_data', $_company_position);
						}
						$_step_id = 2;
					} else {
						$_step_id = 1;
					}
					break;
				
				case '2':
					//get value and add to database
					$goi_id = $_POST['gid'];
					$_company_name = $_company_email = $_company_password = $_company_re_password = $_company_tel = $_company_address = $_company_position = $_company_anser = '';
					isset($_POST['company-name']) && $_company_name = $_POST['company-name'];
					isset($_POST['email']) && $_company_email = $_POST['email'];
					isset($_POST['password']) && $_company_password = $_POST['password'];
					isset($_POST['re-password']) && $_company_re_password = $_POST['re-password'];
					isset($_POST['tel']) && $_company_tel = $_POST['tel'];
					isset($_POST['address']) && $_company_address = $_POST['address'];
					isset($_POST['position']) && $_company_position = $_POST['position'];
					isset($_POST['anser']) && $_company_anser = $_POST['anser'];
					
					$gt_item = $this->model->getStep2Item($goi_id, "goi_step2_gioithieu");
					$vp_item = $this->model->getStep2Item($goi_id, "goi_step2_vanphong");
					$ns_item = $this->model->getStep2Item($goi_id, "goi_step2_nhansu");
					$vl_item = $this->model->getStep2Item($goi_id, "goi_step2_vieclam");
					$gioi_thieu_id = array();
					$van_phong_id = array();
					$nhan_su_id = array();
					$viec_lam_id = array();
					foreach($gt_item as $gt) {
						$_str_index = 'gioi-thieu-'.$gt['item_id'];
						if(isset($_POST[$_str_index])) {
							$gioi_thieu_id[] = $gt['item_id'];
						}
					}
					foreach($vp_item as $vp) {
						$_str_index = 'van-phong-'.$vp['item_id'];
						if(isset($_POST[$_str_index])) {
							$van_phong_id[] = $vp['item_id'];
						}
					}
					foreach($ns_item as $ns) {
						$_str_index = 'nhan-su-'.$ns['item_id'];
						if(isset($_POST[$_str_index])) {
							$nhan_su_id[] = $ns['item_id'];
						}
					}
					foreach($vl_item as $vl) {
						$_str_index = 'viec-lam-'.$vl['item_id'];
						if(isset($_POST[$_str_index])) {
							$viec_lam_id[] = $vl['item_id'];
						}
					}
					$is_done = $this->model->setStep2Data($_company_name, $_company_email, $_company_password, $_company_re_password, $_company_tel, $_company_address, $_company_position, $_company_anser, $gioi_thieu_id, $van_phong_id, $nhan_su_id, $viec_lam_id);
					if($is_done) {
						$_step_id = 3;
					} else {
						$_step_id = 2;
					}
					break;
				case '3':
					
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