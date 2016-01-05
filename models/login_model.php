<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function is_member($_email) {
		$sth = $this->db->prepare('Select tv_id from tbl_thanhvien Where tv_email = :email');
		$sth->execute(array(
			':email' => $_email
		));
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		} else {
			return false;
		}
	}
	
	public function login($_email, $_password) {
		$sth = $this->db->prepare("SELECT tv_id, tv_email, tv_firstname, tv_lastname, tv_trangthai FROM tbl_thanhvien WHERE 
            tv_email = :email AND tv_password = :password");
        $sth->execute(array(
            ':email' => $_email,
            ':password' => md5($_password)
        ));
		
        $data = $sth->fetch();
		//PDO::FETCH_ASSOC: Return next row as an array indexed by column name
		//PDO::FETCH_BOTH: Return next row as an array indexed by both column name and number
		//PDO::FETCH_LAZY: Return next row as an anonymous object with column names as properties
		
        $count =  $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            Session::set('tv_id', $data['tv_id']);
            Session::set('email', $data['tv_email']);
            Session::set('firstname', $data['tv_firstname']);
            Session::set('lastname', $data['tv_lastname']);
            Session::set('role', $data['tv_trangthai']);
            Session::set('loggedIn', true);
            //header('location: ../dashboard');
			return $data;
        } else {
			Session::destroy();
			return null;
			
            //header('location: ./login');
        }
	}
	
	public function logout() {
		Session::destroy();
		return true;
	}
/*INSERT INTO `vnkhoe`.`tbl_thanhvien` (`tv_id`, `tv_email`, `tv_password`, `tv_firstname`, `tv_lastname`, `tv_phone`, `tv_ngaythamgia`, `tv_cv`, `tv_tuvan_like`, `tv_nganh_like`, `tv_chucvu_like`, `tv_capbac_like`, `tv_diadiem_like`, `tv_code`, `tv_trangthai`) VALUES (NULL, 'ducmonmz@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'luong', 'mon', '01698121081', '2016-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1');*/	
	
}
