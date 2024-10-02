<?php
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$name=$_POST['txtname'];
$email=$_POST['txtemail'];
$subject=$_POST['txtsubject'];
$msg=$_POST['txtmsg'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'abagrigrow@gmail.com';                 // SMTP username
$mail->Password = 'pakistan786';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'AB Grower');
$mail->addAddress('customercare@abagrigrow.com', '');     // Add a recipient
$mail->addAddress('');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');
$mail->isHTML(true);       
$mail->Subject =$_POST['txtsubject'];
$mail->Body    = '<b>Name:</b> '.$name .'<br> <b>Email:</b> '.$email.'<br> <b>Message:</b> '.$msg;
$mail->AltBody = '<b>Name:</b> '.$name .'<br> <b>Email:</b> '.$email.'<br> <b>Message:</b> '.$msg;
;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	?>
    <!--<script>
	setTimeout(function(){
		window.location="contact.html";
		},700);
	</script>-->
    <?php
} else {
    echo 'Message has been sent';
	?>
    <!--<script>
	setTimeout(function(){
		window.location="contact.html";
		},700);
	</script>-->
    <?php
}
?>