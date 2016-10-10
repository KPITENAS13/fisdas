<?php
include "../koneksi/koneksi.php";
 session_start();
 
  // Simpan ke Database
  $Date = date("Y-m-d");
  $Time = gmdate("H:i:s",time()+60*60*7);
  
  $sql = "insert into req_perbaikan(kode_barang,info_perbaikan,status,tgl_req) values('$_POST[serial_num]','$_POST[info_kerusakan]','Belum Diperbaiki','$Date $Time')";
  mysql_query($sql);
  
mysql_query("UPDATE barang SET status='RUSAK' WHERE serial_num='$_POST[serial_num]'");
  //echo $_POST['serial_num']. ', ' . $_POST['info_kerusakan'];
  /*echo"<script>alert('Produk Berhasil disimpan!');history.go(-1);</script>";*/
   
    $_SESSION['pesan'] = 'Permintaan Perbaikan Berhasil Dikirim!';
    /*echo '<script>window.location="homeweb_user.php"</script>';*/
 
header('location:../PermintaanPerbaikan.php');
?>