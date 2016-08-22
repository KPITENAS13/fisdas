<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab IF</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
        <?php
        include "koneksi/koneksi.php";
        session_start();
        //        menampilkan pesan jika ada pesan
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
        }
        //        mengatur session pesan menjadi kosong
        $_SESSION['pesan'] = '';
        ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <?php
                if (empty($_SESSION['username'])) {
                    include './components/navbar1.php';
                } else {
                    include './components/navbar2.php';
                }
                ?>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php
                        if (empty($_SESSION['kategori'])) { //kategori kosong = guest
                            include './components/sidebar1.php';
                        } else if ($_SESSION['kategori'] == "admin") { //jika admin yang masuk
                            include './components/sidebar4.php';
                        } else if ($_SESSION['kategori'] == "dosen") { //jika dosen yang masuk
                            include './components/sidebar2.php';
                        } else if ($_SESSION['kategori'] == "mahasiswa") { //jika mahasiswa yang masuk
                            include './components/sidebar3.php';
                        }
                        ?>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>Pengembalian Alat</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Kode Peminjaman</th>
                                                <th>Tipe Peminjaman</th>
                                                <th>Id Peminjam</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>Tanggal Request</th>
                                                <th>Kode Alat</th>
                                                <th>-----</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include "koneksi/koneksi.php";
                                            $tampil = mysql_query("select * from peminjaman where status_pinjam='Belum Dikembalikan'");
                                            while ($r = mysql_fetch_array($tampil)) {
                                                $hasil = (string) strlen($r['kode_peminjam']);
                                                $nm = '';
                                                $stat = '';
                                                if ($hasil > 5) {
                                                    $nama = mysql_query("select * from mahasiswa where id=$r[kode_peminjam]");
                                                    while ($n = mysql_fetch_array($nama)) {
                                                        $nm = $n['nama'];
                                                        $stat = 'Mahasiswa';
                                                    }
                                                } else {
                                                    $nama = mysql_query("select nama from dosen where nid=$r[kode_peminjam]");
                                                    while ($n = mysql_fetch_array($nama)) {
                                                        $nm = $n['nama'];
                                                        $stat = 'Dosen';
                                                    }
                                                }
                                                echo"
                                                    <form action=homeweb_LihatDetailProduk.php method=GET>
                                                    <tr>
                                                        <input type=hidden name=kode_pinjam value=$r[id_peminjaman]>
                                                      
                                                        <td align=center>$r[id_peminjaman]</td>
                                                        <td align=center>$r[type_peminjaman]</td>
                                                        <td align=center>$r[kode_peminjam]</td>
                                                        <td align=center>$nm</td>
                                                        <td align=center>$stat</td>
                                                        <td align=center>$r[tgl_pinjam]</td>
                                                        <td align=center>$r[kode_barang]</td>
                                                        <td align=center><a href=AlatDikembalikan.php?kode_pinjam=$r[id_peminjaman]&kode_barang=$r[kode_barang]><button class=btn-warning>Proses</button></a></td>
                                                    </tr>
                                                </form>";
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Kode Peminjaman</th>
                                                <th>Tipe Peminjaman</th>
                                                <th>Id Peminjam</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>Tanggal Request</th>
                                                <th>Kode Alat</th>
                                                <th>-----</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div><!--/.module-->

                            <br />

                        </div><!--/.content-->
                    </div><!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
        <script src="scripts/jquery.min.js"></script>
    </body>
</html>