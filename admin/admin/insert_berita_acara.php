<?php

include "../koneksi.php";
$tanggal = $_POST['tanggal'];
$acara = $_POST['acara'];

mysql_query("INSERT INTO berita_acara
(tanggal, acara)VALUES
('$tanggal','$acara')");

header('location:../berita_acara.php');
?>