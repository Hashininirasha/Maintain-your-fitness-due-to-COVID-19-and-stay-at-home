<?php

#fitness is db name


try {
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=Fitness', 
   'root', '');
} 
catch (Exception $e) {
	exit("Error:".$e -> getMessage());
	
}


?>
