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
	
	public function getStep2Item($_goi_id, $_table_p, $_table_c) {
		$data = null;
		try{
			$sth = $this->db->prepare("
				SELECT item 
				FROM tbl_goi, tbl_".$_table_c.", tbl_".$_table_p."
				WHERE 
				tbl_goi.goi_id = '".$_goi_id."' 
				and tbl_goi.goi_id = tbl_".$_table_p.".goi_id 
				and tbl_".$_table_p.".".$_table_c."_id = tbl_".$_table_c.".".$_table_c."_id 
				and tbl_".$_table_p.".".$_table_c."_show = 1
				and tbl_".$_table_p.".is_active = 1 
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
			$_goi_id_data = $this->getStep2Item($goi_id, "goi_step1_gioithieu", "goi_gioithieu");
			if($_goi_id_data) {
				$_goi_id_data['class'] = 'gioi-thieu';
				$_goi_id_data['name'] = 'Giới thiệu';
				$_items[] = $_goi_id_data;
			}
			$_goi_id_data = $this->getStep2Item($goi_id, "goi_step1_vanphong", "goi_vanphong");
			if($_goi_id_data) {
				$_goi_id_data['class'] = 'van-phong';
				$_goi_id_data['name'] = 'Văn phòng';
				$_items[] = $_goi_id_data;
			}
			$_goi_id_data = $this->getStep2Item($goi_id, "goi_step1_nhansu", "goi_nhansu");
			if($_goi_id_data) {
				$_goi_id_data['class'] = 'nhan-su';
				$_goi_id_data['name'] = 'Nhân sự';
				$_items[] = $_goi_id_data;
			}
			$_goi_id_data = $this->getStep2Item($goi_id, "goi_step1_vieclam", "goi_vieclam");
			if($_goi_id_data) {
				$_goi_id_data['class'] = 'viec-lam';
				$_goi_id_data['name'] = 'Việc làm';
				$_items[] = $_goi_id_data;
			}
			if($_items) {
				$data[0]['item'] = $_items;
			}
			echo "<pre>";
			var_dump($data[0]);
			echo "</pre>";
			return $data[0];
		}
		return false;
	}
	
}
?>