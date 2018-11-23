<?php
class Regm extends CI_model{




	public function insert($data){
$res=$this->db->insert('student',$data);
if($res){
 return 1;
}
else{
	return 2;
}

	}


public function read(){

	$this->db->select("*");

	$res=$this->db->get('student');
	return $res;

}

public function delete($uid){
	$this->db->where('sno',$uid);
	$re=$this->db->delete('student');
	if($re){
		return true;
	}
	else{
		return false;
	}

}

public function getupdate($uid){
$this->db->where('sno',$uid);
$re=$this->db->get('student');
return $re;


}
public function upda($data,$uid){
$this->db->where('sno',$uid);
$re=$this->db->update('student',$data);
return $re;

}

public function where(){
	$this->db->where("email","admin@gmail.com");
	$this->db->or_where("sno",5);
	$res=$this->db->get('student');
	return $res; 

}

public function order(){

$this->db->order_by("sno","desc");
$r=$this->db->get("student");


return $r;
}


public function limit(){

$this->db->order_by("sno","asc");
$this->db->limit(3,0);
$r=$this->db->get("student");


return $r;
}





}


?>