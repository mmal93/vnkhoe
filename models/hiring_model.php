<?php

class Hiring_Model extends Model
{
    public function __construct(){
        parent::__construct();
    }
	
	public function getStep1Item($_goi_id, $_table_p, $_table_c) {
		$data = null;
		try{
			$sth = $this->db->prepare("
				SELECT 
					item, 
					is_active 
				FROM tbl_".$_table_c.", tbl_".$_table_p."
				WHERE 
				tbl_".$_table_p.".goi_id = '".$_goi_id."' 
				and tbl_".$_table_p.".".$_table_c."_id = tbl_".$_table_c.".".$_table_c."_id 
				and tbl_".$_table_p.".".$_table_c."_show = 1 
			");
			$sth->execute();
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
		$data = $sth->fetchAll();
		$count =  $sth->rowCount();
		if ($count > 0) {
			return $data;
		}
		return false;
	}
	
	public function getStep1Data() {
		$data = null;
		try{
			$sth = $this->db->prepare("
				SELECT 
					goi_id,
					goi_name,
					goi_description,
					goi_view,
					goi_price,
					goi_price_unit
				FROM tbl_goi 
				WHERE 1
				ORDER BY goi_order ASC
			");
			$sth->execute();
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
		$data = $sth->fetchAll();
		$count =  $sth->rowCount();
		if ($count > 0) {
			$_items = array();
			foreach($data as $_item) {
				$_item['goi_price'] = number_format($_item['goi_price'], 0, ',', '.');
				$_item_sub = array();
				$_goi_id = $_item['goi_id'];
				$_goi_id_data = $this->getStep1Item($_goi_id, "goi_step1_gioithieu", "goi_gioithieu");
				if($_goi_id_data) {
					$_goi_id_data['class'] = 'gioi-thieu';
					$_item_sub[] = $_goi_id_data;
				}
				$_goi_id_data = $this->getStep1Item($_goi_id, "goi_step1_vanphong", "goi_vanphong");
				if($_goi_id_data) {
					$_goi_id_data['class'] = 'van-phong';
					$_item_sub[] = $_goi_id_data;
				}
				$_goi_id_data = $this->getStep1Item($_goi_id, "goi_step1_nhansu", "goi_nhansu");
				if($_goi_id_data) {
					$_goi_id_data['class'] = 'nhan-su';
					$_item_sub[] = $_goi_id_data;
				}
				$_goi_id_data = $this->getStep1Item($_goi_id, "goi_step1_vieclam", "goi_vieclam");
				if($_goi_id_data) {
					$_goi_id_data['class'] = 'viec-lam';
					$_item_sub[] = $_goi_id_data;
				}
				if($_item_sub) {
					$_item['item'] = $_item_sub;
				}
				$_items[] = $_item;
			}
			return $_items;
		}
		return false;
	}
	
	public function getStep2Item($_goi_id, $_table) {
		$data = null;
		try{
			$sth = $this->db->prepare("
				SELECT 
				item_id, 
				item_value, 
				item_price, 
				item_unit 
				FROM tbl_goi, tbl_".$_table."
				WHERE 
				tbl_goi.goi_id = '".$_goi_id."' 
				and tbl_goi.goi_id = tbl_".$_table.".goi_id 
			");
			$sth->execute();
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
		$data = $sth->fetchAll();
		$count =  $sth->rowCount();
		if ($count > 0) {
			return $data;
		}
		return false;
	}
	
	public function getCompanyPositionList() {
		$sth = $this->db->prepare("SELECT id, diadiem FROM tbl_cauhinh_diadiem ORDER BY diadiem ASC");
		$sth->execute();
		$data = $sth->fetchAll();
		$count =  $sth->rowCount();
		if ($count > 0) {
			return $data;
		}
		return false;
	}
	
	public function issetCompany($company_email) {
		$sth = $this->db->prepare("SELECT congty_id FROM tbl_congty WHERE congty_email = '".$company_email."'");
		$sth->execute();
		$data = $sth->fetchAll();
		$count =  $sth->rowCount();
		if ($count > 0) {
			return true;
		}
		return false;
	}
	
	public function getStep2Data($goi_id) {
		$data = null;
		try{
			$sth = $this->db->prepare("
				SELECT 
					goi_name 
				FROM tbl_goi 
				WHERE goi_id = '".$goi_id."' 
			");
			$sth->execute();
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
		$data = $sth->fetchAll();
		$count =  $sth->rowCount();
		if ($count > 0) {
			$_items = array();
			//$_item['goi_price'] = number_format($_item['goi_price'], 0, ',', '.');
			$_goi_id_data = $this->getStep2Item($goi_id, "goi_step2_gioithieu");
			if($_goi_id_data) {
				$_goi_id_data['class'] = 'gioi-thieu';
				$_goi_id_data['name'] = 'Giới thiệu';
				$_items[] = $_goi_id_data;
			}
			$_goi_id_data = $this->getStep2Item($goi_id, "goi_step2_vanphong");
			if($_goi_id_data) {
				$_goi_id_data['class'] = 'van-phong';
				$_goi_id_data['name'] = 'Văn phòng';
				$_items[] = $_goi_id_data;
			}
			$_goi_id_data = $this->getStep2Item($goi_id, "goi_step2_nhansu");
			if($_goi_id_data) {
				$_goi_id_data['class'] = 'nhan-su';
				$_goi_id_data['name'] = 'Nhân sự';
				$_items[] = $_goi_id_data;
			}
			$_goi_id_data = $this->getStep2Item($goi_id, "goi_step2_vieclam");
			if($_goi_id_data) {
				$_goi_id_data['class'] = 'viec-lam';
				$_goi_id_data['name'] = 'Việc làm';
				$_items[] = $_goi_id_data;
			}
			if($_items) {
				$data[0]['item'] = $_items;
			}
			return $data[0];
		}
		return false;
	}
	
	public function setStep2Data($_company_name, $_company_email, $_company_password, $_company_re_password, $_company_tel, $_company_address, $_company_position, $_company_anser, $gioi_thieu_id, $van_phong_id, $nhan_su_id, $viec_lam_id) {
		$success = true;
		if($this->issetCompany($_company_email)) {
			return false;
		}
		$_sql_company = "
			INSERT INTO tbl_congty(
				congty_name, 
				congty_email, 
				congty_password, 
				congty_phone, 
				congty_diachi, 
				congty_diadiem, 
				congty_traloi) 
			VALUES(
				'".$_company_name."', 
				'".$_company_email."', 
				'".md5($_company_password)."', 
				'".$_company_tel."', 
				'".$_company_address."', 
				'".$_company_position."', 
				'".$_company_anser."' 
			)";
		$_company_id = '';
		//insert new data to company table
		try{
			$this->db->beginTransaction();
			$this->db->exec($_sql_company);
			$_company_id = $this->db->lastInsertId();
		} catch(PDOException $e) {
			echo $e->getMessage();
			$success = false;
		}
		if($_company_id <=0) {
			return false;
		}
		$_sql_gt = $_sql_vp = $_sql_ns = $_sql_vl = '';
		if(count($gioi_thieu_id)>0) {
			$_sql_gt = "INSERT INTO tbl_congty_gioithieu(
				congty_id, 
				item_id
			) VALUES";
			foreach($gioi_thieu_id as $gt_id) {
				$_sql_gt = $_sql_gt."(
				'".$_company_id."', 
				'".$gt_id."'
			), ";
			}
			$_sql_gt = rtrim($_sql_gt, ', ').';';
		}
		
		if(count($van_phong_id)>0) {
			$_sql_vp = "INSERT INTO tbl_congty_vanphong(
				congty_id, 
				item_id
			) VALUES";
			foreach($van_phong_id as $vp_id) {
				$_sql_vp = $_sql_vp."(
				'".$_company_id."', 
				'".$vp_id."'
			), ";
			}
			$_sql_vp = rtrim($_sql_vp, ', ').';';
		}
		
		if(count($nhan_su_id)>0) {
			$_sql_ns = "INSERT INTO tbl_congty_nhansu(
				congty_id, 
				item_id
			) VALUES";
			foreach($nhan_su_id as $ns_id) {
				$_sql_ns = $_sql_ns."(
				'".$_company_id."', 
				'".$ns_id."'
			), ";
			}
			$_sql_ns = rtrim($_sql_ns, ', ').';';
		}
		
		if(count($viec_lam_id)>0) {
			$_sql_vl = "INSERT INTO tbl_congty_vieclam(
				congty_id, 
				item_id
			) VALUES";
			foreach($viec_lam_id as $vl_id) {
				$_sql_vl = $_sql_vl."(
				'".$_company_id."', 
				'".$vl_id."'
			), ";
			}
			$_sql_vl = rtrim($_sql_vl, ', ').';';
		}
		$_sql_goi = $_sql_gt.$_sql_vp.$_sql_ns.$_sql_vl;
		//insert goi data width company
		try {
			$this->db->exec($_sql_goi);
			$this->db->commit();
		} catch (PDOException $e) {
			echo $e->getMessage();
			$success = false;
			try{$this->db->rollBack();} catch(PDOException $e2) {}
		}
		return $success;
	}
	
}
?>