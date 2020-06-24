<?php
    include './includs/hedder.php';
    session_start();
?>
<br><br><br>
<div class="container">
	<!-- here it starts -->
	<a href="./includs/logout.php"><button type="button" class="btn btn-info float-right">Logout</button></a><br><hr>
	<?php
		include './includs/conn.php';
		$query = "SELECT * FROM teacher WHERE f='nf'";
		$result = mysqli_query($conn, $query);
		
		

		if (mysqli_num_rows($result) > 0) {
    		// output data of each row
    		while($row = mysqli_fetch_assoc($result)) {
        	echo '
        	<h5>'.$row["name"].'</h5>
			<p>mob no :'.$row["mno"].'</p><br>
			<a href="./includs/add.php?id='.$row["tno"].'"><button type="button" class="btn btn-success">approve</button></a>
			<a href="./includs/del.php?id='.$row["tno"].'"><button type="button" class="btn btn-danger float-right">delete</button></a>
			<hr>
        	';
   			}
		} 
		else {
    		echo "0 results";
		}


?>

</div>
<?php
	include './includs/footer.php';
?>