<?php

include 'koneksi.php';
//cek jumlah pertemuan
$kelas = "";
$periode = "";
$prodi = "";
if (isset($_POST['prodi'])) {
    $periode = $_POST['periode'];
    $prodi = $_POST['prodi'];
    $kelas = $_POST['kelas'];
}

if (isset($_SESSION['kode'])){
    $nrp = $_SESSION['kode'];
}else{
    $nrp = "";
}

$query = "SELECT COUNT(DISTINCT pertemuan) AS jml FROM absensi WHERE prodi='$prodi' and periode='$periode' and kelas='$kelas'";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
$jml_pertemuan = $row['jml'];

$q = mysql_query("SELECT DISTINCT nrp,nama,count(nrp)as jml FROM absensi,mahasiswa WHERE absensi.nrp=mahasiswa.id AND prodi='$prodi' AND periode='$periode' AND kelas='$kelas' GROUP BY nrp");
while ($r = mysql_fetch_array($q)) {
    $persen = ($r['jml'] * 100) / $jml_pertemuan;
    $p = round($persen);
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>";
    if ($r['nrp'] == $nrp) {
        echo"<td>$p % 
                <a href='#' data-toggle='modal' data-target='#UserModal'>
                <span class='glyphicon glyphicon-info-sign'></span>
                </a>
            </td>";
    } else {
        echo"<td>$p %</td>";
    }

    echo "</tr>";
}
?>