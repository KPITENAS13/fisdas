<?php
include 'koneksi.php';
$q = mysql_query("select nrp, nama from mahasiswa,praktikum where mahasiswa.id=praktikum.nrp and praktikum.approve='R' and prak='$_GET[kategori]' and periode='$_GET[periode]'");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[nrp]</td>
            <td>$r[nama]</td>
            <td>
                <a href='process/terima_request_praktikan_proses.php?kategori=$_GET[kategori]&&periode=$_GET[periode]&&nrp=$r[nrp]' class='btn btn-success btn-xs'>
                    <span class='glyphicon glyphicon-ok'></span> Terima
                </a> 
                <a href='process/tolak_request_praktikan_proses.php?kategori=$_GET[kategori]&&periode=$_GET[periode]&&nrp=$r[nrp]' class='btn btn-danger btn-xs'>
                    <span class='glyphicon glyphicon-remove'></span> Tolak
                </a>
            </td>
        </tr>";
}
?>