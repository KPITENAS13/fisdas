<?php
include "../koneksi/koneksi.php";
$Date = date("Y-m-d");
$Time = gmdate("H:i:s",time()+60*60*7);
$tgl1 = date('Y-m-d',  strtotime('+3 day', strtotime($Date)));
mysql_query("UPDATE requestpenelitian SET 
status='Approve',
tanggal_confirm='$Date $Time',
tanggal_batas='$tgl1'
WHERE kode_pinjam='$_POST[inputKode_pinjam]'");

header('location:../RequestPenelitian.php');
?>