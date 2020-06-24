<?php 
include './conn.php';
    $query = "SELECT * FROM subject WHERE sbno='".$_GET["sub"]."'";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($result);
    $class = 0;
    while ($res = mysqli_fetch_array($result)) {
        $class = ++$res['nc'];
    }

    echo $class;

    $query = "UPDATE subject
    SET nc = '".$class."'
    WHERE sbno = ".$_GET["sub"].";";
    $result = mysqli_query($conn,$query);

    header('Location: ../tview.php');
?>