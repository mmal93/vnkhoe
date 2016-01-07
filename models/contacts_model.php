<?php

class Contacts_Model extends Model
{
    public function __construct(){
        parent::__construct();
    }
	
	public function getSlideContacts() {
		$sth = $this->db->prepare("SELECT id, name, image FROM tbl_congty limit 10");
        $sth->execute();
		
        $data = $sth->fetchAll();
		//PDO::FETCH_ASSOC: Return next row as an array indexed by column name
		//PDO::FETCH_BOTH: Return next row as an array indexed by both column name and number
		//PDO::FETCH_LAZY: Return next row as an anonymous object with column names as properties
		
        $count =  $sth->rowCount();
        if ($count > 0) {
			return $data;
        } else {
			return false;
        }
	}
	
	public function getHotContacts() {
		$sth = $this->db->prepare("SELECT tbl_congty.*, tbl_cauhinh_diadiem.diadiem as dia_diem, tbl_cauhinh_nganh.nganh as ten_nganh 
			FROM tbl_congty, tbl_cauhinh_diadiem, tbl_cauhinh_nganh 
			Where tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id and tbl_congty.congty_nganh = tbl_cauhinh_nganh.id 
			Order By congty_ngaydangky DESC limit 8");
        $sth->execute();
		
        $data = $sth->fetchAll();
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
	
	public function getNewContacts() {
		$sth = $this->db->prepare("SELECT tbl_congty.*, tbl_cauhinh_diadiem.diadiem as dia_diem FROM tbl_congty, tbl_cauhinh_diadiem Where tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id Order By congty_ngaydangky DESC limit 8");
        $sth->execute();
		
        $data = $sth->fetchAll();
		//PDO::FETCH_ASSOC: Return next row as an array indexed by column name
		//PDO::FETCH_BOTH: Return next row as an array indexed by both column name and number
		//PDO::FETCH_LAZY: Return next row as an anonymous object with column names as properties
		
        $count =  $sth->rowCount();
        if ($count > 0) {
			$return = array();
			foreach($data as $item) {
				$_length = strlen($item['congty_sologan']);
				if($_length >= 120) {
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
	
	public function getDetailData($_id) {
		$sth = $this->db->prepare("SELECT * FROM tbl_congty Where congty_id = '".$_id."' Order By congty_ngaydangky DESC");
        $sth->execute();
        $data = $sth->fetchAll();
        $count =  $sth->rowCount();
        if ($count > 0) {
			return $data;
        } else {
			return false;
        }
	}
	
	public function getAllDetailData($_limit = 0) {
		if($_limit!=0) {
			$sth = $this->db->prepare("SELECT tbl_congty.*, tbl_cauhinh_diadiem.diadiem as dia_diem, tbl_cauhinh_nganh.nganh as ten_nganh 
			FROM tbl_congty, tbl_cauhinh_diadiem, tbl_cauhinh_nganh 
			Where tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id and tbl_congty.congty_nganh = tbl_cauhinh_nganh.id 
			Order By congty_ngaydangky DESC limit ".$_limit);
		} else {
			$sth = $this->db->prepare("SELECT tbl_congty.*, tbl_cauhinh_diadiem.diadiem as dia_diem, tbl_cauhinh_nganh.nganh as ten_nganh 
			FROM tbl_congty, tbl_cauhinh_diadiem, tbl_cauhinh_nganh 
			Where tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id and tbl_congty.congty_nganh = tbl_cauhinh_nganh.id 
			Order By congty_ngaydangky DESC");
		}
        $sth->execute();
        $data = $sth->fetchAll();
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
}
