
<?php
// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","sdhruvil27@yahoo.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'sdhruvil27@yahoo.com');
$to = "sdhruvil118@gmail.com";
//$name=$_POST['name'];
//$email=$_POST['email'];
//$subject = $_POST['subject'];
//$message=$_POST['message'];
$subject = "HEYYYAAA";
$message = "ITSS MEEEEE";
$headers = "From : sdhruvil27@yahoo.com";
if (mail($to,$subject,$message,$headers)){
	echo 'mailed successfully';
}
else{
	echo 'not sent';
}
?>
