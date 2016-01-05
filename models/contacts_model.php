<?php

class Contacts_Model extends Model
{
    public function __construct(){
        parent::__construct();
    }
	
	public function getSlideContacts() {
		$sth = $this->db->prepare("SELECT congty_id, congty_name, congty_anhvp FROM tbl_congty limit 10");
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
