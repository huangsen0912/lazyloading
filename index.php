<?php
/**
 * 类->new class1（不认识）正要报错->spl_autoload_register说，我这个有个函数你调用一下，调用了my_load的函数，传递参数，找到Class1类所在的文件，执行
 */

//spl_autoload_register(['Index',"my_load"]);调用的是静态类中的静态方法
class Index{


	public static function my_load($class){
		require("class/".$class.'.php');

	}
}
spl_autoload_register(['Index','my_load']);
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

/**
 *Yii中的延迟加载原理解析：
 *\yii2\yii2test\vendor\yiisoft\yii2\Yii.php
 *class Yii extends \yii\BaseYii
*{
*}
*
*spl_autoload_register(['Yii', 'autoload'], true, true); 
 *是不是在入口文件一致性就得加载？
 *require(__DIR__ . '/../../vendor/autoload.php');
*require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
 */

?>