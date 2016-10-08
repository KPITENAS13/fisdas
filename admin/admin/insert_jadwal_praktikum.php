<?php
include "../koneksi.php";
$waktu = $_POST[hari] . " " . $_POST[jam];
mysql_query("INSERT INTO jadwal_praktikum
(periode,prodi,kelas,waktu)VALUES
('$_POST[periode]','$_POST[prodi]','$_POST[kelas]','$waktu')");
header('location:../admin_info_jadwal_praktikum.php');
?>