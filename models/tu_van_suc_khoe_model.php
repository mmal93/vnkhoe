<?php
class Tu_van_suc_khoe_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function getData($id = '', $limit = 0) {
		$lm = $limit==0?'':' limit '.$limit;
		if(isset($id) && (!empty($id))) {
			$sth = $this->db->prepare("SELECT tvsk_id, tvsk_hinhanh, tvsk_tieude, tvsk_tomtat, tvsk_noidung, tvsk_ngaydangtin, tvsk_tinhot, tvsk_view, tbl_author.author_id, author_name, author_logo, author_description FROM tbl_tvsk, tbl_author WHERE tbl_tvsk.author_id=tbl_author.author_id and tbl_tvsk.tvsk_id = ".$id.$lm);
		}else {
			$sth = $this->db->prepare("SELECT tvsk_id, tvsk_hinhanh, tvsk_tieude, tvsk_tomtat, tvsk_noidung, tvsk_ngaydangtin, tvsk_tinhot, tvsk_view, tbl_author.author_id, author_name, author_logo, author_description FROM tbl_tvsk, tbl_author WHERE tbl_tvsk.author_id=tbl_author.author_id".$lm);
		}
		
        $sth->execute();
        $data = $sth->fetchAll();
        $count =  $sth->rowCount();
        if ($count > 0) {
			return $data;
        } else {
			return false;
        }
	}
	
	public function getRelatedData($id = '', $name_arr='', $limit = 0) {
		$lm = $limit==0?'':' limit '.$limit;
		$_name = '';
		if(is_array($name_arr) && count($name_arr)>0) {
			$_name = ' and (';
			foreach($name_arr as $name) {
				$_name.="tvsk_noidung like '%".$name."%' or ";
			}
			$_name = rtrim($_name, ' or ');
			$_name .= ')';
		}
		if(isset($id) && (!empty($id))) {
			$sth = $this->db->prepare("SELECT tvsk_tieude, tvsk_id, tvsk_hinhanh FROM tbl_tvsk WHERE tvsk_id <> '".$id."'".$_name.$lm);
		} else {
			$sth = $this->db->prepare("SELECT tvsk_tieude, tvsk_id, tvsk_hinhanh FROM tbl_tvsk".($_name==''?'':' WHERE'.$_name).$lm);
		}
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