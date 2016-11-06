<!DOCTYPE html>
<html>
<head>
	<title>Dates and Times: Unix</title>
</head>
<body>
<?php 

	echo time();
	echo "<br>";
	echo mktime(3, 15,48,28,09,1991);
	echo "<br>";

	echo checkdate(12, 12, 2014) ? 'true' : 'flase';
	echo "<br>";

	$unix_timestamp = strtotime("last Monday");
	echo $unix_timestamp. "<br>";

 ?>
</body>
</html>