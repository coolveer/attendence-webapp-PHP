<?php

include './conn.php';


if(isset($_POST['signup'])) { 
	$email = trim(strip_tags($_POST['email']));
	$sql="select * from student where (email='$email');";
	$res=mysqli_query($conn,$sql);
 	$row = mysqli_fetch_assoc($res);
	if($email==$row['email']) // change it to just else
        {
        	echo "string";
            header('Location: ../sup.php?email=true');
    }
    else{
            // strip_tags(str) remove tags from the input.
			$name = trim(strip_tags($_POST['name']));
			$email = trim(strip_tags($_POST['email']));
			$pwd = trim(strip_tags($_POST['pwd']));
			$pwd1 = trim(strip_tags($_POST['pwd1']));
			$sem = trim(strip_tags($_POST['sem']));
			$rno = trim(strip_tags($_POST['rno']));
			$mno = trim(strip_tags($_POST['mno']));
			$strm = trim(strip_tags($_POST['strm']));

			if ($pwd == $pwd1) {
				$sql = "INSERT INTO `student`( `name`, `email`, `pwd`, `sem`, `rno`, `mno`,`strm`,`sep`) VALUES ('$name','$email','$pwd','$sem','$rno','$mno','$strm','0')";

				mysqli_query($conn, $sql);

				header('Location: ../index.php?login=true');
			}
			else{
				header('Location: ../sup.php?pwd=true');
			}
    }
}