<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab Fisika Dasar Itenas</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
              rel='stylesheet'>
    </head>
    <body>
<!--    <div id="container" style="min-width: 200px; height: 400px; margin: 0 auto"></div>-->
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
                        } else if ($_SESSION['kategori'] == "mahasiswa"){ //jika mahasiswa yang masuk
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
                                <h3><center>EVALUASI & KUISONER ASISTEN LAB FISIKA DASAR ITENAS</center></h3>
                            </div>
                            <div class="module-body">     
                                
                            <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
                            <script src="js/highcharts.js" type="text/javascript"></script>
                            <script src="js/exporting.js" type="text/javascript"></script>
                            <script type="text/javascript">
                            var chart1; // globally available
                            $(document).ready(function() {
                                  chart1 = new Highcharts.Chart({
                                     chart: {
                                        renderTo: 'container',
                                        type: 'column'
                                     },   
                                     title: {
                                        text: 'Data Kuesioner Asisten Laboratorium Fisika Dasar'
                                     },
                                     xAxis: {
                                        categories: ['Periode']
                                     },
                                     yAxis: {
                                        title: {
                                           text: 'Rata-rata'
                                        }
                                     },
                                          series:             
                                        [
                            <?php      
                            // file koneksi php
                            /*$server = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "inventaris";
                            mysql_connect($server,$username,$password) or die("Koneksi gagal");
                            mysql_select_db($database) or die("Database tidak bisa dibuka");*/
                            include 'koneksi.php';
                            $sql   = "SELECT periode from ks_nilaiasisten GROUP BY periode"; // file untuk mengakses ke tabel database
                            $query = mysql_query( $sql ) or die(mysql_error());

                            while($ambil = mysql_fetch_array($query)){
                                    //$jurusan=$ambil['jurusan'];
                                    $allperiode = $ambil['periode'];
                                    $sql_avarage   = "SELECT periode, AVG (avarage) AS avg_per from ks_nilaiasisten GROUP BY periode ='$allperiode'";     

                                    $query_avarage = mysql_query( $sql_avarage ) or die(mysql_error());
                                    while( $data = mysql_fetch_array( $query_avarage )){
                                       $jumlahx = $data['avg_per'];  
                                       //$alljurusan = $data['jurusan'];
                                      }             

                                      ?>
                                      {
                                              name: '<?php echo $allperiode; ?>',
                                              data: [<?php echo $jumlahx; ?>]
                                      },
                                      <?php } ?>
                            ]
                            });
                            });	
                            </script>

                            <div id="container" style="min-width: 200px; height: 400px; margin: 0 auto"></div>
                            </div>

                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        </div>>
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
    </body>
</html>