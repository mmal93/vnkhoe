<?php
class Authors_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function getAuthor($id='', $limit=0) {
		$lm = $limit==0?'':' limit '.$limit;
		if(isset($id) && (!empty($id))) {
			$sth = $this->db->prepare("SELECT author_id, author_name, author_logo, author_description FROM tbl_author WHERE tbl_author.author_id = '".$id."'".$lm);
		}else {
			$sth = $this->db->prepare("SELECT author_id, author_name, author_logo, author_description FROM tbl_author".$lm);
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
	
	public function getArticleData($author_id = '', $limit = 0) {
		$lm = $limit==0?'':' limit '.$limit;
		if(isset($author_id) && (!empty($author_id))) {
			$sth = $this->db->prepare("SELECT tvsk_id, tvsk_hinhanh, tvsk_tieude, tvsk_tomtat, tvsk_noidung, tvsk_ngaydangtin, tvsk_tinhot, tvsk_view, tbl_author.author_id, author_name, author_logo, author_description FROM tbl_tvsk, tbl_author WHERE tbl_tvsk.author_id=tbl_author.author_id and tbl_author.author_id = '".$author_id."'".$lm);
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
	
}