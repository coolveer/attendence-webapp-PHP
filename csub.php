<?php
    include './includs/hedder.php';
    session_start();
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./tview.php">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <a href="./includs/logout.php">
        <button type="button" class="btn btn-info float-right">Logout</button>
    </a><br>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Add a new subject here:</h1> <br><br>
    <form action="./includs/csub.php" method="POST" class="form-group">
        <input type="text" name="sub" class="form-control" placeholder="Subject name"><br> <br>
        <input type="submit" class="btn btn-info btn-lg btn-block" value="submit">
    </form>    
    </div>
    <div class="col"></div>
</div>

<?php 
	if(isset($_GET['sub'])) {
		echo "<hr><p style='color:red' class='text-center'> Subject has been created successfully </p><hr>";
	}else{
		echo "";
	}

?>



<?php
	include './includs/footer.php';
?>