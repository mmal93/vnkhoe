<?php

class Model {
	
	public $_item_number;
	
	public $_page_number;

    function __construct() {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
		$sth = $this->db->prepare("set names 'utf8'");
        $sth->execute();
    }
	
	function readMore($string, $len=160){
		if(strlen($string)>$len){
			return preg_replace('/[\s\.,][^\s\.,]*$/u', '', substr($string, 0, $len)).'...';
		}else{
			return $string;
		}
	}
	
	function getAllData($table, $fetch = PDO::FETCH_ASSOC, $limit=null) {
		if(!$table) {
			return false;
		}
		$sth = $this->db->prepare("SELECT * FROM ".$table.($limit==null?'':'limit '.$limit));
        $sth->execute();
		
        $data = $sth->fetchAll($fetch);
		$count =  $sth->rowCount();
        if ($count > 0) {
			return $data;
        } else {
			return false;
        }
	}
	
	function getData($sql_string, $item_number, $conn, $is_pagination=true, $arr=array()) {	
		if(!$arr)
		{
			$arr=array();	
		}
		
		$numpage='';
		$page='';
		$thutu='';
		
		$sth = $this->db->prepare($sql_string);
        $sth->execute();
		
        $data = $sth->fetchAll();
		$num_row =  $sth->rowCount();
		
		if($is_pagination) //pagination
		{
			$numpage = ceil($num_row / $item_number);
			//get current get variable
			if(isset($_GET['page'])) {
				$page = $_GET['page']; 
			} else {
				$page = 1;
			}
			if($page > $numpage) $page = $numpage;
			if($page < 1) $page =1;
			$thutu = $item_number * ($page - 1);
			$sql_string .= " LIMIT $thutu, ".$item_number;
			//" LIMIT $thutu , ".$this->item_number;	
			
			$sth = $this->db->prepare($sql_string);
			$sth->execute();
			$data = $sth->fetchAll();
		}
		return $data;
	}
}