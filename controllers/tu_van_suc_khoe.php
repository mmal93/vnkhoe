<?php
class tu_van_suc_khoe extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() 
    {    
//	khi click vao tu-van-suc-khoe no se hien code duoc viet o function index nay
		// $this->view->loadPageConfig('register');
		$this->view->show_header_banner();
		//ham nay hien banner
        $this->view->showHeader();
		//ham nay hien header
		
		$this->view->showTemplate('tu_van_suc_khoe/vidu.tpl');
		//Ham nay se lay file .tpl o thu muc template /users/vnkhoe/ nha
		//em cac function khac thi se ro 
		
        $this->view->showFooter();
    }
}
