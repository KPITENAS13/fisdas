<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM berita_acara order by tanggal");
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[tanggal]</td>
            <td>$r[acara]</td>
            <td><a href='admin/delete_berita_acara.php?kode=$r[id]'>Hapus</a></td>
        </tr>";
}
?>

