<?php
include "koneksi/koneksi.php";
//        menampilkan pesan jika ada pesan
if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
    echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
}
//        mengatur session pesan menjadi kosong
$_SESSION['pesan'] = '';
?>
<!--Sidebar menu untuk admin-->
<div class="sidebar">
    <ul class="widget widget-menu unstyled">
        <li>
            <a class="collapsed" data-toggle="collapse" href="#togglePages1">
                <i class="menu-icon icon-inbox"></i>
                <b class="label green pull-right"><?php
                    $Date = date("Y-m-d");
                    $notifp1 = mysql_query("select count(*) as jumlah from requestpraktikum where status='No'");
                    $nfp1 = mysql_fetch_array($notifp1);
                    $notifp2 = mysql_query("select count(*) as jumlah from requestpenelitian where status='No'");
                    $nfp2 = mysql_fetch_array($notifp2);
                    $notifp3 = mysql_query("select count(*) as jumlah from requestpenelitian where status='Approve' and tanggal_batas='$Date' and pengingat='Y'");
                    $nfp3 = mysql_fetch_array($notifp3);
                    $result = $nfp1['jumlah'] + $nfp2['jumlah']+ $nfp3['jumlah'];
                    echo $result;
                    ?></b>
                Notifikasi
            </a>
            <ul id="togglePages1" class="collapse unstyled">
                <li>
                    <a href="RequestPraktikum.php">
                        <i class="icon-check pull-right"></i>
                        <b class="label orange"><?php
                            $notifp = mysql_query("select count(*) as jumlah from requestpraktikum where status='No'");
                            $nfp = mysql_fetch_array($notifp);
                            echo $nfp['jumlah'];
                            ?></b>
                        Praktikum
                    </a>
                </li>
                <li>
                    <a href="RequestPenelitian.php">
                        <i class="icon-check pull-right"></i>
                        <b class="label orange"><?php
                            $notifp = mysql_query("select count(*) as jumlah from requestpenelitian where status='No'");
                            $nfp = mysql_fetch_array($notifp);
                            echo $nfp['jumlah'];
                            ?></b>
                        Penelitian
                    </a>
                </li>
                <li>
                    <a href="PengingatPeminjamanPenelitian.php">
                        <i class="icon-check pull-right"></i>
                        <b class="label orange"><?php
                            $Date = date("Y-m-d");
                            $notifp = mysql_query("select count(*) as jumlah from requestpenelitian where status='Approve' and tanggal_batas ='$Date' and pengingat='Y'");
                            $nfp = mysql_fetch_array($notifp);
                            echo $nfp['jumlah'];
                            ?></b>
                        Peminjaman Alat
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="PengembalianAlat.php">
                <i class="menu-icon icon-circle-arrow-right"></i>
                Pengembalian Alat
            </a>
        </li>
        <li>
            <a href="PermintaanPerbaikan.php">
                <i class="menu-icon icon-barcode"></i>
                Permintaan Perbaikan
            </a>
        </li>
        <li>
            <a href="berita_acara.php">
                <i class="menu-icon icon-barcode"></i>
                Berita Acara
            </a>
        </li>
    </ul>
    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">
        <li>
            <a class="collapsed" data-toggle="collapse" href="#togglePages">
                <i class="menu-icon icon-book"></i>
                <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                Inventaris Alat
            </a>
            <ul id="togglePages" class="collapse unstyled">
                <li>
                    <a href="HistoriAlat.php">
                        <i class="icon-check"></i>
                        Riwayat Peminjaman Alat
                    </a>
                </li>
                <li>
                    <a href="DataInventaris.php">
                        <i class="icon-check"></i>
                        Data Inventaris Alat
                    </a>
                </li>
                <li>
                    <a href="PenambahanInventaris.php">
                        <i class="icon-check"></i>
                        Penambahan
                    </a>
                </li>
                <li>
                    <a href="PembaharuanInventaris.php">
                        <i class="icon-check"></i>
                        Pembaharuan
                    </a>
                </li>
                <li>
                    <a href="PenghapusanInventaris.php">
                        <i class="icon-check"></i>
                        Penghapusan
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="printqrcode.php">
                <i class="menu-icon icon-qrcode"></i>
                Print QR Code
            </a>
        </li>
    </ul>
    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">
        <li><a href="praktikum.php"><i class="menu-icon icon-lightbulb"></i> Kepala Laboratorium </a></li>
        <li><a href="admin_info_jadwal_praktikum.php"><i class="menu-icon icon-table"></i> Jadwal Praktikum </a></li>
        <li><a href="admin_info_topik_TA.php"><i class="menu-icon icon-list-alt"></i> Topik TA </a></li>
    </ul>
    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">
        <li><a href="monitoring.php"><i class="menu-icon icon-laptop"></i> Monitoring </a></li>
        <li><a href="admin_absensi.php"><i class="menu-icon icon-book"></i> Absensi </a></li>
    </ul>
    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">
        <li><a class="collapsed" data-toggle="collapse" href="#togglePages4"><i class="menu-icon icon-inbox">
                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                </i> Dokumentasi </a>
            <ul id="togglePages4" class="collapse unstyled">
                <li><a href="admin_arsip_absensi.php"><i class="icon-book"></i> Absen Asisten </a></li>
                <li><a href="admin_arsip_sertifikat.php"><i class="icon-star"></i> Sertifikat </a></li>
            </ul>
        </li>
        <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-suitcase">
                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                </i> Arsip </a>
            <ul id="togglePages2" class="collapse unstyled">
                <li><a href="admin_arsip.php?kategori=Absensi"><i class="icon-book"></i> Absen Asisten </a></li>
                <li><a href="admin_arsip.php?kategori=Jobsheet"><i class="icon-tasks"></i> Jobsheet </a></li>
                <li><a href="admin_arsip.php?kategori=Modul"><i class="icon-book"></i> Modul </a></li>
                <li><a href="admin_arsip.php?kategori=Sertifikat"><i class="icon-star"></i> Sertifikat </a></li>
                <li><a href="admin_arsip.php?kategori=Surat"><i class="icon-legal"></i> Surat Keluar </a></li>
            </ul>
        </li>
    </ul>
    <!--/.widget-nav-->
</div>