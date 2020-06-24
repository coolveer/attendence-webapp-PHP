<?php
	session_start();
    include './conn.php';
    

    $sbno = trim(strip_tags($_POST['sub']));
    $sem = trim(strip_tags($_POST['sem']));

    foreach( $_POST['sno'] as $element ) {
   $sql = "INSERT INTO `attendence`( `sno`, `sbno`,`sem`) VALUES ('$element','$sbno','$sem')";
    mysqli_query($conn,$sql);
    //header('Location: ../addattendence.php?sem='.$sem.'&sub='.$sbno);
    $query = "SELECT * FROM subject WHERE sbno='".$sbno."'";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($result);
    $class = 0;
    while ($res = mysqli_fetch_array($result)) {
        $class = ++$res['nc'];
    }

    echo $class;

    $query = "UPDATE subject
    SET nc = '".$class."'
    WHERE sbno = ".$sbno.";";
    $result = mysqli_query($conn,$query);
    header('Location: ../tview.php?done=1');

}

    


?>