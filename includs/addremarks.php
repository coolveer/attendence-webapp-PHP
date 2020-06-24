<?php
    include './conn.php';
    session_start();
    $sno = trim(strip_tags($_POST['sno']));
    $remarks = trim(strip_tags($_POST['marks']));
    $sbno = trim(strip_tags($_POST['sub']));
    $sem = trim(strip_tags($_POST['sem']));

    $sql = "INSERT INTO `remarks`( `sno`, `sbno`,`remarks`,`sem`) VALUES ('$sno','$sbno','$remarks','$sem')";
    mysqli_query($conn,$sql);
    header('Location: ../addremarks.php?app=1&sub='.$sbno);



?>