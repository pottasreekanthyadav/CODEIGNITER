<?php
 class Sessionc extends CI_controller{
 	public function index(){
 		$this->load->library('session');
 		$this->session->set_userdata('Name','AYYAPPA');

 	}
 	public function test_sess(){
 		
 	$this->load->library('session');
 	$c=$this->session->userdata('Name');
 	echo $c;
 	
 	}
}
?>