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
				if(isset($_GET['tpwd'])) {
					echo "<hr> <p style='color:red' class='text-center'>Dear teacher your email or password not matched <br> or your request is not confirmed yet </p> <hr>";
				}else{
					echo "";
				}

			?>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">SIgn In</h1> <br><br>
        <form action="./includs/signin.php" method="post" class="form-group" >
            <select id="sep" name="sep" class="form-control wow bounceInDown" >
			  <option value="0">Student</option>
			  <option value="1">Teacher</option>
			  <option value="2">Parent.</option>
			</select> <br><br>
            <input type="text" class="form-control wow bounceInLeft" name="email" placeholder = "Email"><br><br>
            <?php 
                if(isset($_GET['spwd'])) {
					echo "<hr> <p style='color:red'>Dear student your email or password not matched </p> <hr>";
				}else{
					echo "";
                }
                if(isset($_GET['ppwd'])) {
					echo "<hr> <p style='color:red'>Dear parents your email or password not matched </p> <hr>";
				}else{
					echo "";
				}


			?>
            <input type="password" class="form-control wow bounceInRight" name="pwd" placeholder = "Password"><br><br>
            <button class="btn btn-info btn-lg btn-block wow bounceInUp">Sign in</button><br><br><br>
        </form>
    </div>
    <div class="col"></div>
</div>




<?php
	include './includs/footer.php';
?>