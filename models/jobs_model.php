<?php

class Jobs_Model extends Model
{
    public function __construct(){
        parent::__construct();
    }
	
	public function getSlideContacts() {
		$sth = $this->db->prepare("SELECT tbl_job.*, congty_id, congty_name, tbl_typejob.name_vi, congty_anhvp from tbl_job, tbl_congty, tbl_typejob Where tbl_job.id_company = tbl_congty.congty_id and tbl_job.typejob = tbl_typejob.id limit 10");
        $sth->execute();
        $data = $sth->fetchAll();
		$count =  $sth->rowCount();
        if ($count > 0) {
			return $data;
        } else {
			return false;
        }
	}
	
	public function getHotContacts() {
		$sth = $this->db->prepare("SELECT tbl_vieclam.congty_name, tbl_vieclam.vieclam_ten, tbl_congty.congty_logo, congty_anhvp, congty_sologan, congty_diachi, vieclam_gioithieu, tbl_cauhinh_capbac.capbac, tbl_cauhinh_chucvu.chucvu  FROM tbl_vieclam, tbl_congty, tbl_cauhinh_capbac, tbl_cauhinh_chucvu WHERE tbl_vieclam.congty_id = tbl_congty.congty_id and tbl_vieclam.vieclam_capbac = tbl_cauhinh_capbac.id and tbl_vieclam.vieclam_chucvu = tbl_cauhinh_chucvu.id limit 8");
        $sth->execute();
		
        $data = $sth->fetchAll();
		$count =  $sth->rowCount();
        if ($count > 0) {
			return $data; 	
        } else {
			return false;
        }
	}
	
	public function getNewContacts() {
		$sth = $this->db->prepare("SELECT * FROM tbl_congty Order By congty_ngaydangky DESC limit 8");
        $sth->execute();
		
        $data = $sth->fetchAll();
		//PDO::FETCH_ASSOC: Return next row as an array indexed by column name
		//PDO::FETCH_BOTH: Return next row as an array indexed by both column name and number
		//PDO::FETCH_LAZY: Return next row as an anonymous object with column names as properties
		
        $count =  $sth->rowCount();
        if ($count > 0) {
			$return = array();
			foreach($data as $item) {
				if(strlen($item['congty_sologan']) >= 120) {
					$item['congty_sologan'] = $this->readMore($item['congty_sologan'], 120);
				}
				$return[] = $item;
			}
			return $return;
        } else {
			return false;
        }
	}
	
	public function getCategories() {
		$sth = $this->db->prepare("SELECT * FROM tbnganhnghe WHERE nganhnghe_trangthai=1 ORDER BY nganhnghe_thutu ASC LIMIT 7");
        $sth->execute();
		
        $data = $sth->fetchAll();
		
        $count =  $sth->rowCount();
        if ($count > 0) {
			return $data;
        } else {
			return false;
        }
	}
	
	public function getSeachOptionValue() {
		$sth = $this->db->prepare("SELECT nganhnghe_id, nganhnghe_tieude FROM tbnganhnghe WHERE nganhnghe_trangthai=1 ORDER BY nganhnghe_thutu ASC");
        $sth->execute();
		
        $data = $sth->fetchAll();
		
        $count =  $sth->rowCount();
        if ($count > 0) {
			return $data;
        } else {
			return false;
        }
	}
	
}
