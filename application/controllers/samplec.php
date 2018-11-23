<?php
class Samplec extends CI_controller{

	public function hi(){
echo base_url();
		$this->load->view("sample.html");
	}
}


?>