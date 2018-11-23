<?php
class Regc extends CI_controller{

	public function reg(){
		$this->load->view("regv.html");
	}
	public function readdata(){
	extract($_POST);
	$this->load->model("regm");
	$data=array(
'name'=>$name,
'email'=>$email,
'password'=>$password,
'mobile'=>$mobile
	);

	$this->load->library("form_validation");
	$this->form_validation->set_error_delimiters("<span style='color:red'>","</span>");
	$this->form_validation->set_rules("name","USER NAME","required");
	$this->form_validation->set_rules("email","Email","required|valid_email|is_unique[student.email]",
		array('required'=>"Name should be req","valid_email"=>"enail sgf","is_unique"=>"Email Exist")

);
	if($this->form_validation->run()){
$resp=$this->regm->insert($data);
$rsu=array();
if($resp==1){

	$rsu['suc']="Inserted Successfully";
	}

	else{
		$rsu['fail']="Fail to inserted";
	
		}
	$this->load->view("regv.html",$rsu);
}

else{
	$this->load->view("regv.html");
}


}

public function getdata(){
	$this->load->model("regm");
	$re=$this->regm->read();
	$data=array();
	$data['res']=$re;
	$this->load->view("display.html",$data);
}
public function delete(){

	echo "hi";
	$uid=$this->uri->segment(3);
	$this->load->model("regm");
	$r=$this->regm->delete($uid);
	if($r){
		redirect("regc/getdata");
	}
	
}

public function update(){
	
	$uid=$this->uri->segment(3);
	$this->load->model("regm");
	$res=$this->regm->getupdate($uid);
	$data=array();
	$data['res']=$res;
	$this->load->view("update.html",$data);
}

public function readupdate(){
extract($_POST);
$uid=$this->uri->segment(3);
$data=array(
'name'=>$name,'email'=>$email,'password'=>$password,'mobile'=>$mobile
);


$this->load->model("regm");
$res=$this->regm->upda($data,$uid);
if($res){
		redirect("regc/getdata");
	}
	else{
		echo mysql_error();
	}

}

public function whereor(){
$this->load->model("regm");
$r=$this->regm->where();
$c=$r->num_rows();
foreach($r->result() as $row){
	echo $row->name;echo "<br>";
	echo $row->email;echo "<br>";
	echo $row->mobile;echo "<br>";
	echo $row->password;echo "<br>";
	echo "<hr>";

}

}


public function orderby(){
	$this->load->model("regm");
$re=$this->regm->order();
$c=$re->num_rows();

foreach($re->result() as $row){
	echo $row->sno;echo "<br>";
	echo $row->name;echo "<br>";
	echo $row->email;echo "<br>";
	echo $row->mobile;echo "<br>";
	echo $row->password;echo "<br>";
	echo "<hr>";

}
}



public function limit(){
	$this->load->model("regm");
$re=$this->regm->limit();
$c=$re->num_rows();

foreach($re->result() as $row){
	echo $row->sno;echo "<br>";
	echo $row->name;echo "<br>";
	echo $row->email;echo "<br>";
	echo $row->mobile;echo "<br>";
	echo $row->password;echo "<br>";
	echo "<hr>";

}
}



}


?>