<?php
include "../koneksi.php";
$waktu = $_POST[hari2] . " " . $_POST[jam2];
mysql_query("UPDATE jadwal_praktikum SET 
	periode = '$_POST[periode2]', 
	prodi = '$_POST[prodi2]', 
        kelas = '$_POST[kelas2]', 
        waktu = '$waktu' 
	WHERE id = $_POST[id]");
header('location:../admin_info_jadwal_praktikum.php');
?>