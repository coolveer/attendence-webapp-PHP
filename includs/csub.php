<?php
include './conn.php';
session_start();
$sub = trim(strip_tags($_POST['sub']));

$sql = "INSERT INTO `subject`( `name`, `nc`, `alt`) VALUES ('$sub','0','na')";

mysqli_query($conn, $sql);

header('Location: ../csub.php?sub=true');



?>