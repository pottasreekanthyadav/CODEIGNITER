<?php
class Homec extends CI_controller{

	public function index(){

		$this->load->view("home.html");
	}
	public function error(){
		$this->load->view("404.html");
	}
}


?>