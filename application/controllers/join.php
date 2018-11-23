<?php
 class Join extends CI_controller{
 	public function index(){
 		$this->load->model('joins');
 		$r=$this->joins-> get_data();
 		$c=$r->num_rows();
 		if($c>0){
 			foreach($r->result() as $row){
 				echo $row->name;echo "<br>";
 				echo $row->email;echo "<br>";
 				echo $row->password;echo "<br>";
 				echo $row->id;echo "<br>";echo "<hr>";
 				echo $row->sno;echo "<br>";
 				echo $row->name;echo "<br>";
 				echo $row->email;echo "<br>";
 				echo "===========";
 			}
 		}

 	}
 	
}
?>