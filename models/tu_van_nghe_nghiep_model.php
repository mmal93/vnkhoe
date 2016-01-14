<?php
class Tu_van_nghe_nghiep_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function getData($id = '', $limit = 0) {
		if(isset($id) && (!empty($id))) {
			$sth = $this->db->prepare("SELECT name_vi, tbl_article_job.id, tbl_author.id as author_id, created,description_vi,seo_description_vi,seo_description_en,seo_keywords_vi,seo_keywords_en, author_name, author_logo, author_description, feature_image FROM tbl_article_job,tbl_author WHERE tbl_article_job.Author_id=tbl_author.id and tbl_article_job.id = '".$id."'");
		} else {
			$sth = $this->db->prepare("SELECT name_vi, tbl_article_job.id, tbl_author.id as author_id, created,description_vi,seo_description_vi,seo_description_en,seo_keywords_vi,seo_keywords_en, author_name, author_logo, author_description, feature_image FROM tbl_article_job,tbl_author WHERE tbl_article_job.Author_id=tbl_author.id");
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
	
	public function getJobs($id = '', $limit = 0) {
		if(isset($id) && (!empty($id))) {
			$sth = $this->db->prepare("SELECT * FROM tbl_job Order By `order` ASC");
		} else {
			$sth = $this->db->prepare("SELECT * FROM tbl_job Order By `order` ASC");
		}
        $sth->execute();
        $data = $sth->fetchAll();
        $count =  $sth->rowCount();
		var_dump($data);
        if ($count > 0) {
			return $data;
        } else {
			return false;
        }
	}
}