<?php
include "../koneksi.php";
mysql_query("DELETE FROM praktikum WHERE nrp=$_GET[nrp]");
header("location:../asisten.php?kategori=$_GET[kategori]&&periode=$_GET[periode]");
?>