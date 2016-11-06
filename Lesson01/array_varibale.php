<!DOCTYPE html>
<html>
<head>
	<title>Array Variables</title>
</head>
<body>
<?php 
$numbers = array(1,2,3,4,5,6);
print_r($numbers);
echo "<br/>";

$a = array_shift($numbers);
echo "a:".$a."<br/>";
print_r($numbers);
echo "<br/>";

$b = array_unshift($numbers,'frist');
echo "b:".$b."<br/>";
print_r($numbers);
echo "<br/>";


 ?>
</body>
</html>