<?php
class Tu_van_nghe_nghiep_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function getData($id = '', $limit = 0) {
		$lm = $limit==0?'':' limit '.$limit;
		if(isset($id) && (!empty($id))) {
			$sth = $this->db->prepare("SELECT name_vi, content_vi, tbl_article_job.id, tbl_author.author_id, created, description_vi, seo_description_vi, seo_description_en, seo_keywords_vi,seo_keywords_en, author_name, author_logo, author_description, feature_image FROM tbl_article_job,tbl_author WHERE tbl_article_job.Author_id=tbl_author.author_id and tbl_article_job.id = '".$id."'".$lm);
		} else {
			$sth = $this->db->prepare("SELECT name_vi, content_vi, tbl_article_job.id, tbl_author.author_id, created, description_vi, seo_description_vi, seo_description_en, seo_keywords_vi,seo_keywords_en, author_name, author_logo, author_description, feature_image FROM tbl_article_job,tbl_author WHERE tbl_article_job.Author_id=tbl_author.author_id".$lm);
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
				$_name.="content_vi like '%".$name."%' or ";
			}
			$_name = rtrim($_name, ' or ');
			$_name .= ')';
		}
		if(isset($id) && (!empty($id))) {
			$sth = $this->db->prepare("SELECT name_vi, tbl_article_job.id, feature_image FROM tbl_article_job WHERE tbl_article_job.id <> '".$id."'".$_name.$lm);
		} else {
			$sth = $this->db->prepare("SELECT name_vi, tbl_article_job.id, feature_image FROM tbl_article_job".($_name==''?'':' WHERE'.$_name).$lm);
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