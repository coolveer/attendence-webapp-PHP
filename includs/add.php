<?php

$id = $_GET["id"];
include './conn.php';
$sql = "UPDATE teacher SET f = 'c' WHERE tno = '$id';";
mysqli_query($conn, $sql);

header('Location: ../reql.php');



?>