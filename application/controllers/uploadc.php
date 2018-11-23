<?php
 class Uploadc extends CI_controller{
 	public function index(){

 		$data=array();
 		$data['err']="";
 		$this->load->view("upload",$data);
 	}
 	public function upload_test(){
 		print_r($_POST);ECHO "<BR>";
 		print_r($_FILES);
 		ECHO "<hr>";
 		extract($_FILES);
	echo $image['name'];
	echo "<hr>";
$c['file_name']=rand(1000,99999).date('dmy');
//echo $c['file_name'];
//die();
$c['upload_path']='uploads';
$c['allowed_types']='jpg|png|gif';

$this->load->library('upload',$c);
if($this->upload->do_upload('image')){
	ECHO "RAGH";

 	}
 	else{
 		echo "saii";
 	}

}

}
?>