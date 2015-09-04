<?php


//这是延迟加载模型
$is_girl = $_GET['girl']==0? true :false;
if($is_girl){

	echo "this is a girl";
	require("class\class1.php");
	$class1 = new Class1();

}else{

	echo "not a girl";
	require("class\class2.php");
	$class2 = new Class2();
}



?>