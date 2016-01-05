<?php 
class xml_data {

	public static function get_config_data($file = NULL) {
		if(file_exists($file)) {
			$xml_config = simplexml_load_file($file, 'root_config');
			return $xml_config;
		}
		return null;
	}
	
	public static function get_page_config($file = NULL) {
		if(file_exists($file)) {
			$xml_page = simplexml_load_file($file, 'page_config');
			return $xml_page;
		}
		return null;
	}
	
	public static function get_xml_data($file = NULL) {
		if(file_exists($file)) {
			$xml_get_data = simplexml_load_file($file);
			return $xml_get_data;
		}
		return null;
	}
}

//load page root_config class to frontend
class root_config extends SimpleXMLElement {}
//load page_config class name to frontend
class page_config extends SimpleXMLElement {}


class xml_get_data extends SimpleXMLElement {}
?>