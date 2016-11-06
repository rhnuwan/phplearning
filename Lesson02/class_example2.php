<?php  
	
class Preson{
	function say_hello(){
		echo "Hello from inside a class.<br/>";
	}
}

$methods = get_class_methods('Preson');
foreach ($methods as $method) {
	echo $method."<br/>";
}

if(method_exists('Preson', 'say_hello')){
	echo "Method does exist.<br/>";
}else{
	echo "Method does not exist.<br/>";
}

?>