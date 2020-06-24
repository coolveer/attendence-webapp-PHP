<?php
	include './includs/hedder.php';
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./index.html">
    <button class="btn  btn-info ">Back</button>
    </a>
    <br>
    <?php 
    
    if (isset($_POST["pwd"])) {
        $sub = trim(strip_tags($_POST['pwd']));
        if ($sub == "admin") {
            header('Location: ./reql.php');
        }else{
            header('Location: ./admin.php?admin=1');
        }
    }
    

			?>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Admin Login</h1> <br><br>
        <form action="./admin.php" method="post" class="form-group" >
            <input type="password" class="form-control" name="pwd" placeholder = "Password"><br><br>
            <button type="submit" class="btn btn-info btn-lg btn-block">Sign in</button><br><br><br>
        </form>
    </div>
    <div class="col"></div>
</div>

<?php 
				if(isset($_GET['admin'])) {
					echo "<hr> <p style='color:red' class='text-center'>Wrong Admin Password </p> <hr>";
				}else{
					echo "";
				}

			?>


<?php
	include './includs/footer.php';
?>