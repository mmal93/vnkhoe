<?php
class Tu_van_nghe_nghiep_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
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