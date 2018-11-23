<?php

function rev($str){
	$arr=explode(" ",$str);
	$c=count($arr);
	$rs="";
	for($i=$c-1;$i>=0;$i--){
		$rs=$rs.$arr[$i];
	}
	return $rs;
}

?>