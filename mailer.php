<?php
set_time_limit(3600);
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jobschamber1@gmail.com';                 // SMTP username
$mail->Password = 'Ziarbeila123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->SMTPDebug  = 0;   

//$mail->From = 'MyUsername@gmail.com';
$mail->FromName = $name;
//$mail->setFrom('abc@outlook.com', 'Jobs Chamber');
$mail->addAddress($cemail,$company);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($yemail,$name);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$res = $mail->addAttachment($org_path, $file_name);         // Add attachments
/*
if ($res) {
	echo "File attached";
}
else {
	echo "failed to attach file";
	die();
}*/
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Resume for ' . $title;
$mail->Body    = $description . '<br><br><b>This Email has been sent from Jobs Chamber, An online Job Portal. You can reply to this email for contacting the candidate but DONOT use jobschamber1@gmail.com. <br><br>VISIT:&nbsp;www.JobsChamber.com<br>EMAIL:&nbsp;jobschamber1@gmail.com</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
	echo "<script>swal('Sending failed, Please Try Again');</script>";
	
} else {
	echo "<script>swal('Your Application for the Job has been successfully Submitted!');</script>";
	
}
?>