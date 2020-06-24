<?php
    include './conn.php';
    session_start();
    $sbno = trim(strip_tags($_POST['sub']));
    $sem = trim(strip_tags($_POST['sem']));

    $sql = "INSERT INTO `studentsub`( `sno`, `sbno`,`sem`) VALUES ('$_SESSION[sno]','$sbno','$sem')";
    mysqli_query($conn,$sql);
    header('Location: ../saddsub.php?sub=1');



?>