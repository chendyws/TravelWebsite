<?php
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$pesan=$_POST['pesan'];
	$tgl=$_POST['tgl'];

	// pemeriksaan

	/*echo $nama;
	echo $email;
	echo $pesan;
	echo $tgl;*/

	$msg='<p>
Berikut adalah data pengunjung yang mengirimkan pesan:
</p>

<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>'.$nama.'</td>
	</tr>
	
	<tr>
		<td>Email</td>
		<td>:</td>
		<td>'.$email.'</td>
	</tr>
	
	<tr>
		<td>Tanggal</td>
		<td>:</td>
		<td>'.$tgl.'</td>
	</tr>
	
	<tr>
		<td>Pesan</td>
		<td>:</td>
		<td>'.$pesan.'</td>
	</tr>
</table>';

	include "classes/class.phpmailer.php";
	$mail = new PHPMailer;

	$mail->IsSMTP();

	$mail->SMTPSecure = 'ssl';

	$mail->Host = "suaresbaliholidays.com"; //hostname masing-masing provider email
	$mail->SMTPDebug = 2;
	$mail->Port = 465;
	$mail->SMTPAuth = true;

	$mail->Timeout = 60; // timeout pengiriman (dalam detik)
	$mail->SMTPKeepAlive = true; 

	$mail->Username = "admin@suaresbaliholidays.com"; //user email
	$mail->Password = "XXXXX"; //password email
	$mail->SetFrom("admin@suaresbaliholidays.com","Nama pengirim yang muncul"); //set email pengirim
	$mail->Subject = "Pemberitahuan Email dari Website"; //subyek email
	$mail->AddAddress("admin@suaresbaliholidays.com","Nama penerima yang muncul"); //tujuan email
	$mail->MsgHTML($msg);

	if($mail->Send()) echo "Message has been sent";
	else echo "Failed to sending message";

?>

