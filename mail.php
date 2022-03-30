<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "domain.com"; //host masing2 provider email
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "admin@suaresbaliholidays.com"; //user email
$mail->Password = "Suares123"; //password email 
$mail->SetFrom("admin@suaresbaliholidays.com","Nama pengirim"); //set email pengirim
$mail->Subject = "Testing"; //subyek email
$mail->AddAddress("admin@suaresbaliholidays.com","nama email tujuan");  //tujuan email
$mail->MsgHTML("Testing...");
if($mail->Send()) echo "The Message has been sent";
else echo "Failed to sending message";
?>