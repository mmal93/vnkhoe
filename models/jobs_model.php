<?php

class Jobs_Model extends Model
{
    public function __construct(){
        parent::__construct();
    }
	
	public function getSlideContacts() {
		$sth = $this->db->prepare("SELECT tbl_vieclam.vieclam_id, vieclam_ten, vieclam_anhvp, tbl_vieclam.congty_id, tbl_congty.congty_name, tbl_cauhinh_nganh.nganh_name, congty_anhvp 
			from tbl_vieclam, tbl_congty, tbl_cauhinh_nganh 
			Where tbl_vieclam.congty_id = tbl_congty.congty_id and tbl_vieclam.vieclam_nganh = tbl_cauhinh_nganh.nganh_id 
			limit 10");
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
		$sth = $this->db->prepare("
		SELECT distinct tbl_vieclam.vieclam_id, 
			tbl_congty.congty_id, 
			tbl_vieclam.congty_name, 
			tbl_vieclam.vieclam_ten, 
			vieclam_anhvp, 
			tbl_congty.congty_logo, 
			congty_anhvp, 
			congty_sologan, 
			congty_diachi, 
			vieclam_gioithieu, 
			GROUP_CONCAT(DISTINCT chucvu_name SEPARATOR ' - ') as chucvu_name, 
            GROUP_CONCAT(DISTINCT capbac_name SEPARATOR ' - ') as capbac_name,
			tbl_cauhinh_diadiem.diadiem  
		FROM tbl_vieclam, 
        	tbl_congty, 
        	tbl_cauhinh_capbac, 
            tbl_vieclam_capbac, 
            tbl_cauhinh_diadiem, 
            tbl_cauhinh_chucvu, 
            tbl_vieclam_chucvu 
		WHERE tbl_vieclam.congty_id = tbl_congty.congty_id 
        	and tbl_vieclam.vieclam_id = tbl_vieclam_capbac.vieclam_id 
            and tbl_vieclam_capbac.capbac_id = tbl_cauhinh_capbac.capbac_id 
            and tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id 
            and tbl_vieclam.vieclam_id = tbl_vieclam_chucvu.vieclam_id 
            and tbl_vieclam_chucvu.chucvu_id = tbl_cauhinh_chucvu.chucvu_id
        GROUP by tbl_vieclam.vieclam_id 
		limit 8");
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
		$sth = $this->db->prepare("SELECT distinct tbl_vieclam.vieclam_id, 
			tbl_congty.congty_id, 
			tbl_vieclam.congty_name, 
			tbl_vieclam.vieclam_ten, 
			vieclam_anhvp, 
			tbl_congty.congty_logo, 
			congty_anhvp, 
			congty_sologan, 
			congty_diachi, 
			vieclam_gioithieu, 
			GROUP_CONCAT(DISTINCT chucvu_name SEPARATOR ' - ') as chucvu_name, 
            GROUP_CONCAT(DISTINCT capbac_name SEPARATOR ' - ') as capbac_name,
			tbl_cauhinh_diadiem.diadiem  
		FROM tbl_vieclam, 
        	tbl_congty, 
        	tbl_cauhinh_capbac, 
            tbl_vieclam_capbac, 
            tbl_cauhinh_diadiem, 
            tbl_cauhinh_chucvu, 
            tbl_vieclam_chucvu 
		WHERE tbl_vieclam.congty_id = tbl_congty.congty_id 
        	and tbl_vieclam.vieclam_id = tbl_vieclam_capbac.vieclam_id 
            and tbl_vieclam_capbac.capbac_id = tbl_cauhinh_capbac.capbac_id 
            and tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id 
            and tbl_vieclam.vieclam_id = tbl_vieclam_chucvu.vieclam_id 
            and tbl_vieclam_chucvu.chucvu_id = tbl_cauhinh_chucvu.chucvu_id
        GROUP by tbl_vieclam.vieclam_id 
		limit 8");
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
	
	public function getDetailData($_id, $member_id = null) {
		$sth = $this->db->prepare("SELECT distinct tbl_vieclam.vieclam_id, 
			tbl_congty.congty_id, 
			tbl_vieclam.congty_name, 
			tbl_vieclam.vieclam_ten, 
			tbl_vieclam.vieclam_anhvp,
			congty_logo, 
			congty_sologan, 
			congty_diachi, 
			vieclam_gioithieu, 
			vieclam_yeucau, 
			GROUP_CONCAT(DISTINCT chucvu_name SEPARATOR ' - ') as chucvu_name, 
            GROUP_CONCAT(DISTINCT capbac_name SEPARATOR ' - ') as capbac_name,
			tbl_cauhinh_diadiem.diadiem  
		FROM tbl_vieclam, 
        	tbl_congty, 
        	tbl_cauhinh_capbac, 
            tbl_vieclam_capbac, 
            tbl_cauhinh_diadiem, 
            tbl_cauhinh_chucvu, 
            tbl_vieclam_chucvu 
		WHERE tbl_vieclam.congty_id = tbl_congty.congty_id 
        	and tbl_vieclam.vieclam_id = tbl_vieclam_capbac.vieclam_id 
            and tbl_vieclam_capbac.capbac_id = tbl_cauhinh_capbac.capbac_id 
            and tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id 
            and tbl_vieclam.vieclam_id = tbl_vieclam_chucvu.vieclam_id 
            and tbl_vieclam_chucvu.chucvu_id = tbl_cauhinh_chucvu.chucvu_id 
			and tbl_vieclam.vieclam_id = '".$_id."' 
        GROUP by tbl_vieclam.vieclam_id");
        $sth->execute();
        $data = $sth->fetchAll();
        $count =  $sth->rowCount();
        if ($count > 0) {
			if(isset($member_id)&&(!empty($member_id))) {
				$_like = $this->getMemberLikeStatus($member_id, $_id);
				if($_like) {
					$data[0]['like_status'] = '1';
				} else {
					$data[0]['like_status'] = '0';
				}
			}
			return $data;
        }
		return false;
        
	}
	
	public function getMemberLikeStatus($member_id, $job_id) {
		$sth = $this->db->prepare("SELECT like_status 
		FROM tbl_member_like_job 
		WHERE tbl_member_like_job.job_id ='".$job_id."' 
			and tbl_member_like_job.member_id = '".$member_id."' 
        ");
        $sth->execute();
        $data = $sth->fetchAll();
        $count =  $sth->rowCount();
        if ($count > 0) {
			$like_status = $data[0]["like_status"];
			if($like_status=='1') {
				return true;
			}
        }
		return false;
	}
	
	public function getSearchData() {
		$_job = $_place = $_type = $_count = null;
		isset($_POST['job']) && $_job = $_POST['job'];
		isset($_POST['place']) && $_place = $_POST['place'];
		isset($_POST['type']) && $_type = $_POST['type'];
		isset($_POST['count']) && $_count = $_POST['count'];
		$param_arr = array();
		$table_arr = array();
		if($_type) {
			$param_arr[] = "congty_nganh = ".$_type."";
			$table_arr[] = '';
		}
		if($_place) {
			$param_arr[] = "tbl_cauhinh_diadiem.diadiem like '%".trim($_place)."%' and tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id";
			$table_arr[] = '';
		}
		if($_count) {
			$param_arr[] = "congty_size = ".trim($_count);
			$table_arr[] = '';
		}
		
		$_query = "SELECT distinct tbl_congty.*, tbl_cauhinh_diadiem.diadiem as dia_diem, tbl_cauhinh_nganh.nganh_name FROM tbl_congty, tbl_cauhinh_diadiem, tbl_cauhinh_nganh";
		foreach($table_arr as $_table) {
			if($_table!='') {
				$_query .= ', '.$_table;
			}
		}
		$_query .= ' where tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id and tbl_congty.congty_nganh = tbl_cauhinh_nganh.nganh_id and ';
		if($table_arr) {
			$_query .="(";
		}
		foreach($param_arr as $_param) {
			$_query .= $_param . ' or ';
		}
		$_query = preg_replace('/\sor\s$/', '', $_query);
		$_query = preg_replace('/\sand\s$/', '', $_query);
		if($table_arr) {
			$_query .=")";
		}
		//echo $_query;
		$sth = $this->db->prepare($_query);
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
			$sth = $this->db->prepare("SELECT tbl_congty.*, tbl_vieclam.*, tbl_cauhinh_diadiem.diadiem as dia_diem, tbl_cauhinh_nganh.nganh_name 
			FROM tbl_congty, tbl_cauhinh_diadiem, tbl_cauhinh_nganh 
			Where tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id and tbl_congty.congty_nganh = tbl_cauhinh_nganh.nganh_id and tbl_congty.congty_id = tbl_vieclam.congty_id 
			Order By congty_ngaydangky DESC limit ".$_limit);
		} else {
			$sth = $this->db->prepare("SELECT tbl_congty.*, tbl_vieclam.*, tbl_cauhinh_diadiem.diadiem as dia_diem, tbl_cauhinh_nganh.nganh_name 
			FROM tbl_congty, tbl_cauhinh_diadiem, tbl_cauhinh_nganh, tbl_vieclam 
			Where tbl_congty.congty_diadiem = tbl_cauhinh_diadiem.id and tbl_congty.congty_nganh = tbl_cauhinh_nganh.nganh_id and tbl_congty.congty_id = tbl_vieclam.congty_id 
			Order By congty_ngaydangky DESC");
		}
        $sth->execute();
        $data = $sth->fetchAll();
        $count =  $sth->rowCount();
        if ($count > 0) {
			$return = array();
			foreach($data as $item) {
				if(strlen($item['vieclam_gioithieu']) >= 120) {
					$item['vieclam_gioithieu'] = $this->readMore($item['vieclam_gioithieu'], 120);
				}
				$return[] = $item;
			}
			return $return;
        } else {
			return false;
        }
	}
	
}
