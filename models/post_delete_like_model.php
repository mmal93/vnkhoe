<?php

class post_delete_like_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function delete_member_job($member_id = null, $vieclam_id = null) {
		if(empty($vieclam_id)||empty($member_id)) {
			return false;
		}
		try {
			$this->db->beginTransaction();
			$sth = $this->db->prepare("
				UPDATE tbl_member_like_job SET like_status = '0' 
				WHERE 
					vieclam_id = '".$vieclam_id."' 
					and member_id = '".$member_id."' 
			");
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
		if ($count > 0) {
			return true;
		}
		return false;
	}
	
}
