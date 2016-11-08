<?php
session_start();
$kode = $_GET['kode'];
$email_penerima = $_GET['email'];
$nama_penerima = $_GET['nama'];
$isi_pesan = Date('Y-m-d').', Hari Ini Batas Pengembalian Alat. Mohon Segera Kembalikan Alat Yang Telah Anda Pinjam' ;
$subjek = 'PENGINGAT PENGEMBALIAN PEMINJAMAN ALAT LAB FISIKA DASAR ITENAS '.Date('Y-m-d');

//echo "$email_penerima, $nama_penerima, $isi_pesan, $subjek";

include('class.phpmailer.php');
include('class.smtp.php');
$mail = new PHPMailer();
$mail->Host = "ssl://smtp.gmail.com";
$mail->Mailer = "smtp"; 
$mail->SMTPAuth = true; 
$mail->Username = "pengingat.itenas@gmail.com"; 
$mail->Password = "ifitenas2013b"; 
$webmaster_email = "pengingat.itenas@gmail.com"; 
$email = $email_penerima; 
$name = $nama_penerima;
$mail->From = $webmaster_email;
$mail->FromName = "Lab. Fisika Dasar ITENAS"; 
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Lab. Fisika Dasar ITENAS"); 
$mail->WordWrap = 50;
//$mail->AddAttachment("module.txt");
//$mail->AddAttachment("new.jpg");
$mail->IsHTML(true);
$mail->Subject = $subjek;
$mail->Body = $isi_pesan;
$mail->AltBody = "This is the body when user views in plain text format";
if (!$mail->Send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    $_SESSION['pesan'] = 'Email Tidak Terkirim, Cek Koneksi Anda!';
    header("location:../../PengingatPeminjamanPenelitian.php");
} else {
    include "../../koneksi/koneksi.php";
    mysql_query("UPDATE requestpenelitian SET 
    pengingat='N'
    WHERE kode_pinjam='$kode'");
    $_SESSION['pesan'] = 'Email Telah Terkirim!';
    header("location:../../PengingatPeminjamanPenelitian.php");
}
?>