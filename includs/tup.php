<?php

include './conn.php';


if(isset($_POST['signup'])) { 
	$email = trim(strip_tags($_POST['email']));
	$sql="select * from teacher where (email='$email');";
	$res=mysqli_query($conn,$sql);
 	$row = mysqli_fetch_assoc($res);
	if($email==$row['email']) // change it to just else
        {
        	echo "string";
            header('Location: ../tup.php?email=true');
    }
    else{
            // strip_tags(str) remove tags from the input.
			$name = trim(strip_tags($_POST['name']));
			$email = trim(strip_tags($_POST['email']));
			$pwd = trim(strip_tags($_POST['pwd']));
			$pwd1 = trim(strip_tags($_POST['pwd1']));
			$mno = trim(strip_tags($_POST['mno']));
			$dpt = trim(strip_tags($_POST['dpt']));

			if ($pwd == $pwd1) {
				$sql = "INSERT INTO `teacher`( `name`, `email`, `pwd`,`dep`,`mno`,`f`,`sep`) VALUES ('$name','$email','$pwd','$dpt','$mno','nf','1')";

				mysqli_query($conn, $sql);

				header('Location: ../tup.php?req=true');
			}
			else{
				header('Location: ../tup.php?pwd=true');
			}
    }
}