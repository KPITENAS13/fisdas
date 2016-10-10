<?php
include "../koneksi/koneksi.php";
session_start();
$Date = date("Y-m-d");
$Time = gmdate("H:i:s",time()+60*60*7);
mysql_query("UPDATE barang SET 
nama='$_POST[nama]',
developer='$_POST[developer]',
lokasi='$_POST[lokasi]',
type='$_POST[type]', 
model='$_POST[model]', 
no_pelabelan='$_POST[no_pelabelan]',
last_update='$Date $Time'
WHERE serial_num='$_POST[serial]'");

$_SESSION['pesan'] = 'Data Anda Berhasil Diperbaharui!';
header('location:../PembaharuanInventaris.php');
?>