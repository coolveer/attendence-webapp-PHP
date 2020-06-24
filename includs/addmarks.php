<?php
    include './conn.php';
    session_start();
    $sno = trim(strip_tags($_POST['sno']));
    $marks = trim(strip_tags($_POST['marks']));
    $sbno = trim(strip_tags($_POST['sub']));
    $sem = trim(strip_tags($_POST['sem']));

    $sql = "INSERT INTO `marks`( `sno`, `sbno`,`marks`,`sem`) VALUES ('$sno','$sbno','$marks','$sem')";
    mysqli_query($conn,$sql);
    header('Location: ../addmarks.php?app=1&sub='.$sbno);



?>