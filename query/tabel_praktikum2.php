<?php

include './koneksi.php';
$praktikum = $_GET['kategori'];
$periode = $_GET['periode'];
$nrp = $_SESSION['kode'];

$sql = "SELECT * FROM koordinator WHERE jabatan='Koor Asisten' AND praktikum='$praktikum' AND periode='$periode' AND kode=$nrp";
$result2 = mysql_query($sql);
if (mysql_num_rows($result2) == 0) {
    $q1 = mysql_query("SELECT kelas FROM asisten WHERE nrp=$nrp AND praktikum='$praktikum' AND periode='$periode'");
    $result = mysql_fetch_array($q1);
    $q2 = mysql_query("SELECT *, praktikum.id as kode FROM praktikum,mahasiswa where "
            . "prak='$praktikum' AND "
            . "periode='$periode' AND "
            . "approve='Y' AND "
            . "praktikum.nrp=mahasiswa.id AND "
            . "kelas='$result[kelas]'");
    $content = "";
}else{
    $q2 = mysql_query("SELECT *, praktikum.id as kode FROM praktikum,mahasiswa where "
            . "prak='$praktikum' AND "
            . "periode='$periode' AND "
            . "approve='Y' AND "
            . "praktikum.nrp=mahasiswa.id");
    $content = "contenteditable";
}
while ($r = mysql_fetch_array($q2)) {
    echo "
        <tr class='baris'>
            <td class='nrp' data-id1='$r[kode]'>$r[nrp]</td>
            <td class='nama' data-id2='$r[kode]'>$r[nama]</td>
            <td style='background-color:#FFF' class='kls' data-id3='$r[kode]' $content >$r[kelas]</td>
            <td class='nil nh' data-id4='$r[kode]' style='background-color:#AAAAAA;'>$r[nilai_harian]</td>
            <td style='background-color:#FFF' class='nil uts' data-id5='$r[kode]' contenteditable>$r[uts]</td>
            <td style='background-color:#FFF' class='nil uas' data-id6='$r[kode]' contenteditable>$r[uas]</td>
            <td style='background-color:#FFF' class='nil pro' data-id7='$r[kode]' contenteditable>$r[project]</td>
            <td class='nil abs' data-id8='$r[kode]' style='background-color:#AAAAAA;'>$r[absen]</td>
            <td class='tot' data-id9='$r[kode]' style='background-color:#AAAAAA;' >$r[total]</td>
        </tr>";
}
?>