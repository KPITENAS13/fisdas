<?php

include 'koneksi.php';
//cek jumlah pertemuan
$kelas = "";
$periode = "";
$praktikum = "";
$nrp = "";
if (isset($_POST['prodi'])) {
    $periode = $_POST['periode'];
    $praktikum = $_POST['prodi'];
    $kelas = $_POST['kelas'];
}
if (isset($_SESSION['kode'])){
    $nrp = $_SESSION['kode'];
}else{
    $nrp = "";
}

$q1 = mysql_query("SELECT COUNT(DISTINCT pertemuan) AS jml FROM absensi WHERE prodi='$praktikum' and periode='$periode' and kelas='$kelas'");
$r1 = mysql_fetch_array($q1);
$jml_pertemuan = $r1['jml'];

echo "<table class='table table-bordered table-striped' style='width:70%; margin-left:15%;'>";
echo "<tr>"
 . "<th style='width:10%;'> Pertemuan </th>"
 . "<th> Tanggal </th>"
 . "</tr>";
$q2 = mysql_query("SELECT * from absensi where nrp='$nrp' and prodi='$praktikum' and periode='$periode' order by pertemuan");
while ($r2 = mysql_fetch_array($q2)) {
    echo "<tr>"
    . "<td> $r2[pertemuan] </td>"
    . "<td> $r2[tanggal] </td>"
    . "</tr>";
}
echo "</table>";
?>