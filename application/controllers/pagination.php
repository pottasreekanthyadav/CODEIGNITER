<?php
class Pagination extends CI_controller{
	public function page(){
		
$this->load->model('page');
$config['total_rows']=$this->page->get();
$config['per_page']=2;
$config['base_url']=base_url()."index.php/pagination/page";
$this->load->library('pagination');
$this->pagination->initialize($config);
$page=$this->pagination->create_links();
$si=$this->uri->segment(3);
if(empty($si))
	$si=0;
$re=$this->page->getlimit($config['per_page'],$si);
$data=array();
$data['recs']=$re;
$data['link']=$page;
$this->load->view("pagev.html",$data);


	}
}

?>