<?php
include "../koneksi.php";
$id = $_GET['kode'];
mysql_query("DELETE FROM berita_acara WHERE id=$_GET[kode]");
header('location:../berita_acara.php');
?>