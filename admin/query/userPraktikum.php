<?php
include "../koneksi/koneksi.php";
session_start();
$kode_pinjam = $_POST['kode_pinjam'];
$id_peminjam = $_SESSION['kode'];
$alat1 = $_POST['txt1'];
$alat2 = $_POST['txt2'];
$alat3 = $_POST['txt3'];
$alat4 = $_POST['txt4'];
$alat5 = $_POST['txt5'];
$alat6 = $_POST['txt6'];
$alat7 = $_POST['txt7'];
$alat8 = $_POST['txt8'];
$alat9 = $_POST['txt9'];
$alat10 = $_POST['txt10'];
$Date = date("Y-m-d");
$Time = gmdate("H:i:s",time()+60*60*7);
$nama_praktikum = $_POST['nama_praktikum'];
$periode = $_POST['th1'].'/'.$_POST['th2'];

$sql = "insert into requestpraktikum (kode_pinjam,id_peminjam,nama_praktikum,periode,alat1,alat2,alat3,alat4,alat5,alat6,alat7,alat8,alat9,alat10,tanggal_request) "
        . "values ('"
        . "$kode_pinjam','"
        . "$id_peminjam','"
        . "Pemrograman Dasar','"
        . "$periode','"
        . "$alat1','"
        . "$alat2','"
        . "$alat3','"
        . "$alat4','"
        . "$alat5','"
        . "$alat6','"
        . "$alat7','"
        . "$alat8','"
        . "$alat9','"
        . "$alat10','"
        . "$Date $Time')";
mysql_query($sql);

$_SESSION['pesan'] = 'Peminjaman Alat akan segera diproses!';
header('location:../../index.php');
?>