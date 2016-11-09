<?php
ob_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "inventaris";

//koneksi dan memilih database di server
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect($server,$username,$password) or die("gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>
