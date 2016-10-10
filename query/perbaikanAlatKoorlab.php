<?php
include "../koneksi.php";
 session_start();
 
  // Simpan ke Database
  $Date = date("Y-m-d");
  $Time = gmdate("H:i:s",time()+60*60*7);
  
  
  mysql_query("UPDATE req_perbaikan SET status='Sudah Diperbaiki', tgl_perbaikan='$Date $Time' WHERE kode_barang='$_GET[kode_barang]'");
  mysql_query("UPDATE barang SET status='OK' WHERE serial_num='$_GET[kode_barang]'");
  //echo $_POST['serial_num']. ', ' . $_POST['info_kerusakan'];
  /*echo"<script>alert('Produk Berhasil disimpan!');history.go(-1);</script>";*/
   
    $_SESSION['pesan'] = 'Perbaikan Telah Berhasil Dilakukan!';
    /*echo '<script>window.location="homeweb_user.php"</script>';*/
    
header('location:../koorlab_perbaikan_alat.php');
?>