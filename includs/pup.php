<?php

include './conn.php';


if(isset($_POST['signup'])) { 
	$email = trim(strip_tags($_POST['email']));
	$sql="select * from parent where (email='$email');";
	$res=mysqli_query($conn,$sql);
 	$row = mysqli_fetch_assoc($res);
	if($email==$row['email']) // change it to just else
        {
        	echo "string";
            header('Location: ../pup.php?email=true');
    }
    else{
            // strip_tags(str) remove tags from the input.
			$name = trim(strip_tags($_POST['name']));
			$email = trim(strip_tags($_POST['email']));
			$pwd = trim(strip_tags($_POST['pwd']));
			$pwd1 = trim(strip_tags($_POST['pwd1']));
			$mno = trim(strip_tags($_POST['mno']));
			$rno = trim(strip_tags($_POST['rno']));

			if ($pwd == $pwd1) {
				$sql = "INSERT INTO `parent`( `name`, `email`, `pwd`,`rno`,`mno`,`sep`) VALUES ('$name','$email','$pwd','$rno','$mno','2')";

				mysqli_query($conn, $sql);

				header('Location: ../index.php?login=true');
			}
			else{
				header('Location: ../pup.php?pwd=true');
			}
    }
}