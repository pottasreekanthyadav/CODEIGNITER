<?php

class String extends CI_Controller {

	public function f1(){
			$this->load->helper("string");
			$str="hi/howru/aaee/you";
			echo trim_slashes($str);
	}
}