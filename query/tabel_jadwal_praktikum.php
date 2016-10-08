<?php
include 'koneksi.php';
$q = mysql_query("SELECT * FROM jadwal_praktikum");
$teks = '';
while ($r = mysql_fetch_array($q)) {
    echo "
        <tr>
            <td>$r[periode]</td>
            <td>$r[prodi]</td>
            <td>$r[kelas]</td>
            <td>$r[waktu]</td>
        </tr>";
}
?>