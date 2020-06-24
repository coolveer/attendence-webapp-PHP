<?php
    include './includs/hedder.php';
    session_start();
    $sep = $_GET['sep'];
    $email = trim(strip_tags($_POST['email']));
      if(isset($_POST['email'])){
        $otp= rand(1000,9999);
         $_SESSION['otp']=$otp;

    require("PHPMailer-master/src/PHPMailer.php");
      require("PHPMailer-master/src/SMTP.php");
      require ("PHPMailer-master/src/autoload.php");
      include_once "PHPMailer-master/src/PHPMailer.php";
      include_once "PHPMailer-master/src/Exception.php";

      $mail = new PHPMailer\PHPMailer\PHPMailer(true);

      $mail->isSMTP();

      $mail->SMTPDebug = 2;

      $mail->Host = 'smtp.gmail.com';

      $mail->Port = 587;

      $mail->SMTPSecure = 'tls';

      $mail->SMTPAuth = true;

      $mail->Username = "tumradiwana@gmail.com";

      $mail->Password = "amanGMAIL";

      $mail->setFrom('no-reply@veer.com');

      $mail->addReplyTo('no-reply@veer.com');

      $mail->addAddress($email);

      $mail->Subject = 'test for mail verification';

      $mail->Body = 'hello Thanks for using our service . OTP:'.$otp;

      $mail->send();
      header('Location: ./cemail.php?sep='.$sep.'&upemail='.$email);

      }

      
    
?>

<div class="row">
    <div class="col"></div>
    <div class="col-md-10">
    <br><br><br><br>
    <a href="./index.html">
    <button class="btn  btn-info float-left">Back</button>
    </a>
    <br>
    <br>
    <h1 class="text-center" style="font-family: 'Lobster', cursive;">Your email for confirmation</h1> <br><br>
    <form action="./email.php?sep=<?php echo $_GET['sep'] ?>" method="POST" class="form-group">
        <input type="text" name="email" class="form-control">    
             <br><br>
        <button type="submit" class="btn btn-info btn-lg btn-block" value="submit" >Get OTP on Email</button>
    </form>    
    </div>
    <div class="col"></div>
</div>

<?php 
	if(isset($_GET['sub'])) {
		echo "<hr><p style='color:red' class='text-center'> Subject has been reserved successfully </p><hr>";
	}else{
		echo "";
	}

?>


<?php
	include './includs/footer.php';
?>