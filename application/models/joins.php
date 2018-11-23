<?php
class Joins extends CI_model{



public function get_data(){
	$this->db->select("u .* ,s.*");
	$this->db->from('user u');
	$this->db->join('student s','u.id=s.sno','inner');
	$res=$this->db->get();
	return $res;
}
	





}


?>