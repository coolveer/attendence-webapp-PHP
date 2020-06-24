<?php 
session_start();
session_start();
$sem = trim(strip_tags($_POST['sem']));

if($_SESSION["sep"] == "0") {
	
	header('Location: ./sview.php');
	}
if($_SESSION["sep"] == "2") {
	
	header('Location: ./pview.php');
	}



?>