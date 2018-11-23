<?php
class Page extends CI_model{

public function get(){
	$r=$this->db->get('student');
	$c=$r->num_rows();
	return $c;
}

public function getlimit($nrp,$si){
	$this->db->select("*");
	$this->db->from("student");
	$this->db->limit($nrp,$si);
	$re=$this->db->get();
	return $re;

}
}

?>