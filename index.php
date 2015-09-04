<?php
/**
 * 类->new class1（不认识）正要报错->spl_autoload_register说，我这个有个函数你调用一下，调用了my_load的函数，传递参数，找到Class1类所在的文件，执行
 */
function my_load($class){
	require("class/".$class.'.php');

}
spl_autoload_register('my_load');
//这是延迟加载模型
$is_girl = $_GET['girl']==0? true :false;
if($is_girl){

	echo "this is a girl";
	//require("class\class1.php");
	$class1 = new Class1();

}else{

	echo "not a girl";
	//require("class\class2.php");
	$class2 = new Class2();
}



?>