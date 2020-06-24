<?php
session_start();
$sem = trim(strip_tags($_POST['sem']));

if($_SESSION["sep"] == "0") {
	$_SESSION["sem"] = $sem;
	header('Location: ../sview.php');
	}
if($_SESSION["sep"] == "2") {
	$_SESSION["sem"] = $sem;
	header('Location: ../pview.php');
	}

?>