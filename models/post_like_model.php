<?php

class post_like_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function isset_member_job_like($membr_id, $job_id) {
		try {
			$sth = $this->db->prepare("SELECT id FROM tbl_member_like_job WHERE member_id = '".$membr_id."' and job_id = '".$job_id."'");
			$sth->execute();
		} catch (PDOException $e) {
			return false;
		}
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		}
		return false;
	}
	
	public function member_job_like($job_id = null, $member_id = null, $is_like = false) {
		if(empty($job_id)||empty($member_id)) {
			return false;
		}
		$_like = $is_like==true?'1':'0';
		$_is_like_set = $this->isset_member_job_like($member_id, $job_id);
		if($_is_like_set) {
			$_sql = "Update tbl_member_like_job SET 
				like_status = '".$_like."' 
			WHERE 
				member_id='".$member_id."' 
				and job_id = '".$job_id."' 
			";
		} else {
			$_sql = "INSERT INTO tbl_member_like_job(
				member_id, 
				job_id, 
				like_status 
			)VALUES(
				'".$member_id."', 
				'".$job_id."', 
				'".$_like."'
			)";
		}
		try {
			$this->db->beginTransaction();
			$sth = $this->db->prepare($_sql);
			$sth->execute();
			$this->db->commit();
		} catch (PDOException $e) {
			print_r($e->getMessage());
			if ($sth->isTransactionActive()){
				$sth->rollBack();
				try { $sth->rollBack(); } catch (Exception $e2) {}
			}
			return false;
		}
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		}
		return false;
	}
	
	public function isset_member_tvnn_like($membr_id, $article_job_id) {
		try {
			$sth = $this->db->prepare("SELECT id FROM tbl_member_like_tvnn WHERE member_id = '".$membr_id."' and article_job_id = '".$article_job_id."'");
			$sth->execute();
		} catch (PDOException $e) {
			return false;
		}
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		}
		return false;
	}
	
	public function member_tvnn_like($article_job_id = null, $member_id = null, $is_like = false) {
		if(empty($article_job_id)||empty($member_id)) {
			return false;
		}
		$_like = $is_like==true?'1':'0';
		$_is_like_set = $this->isset_member_tvnn_like($member_id, $article_job_id);
		if($_is_like_set) {
			$_sql = "Update tbl_member_like_tvnn SET 
				like_status = '".$_like."' 
			WHERE 
				member_id='".$member_id."' 
				and article_job_id = '".$article_job_id."' 
			";
		} else {
			$_sql = "INSERT INTO tbl_member_like_tvnn(
				member_id, 
				article_job_id, 
				like_status 
			)VALUES(
				'".$member_id."', 
				'".$article_job_id."', 
				'".$_like."'
			)";
		}
		try {
			$this->db->beginTransaction();
			$sth = $this->db->prepare($_sql);
			$sth->execute();
			$this->db->commit();
		} catch (PDOException $e) {
			print_r($e->getMessage());
			if ($sth->isTransactionActive()){
				$sth->rollBack();
				try { $sth->rollBack(); } catch (Exception $e2) {}
			}
			return false;
		}
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		}
		return false;
	}
	
	public function isset_member_tvsk_like($membr_id, $article_job_id) {
		try {
			$sth = $this->db->prepare("SELECT id FROM tbl_member_like_tvsk WHERE member_id = '".$membr_id."' and tvsk_id = '".$article_job_id."'");
			$sth->execute();
		} catch (PDOException $e) {
			return false;
		}
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		}
		return false;
	}
	
	public function member_tvsk_like($article_job_id = null, $member_id = null, $is_like = false) {
		if(empty($article_job_id)||empty($member_id)) {
			return false;
		}
		$_like = $is_like==true?'1':'0';
		$_is_like_set = $this->isset_member_tvsk_like($member_id, $article_job_id);
		if($_is_like_set) {
			$_sql = "Update tbl_member_like_tvsk SET 
				like_status = '".$_like."' 
			WHERE 
				member_id='".$member_id."' 
				and tvsk_id = '".$article_job_id."' 
			";
		} else {
			$_sql = "INSERT INTO tbl_member_like_tvsk(
				member_id, 
				tvsk_id, 
				like_status 
			)VALUES(
				'".$member_id."', 
				'".$article_job_id."', 
				'".$_like."'
			)";
		}
		try {
			$this->db->beginTransaction();
			$sth = $this->db->prepare($_sql);
			$sth->execute();
			$this->db->commit();
		} catch (PDOException $e) {
			print_r($e->getMessage());
			if ($sth->isTransactionActive()){
				$sth->rollBack();
				try { $sth->rollBack(); } catch (Exception $e2) {}
			}
			return false;
		}
		$count =  $sth->rowCount();
		if($count>0) {
			return true;
		}
		return false;
	}
	
}
