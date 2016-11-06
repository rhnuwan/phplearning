<!DOCTYPE html>
<html>
<head>
	<title>Reference as Function Arguments</title>
</head>
<body>
<?php 

function ref_test($var){
	$var = $var * 2;
}
$a = 10;
ref_test($a);
echo $a;
echo "<br/>";


function ref_test1(&$var){
	$var = $var * 2;
}
$a = 10;
ref_test1($a);
echo $a;
echo "<br/>";

function ref_test2($a){
	global $a;
	$a = $a * 2;
}
$a = 10;
ref_test2($a);
echo $a;
echo "<br/>";

function ref_test3(){
	global $a;
	$a = $a * 2;
}
$a = 10;
ref_test3();
echo $a;
echo "<br/>";

?>
</body>
</html>