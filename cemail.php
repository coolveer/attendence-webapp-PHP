<?php
    include './includs/hedder.php';
    session_start();
    $email = trim(strip_tags($_POST['email']));

    
      if(isset($_POST['email'])){
        
         
         if ($_SESSION['otp']==$email) {
            if ($_GET['sep']==0) {
                header('Location: ./sup.php?upemail='.$_GET['upemail']);
            }
            elseif(($_GET['sep']==2)){
                header('Location: ./pup.php?upemail='.$_GET['upemail']);
            }else{
                header('Location: ./cemail.php?sub=1&sep='.$_GET['sep'].'&upemail='.$_GET['upemail']);
            }
         }

    
      
    }
    
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./email.php">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <a href="./includs/logout.php">
        <button type="button" class="btn btn-info float-right">Logout</button>
    </a><br>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;"><?php echo $_SESSION['otp'] ?>otp confirmation:</h1> <br><br>
    <form action="./cemail.php?sep=<?php echo $_GET['sep'] ?>&upemail=<?php echo $_GET['upemail'] ?>" method="POST" class="form-group">
        <input type="text" name="email" class="form-control">    
             <br><br>
        <button type="submit" class="btn btn-info btn-lg btn-block" value="submit" >confirm otp</button>
    </form>    
    </div>
    <div class="col"></div>
</div>

<?php 
	if(isset($_GET['sub'])) {
		echo "<hr><p style='color:red' class='text-center'> OTP Not Matched  </p><hr>".$_GET['upemail'];
	}else{
		echo "";
	}

?>


<?php
	include './includs/footer.php';
?>