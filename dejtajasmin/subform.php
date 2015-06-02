<?php


$name=$_POST['namn'];
$enamn=$_POST['enamn'];
$email=$_POST['epost'];
$message=$_POST['message'];

$to='jasminramadani@hotmail.com';

$headers = 'From: '.$name."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$subject = 'Ny dejt Jasmin :D WIN!';
$body='Bam, rakt in i inkorgen! Från:'."\n\n";
$body.='Namn: '.$name."\n";
$body.='Efternamn: '.$enamn."\n";
$body.='Epost: '.$email."\n";
$body.='Meddelande: '."\n".$message."\n";
	
if(mail($to, $subject, $body, $headers)) {
	die('<img src="http://dejtajasmin.se/img/success.gif">');
} else {
	die('Något knasigt, försök senare!');
}

?>