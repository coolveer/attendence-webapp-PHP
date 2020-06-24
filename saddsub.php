<?php
    include './includs/hedder.php';
    session_start();
    
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./sview.php">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <a href="./includs/logout.php">
        <button type="button" class="btn btn-info float-right">Logout</button>
    </a><br>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Add your subject here:</h1> <br><br>
    <form action="./includs/saddsub.php" method="POST" class="form-group">
            <select id="sep" name="sub" class="form-control" >
            <?php
                include './includs/conn.php';
                $query = "SELECT * FROM subject";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="'.$row["sbno"].'">'.$row["name"].'</option>';
                }
                ?>
			</select> <br><br>
            <input type="text" class="d-none" name="sem" value="<?php echo $_SESSION['sem'] ?>">
        <input type="submit" class="btn btn-info btn-lg btn-block" value="submit">
    </form>    
    </div>
    <div class="col"></div>
</div>

<?php 
	if(isset($_GET['sub'])) {
		echo "<hr><p style='color:red' class='text-center'> Subject has been added to your course successfully </p><hr>";
	}else{
		echo "";
	}

?>


<?php
	include './includs/footer.php';
?>