<?php

class Account_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function register($_email = 'null', $_password = 'null', $_firstname = 'null', $_lastname = 'null', $_tel = 'null', $_job = 'null', $_gender = 'null') {
		try {
			$this->db->beginTransaction();
			$sth = $this->db->prepare("INSERT INTO tbl_member(
				member_email, 
				member_password, 
				member_firstname, 
				member_lastname, 
				member_sex, 
				member_phone, 
				member_job_name, 
				member_created 
			)VALUES(
				'".$_email."', 
				'".md5($_password)."', 
				'".$_firstname."', 
				'".$_lastname."', 
				'".$_gender."', 
				'".$_tel."', 
				'".$_job."', 
				now() 
			)");
			$sth->execute();
			$this->db->commit();
		} catch (PDOException $e) {
			echo $e->getMessage();
			if ($sth->isTransactionActive()){
				$sth->rollBack();
				try { $sth->rollBack(); } catch (Exception $e2) {}
			}
			return false;
		}
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		} else {
			return false;
		}
	}
	
	public function isMember($_email) {
		try{
			$sth = $this->db->prepare('Select member_email from tbl_member Where member_email = :email');
			$sth->execute(array(
				':email' => $_email
			));
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		} else {
			return false;
		}
	}
	
	public function login($_email, $_password) {
		try{
			$sth = $this->db->prepare("
				SELECT 
					member_id, 
					member_email, 
					member_password, 
					member_firstname, 
					member_lastname, 
					member_sex, 
					member_phone, 
					member_job_name, 
					member_created 
				FROM tbl_member 
				WHERE member_email = '".$_email."' AND member_password = '".md5($_password)."'"
			);
			$sth->execute();
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
		$data = $sth->fetch();
		$count =  $sth->rowCount();
		if ($count > 0) {
			return $data;
		}
		return false;
		//header('location: ./login');
	}
	
	public function getListWorkSave($member_id = null) {
		try{
			$sth = $this->db->prepare("
				SELECT tbl_vieclam.vieclam_id, 
					vieclam_ten, tbl_congty.congty_name, 
					tbl_congty.congty_id, 
					CONCAT(DAYNAME(vieclam_hannop), ', ', DATE_FORMAT(vieclam_hannop, '%d/%m/%Y')) as vieclam_hannop 
				FROM tbl_vieclam, tbl_member_like_job, tbl_congty 
				Where tbl_vieclam.vieclam_id = tbl_member_like_job.vieclam_id 
				and tbl_vieclam.congty_id = tbl_congty.congty_id 
				and like_status = '1' 
				limit 10
			");
			echo $sth->queryString;
			$sth->execute();
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
		$data = $sth->fetchAll();
		$count = $sth->rowCount();
		if($count>0) {
			return $data;
		}
		return false;
	}
	
	
}
