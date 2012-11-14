<?php

 
define('ROOT', dirname(__FILE__).'/');
 
$v0 = "attachment"; 
 
if (!file_exists($v0)){
	mkdir($v0,0777,true);;
}



$v1 = $v0."/".md5(microtime()).".".end(explode('.', $_FILES["upload"]["name"]));


if (move_uploaded_file($_FILES["upload"]["tmp_name"], $v1)) {
	echo "ok";
} else {
	print_r($_FILES[$v2]["error"]); 
}
 
 
 
?>
