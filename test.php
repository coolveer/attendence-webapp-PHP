<?php

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

      $mail->addAddress('coolveer.singh110@gmail.com');

      $mail->Subject = 'Varification Email From Up Touriosm';

      $mail->Body = 'hello Thanks for using our service . ';

      $mail->send();


?>