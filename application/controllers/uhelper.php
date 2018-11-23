<?php
 class Uhelper extends CI_controller{

 	public function f1(){

 		$str="Welcome to Angular6";
 		$this->load->helper("test");
 		echo rev($str);
 	}

 	public function f2(){
 		$this->load->library("mylib");
 		$this->mylib->rev();
 	}
 }



?>