<?php
session_start();
?>
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
    <div id="container" style="min-width: 200px; height: 400px; margin: 0 auto"></div>
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
                                <h3><center>EVALUASI & KUISONER PRAKTIKAN LAB FISIKA DASAR ITENAS</center></h3>
                            </div>
                            <div class="module-body">                
                            <script type="text/javascript">
                            var chart1; // globally available
                            $(document).ready(function() {
                            chart1 = new Highcharts.Chart({
                             chart: {
                                renderTo: 'container',
                                type: 'column'
                             },   
                             title: {
                                text: 'Data Kuisoner Praktikan Lab Fisika Dasar Itenas '
                             },
                             xAxis: {
                                categories: ['Tahun']
                             },
                             yAxis: {
                                title: {
                                   text: 'Rata-rata Praktikan'
                                }
                             },
                                  series:             
                                [
                    <?php      
                    include "koneksi.php";
                    $jumlah_avarage = "SELECT SUM (avarage) FROM ks_nilaipraktikan GROUP BY tahun_ajaran";
                    $count = "SELECT count(*) as total FROM ks_nilaipraktikan";
                    $hasil = mysql_query($jumlah_avarage) / mysql_query($count);
                    $r = mysql_fetch_array($hasil);

                    $sql   = "SELECT * FROM ks_nilaipraktikan"; // file untuk mengakses ke tabel database
                    $query = mysql_query( $sql ) or die(mysql_error());  

                    while($ambil = mysql_fetch_array($query)){
                      $tahun=$ambil['tahun_ajaran'];
                      $sql_jumlah   = "SELECT * from ks_nilaipraktikan where tahun_ajaran='$tahun'";        
                      $query_jumlah = mysql_query( $hasil ) or die(mysql_error());
                      while( $data = mysql_fetch_array( $query_jumlah ) ){
                         $jumlahx = $data['Rata-rata'];                 
                        }             
                        
                        ?>
                        {
                          name: '<?php echo $tahun; ?>',
                          data: [<?php echo $jumlahx; ?>]
                        },
                        <?php } ?>
                    ]
                    });
                    }); 
                    </script>
                            
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

        <script src="js/highcharts.js" type="text/javascript"></script>
        <script src="js/exporting.js" type="text/javascript"></script>
    </body>
</html>