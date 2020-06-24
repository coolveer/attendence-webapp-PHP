<?php
    include './conn.php';
    session_start();
    $sbno = trim(strip_tags($_POST['sub']));
    $query = "UPDATE subject SET alt='a' WHERE sbno=".$sbno."";
    $result = mysqli_query($conn,$query);

    $sql = "INSERT INTO `teachersub`( `tno`, `sbno`) VALUES ('$_SESSION[tno]','$sbno')";
    mysqli_query($conn,$sql);
    header('Location: ../rsub.php?sub=1');



?>