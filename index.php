<?php
require("class\class1.php");
require("class\class2.php");
//这是全部加载
$is_girl = $_GET['girl']==0? true :false;
if($is_girl){

	echo "this is a girl";
	$class1 = new Class1();

}else{

	echo "not a girl";
	$class2 = new Class2();
}



?>