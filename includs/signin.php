<?php
include './conn.php';
session_start();
$email = trim(strip_tags($_POST['email']));
$pwd = trim(strip_tags($_POST['pwd']));
$sep = trim(strip_tags($_POST['sep']));

if($sep == "0") {
    $query = "SELECT * FROM student WHERE email='$email'
and pwd='$pwd'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);

if ($rows == 1) {
	while ($res = mysqli_fetch_array($result)) {
	$_SESSION["sno"] = $res['sno'];
	$_SESSION["name"] = $res['name'];
	$_SESSION["sep"] = $res['sep'];
	header('Location: ../sem.php');
	}
	


}else{
	header('Location: ../signin.php?spwd=1');
}

}

if($sep == "1"){
    $query = "SELECT * FROM teacher WHERE email='$email'
and pwd='$pwd' and f='c'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);

if ($rows == 1) {
	while ($res = mysqli_fetch_array($result)) {
	$_SESSION["tno"] = $res['tno'];
	$_SESSION["name"] = $res['name'];
	$_SESSION["sep"] = $res['sep'];
	header('Location: ../tview.php');
	}
	


}else{
	header('Location: ../signin.php?tpwd=1');
}

}

if($sep == "2") {
    $query = "SELECT * FROM parent WHERE email='$email'
and pwd='$pwd'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);

if ($rows == 1) {
	while ($res = mysqli_fetch_array($result)) {
	$_SESSION["pno"] = $res['pno'];
	$_SESSION["name"] = $res['name'];
	$_SESSION["sep"] = $res['sep'];
	$rno = $res['rno'];

	$query = "SELECT * FROM student WHERE rno='$rno'
and pwd='$pwd'";
$result = mysqli_query($conn,$query);
$rows = mysqli_num_rows($result);
while ($res = mysqli_fetch_array($result)) {
	$_SESSION["sno"] = $res['sno'];
}


	header('Location: ../sem.php');
	}
	


}else{
	header('Location: ../signin.php?ppwd=1');
}

}






?>