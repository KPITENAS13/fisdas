<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog Single | Corlate</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else if ($_SESSION['kategori'] == "mahasiswa") {
                include './comp/navbar2.php';
            } else if ($_SESSION['kategori'] == "dosen") {
                include './comp/navbar3.php';
            }
            ?>
        </header><!--/header-->

        <section id="contact-info">
            <div class="center wow fadeInDown">
                <h2><center>EVALUASI & KUISONER ASISTEN</center></h2>
                <p class="lead">
                    EVALUASI & KUISONER ASISTEN LABORATORIUM FISIKA DASAR ITENAS
                </p>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 wow fadeInDown" data-wow-delay="300ms">
                    <div class="module">
                        <div class="module-body"> 
                            <h3><b>Petunjuk Pengisian Evaluasi & Kuesioner Asisten</b></h3>
                            <p> Beri tanda silang  atau check   pada pilihan jawaban atas pertanyaan yang diberikan
                                serta isikan saran & catatan mengenai evaluasi & kuesioner asisten sesuai dengan penilaian Anda.
                                Indeks standar penilaian kuesioner yang diberikan yaitu :
                                <b> Sangat Kurang = 1, 
                                    Kurang        = 2,
                                    Cukup         = 3,
                                    Baik          = 4,
                                    Sangat Baik   = 5
                                </b>
                            </p>
                            <br>
                            <table class="table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th>ASISTEN</th>
                                        <th width="3%"><center>1</center></th>
                                        <th width="3%"><center>2</center></th>
                                        <th width="3%"><center>3</center></th>
                                        <th width="3%"><center>4</center></th>
                                        <th width="3%"><center>5</center></th>
                                        <th width="50%"><center>Saran dan Catatan</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksi.php";
                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA001'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                <form class='form-horizontal' role='form' name=form action='kuesioner_userA.php' method='post'>
                                    <tr>
                                      <th colspan='6'>$r[jenis_kuisoner]</th>
                                      <td rowspan='5'><textarea id=basicinput' class='span8' name='evaluasi' rows='6' style='width:600px' placeholder ='Masukkan Saran dan Catatan Modul' required></textarea></td>
                                    </tr>
                                    
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks1' onclick='displayResult1a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks1' onclick='displayResult1b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks1' onclick='displayResult1c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks1' onclick='displayResult1d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks1' onclick='displayResult1e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks1a' id='rs1a'>
                                      <input type='hidden' name='ks1b' id='rs1b'>
                                      <input type='hidden' name='ks1c' id='rs1c'>
                                      <input type='hidden' name='ks1d' id='rs1d'>
                                      <input type='hidden' name='ks1e' id='rs1e'>

                                    </tr>";
                                    }

                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA002'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks2' onclick='displayResult2a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks2' onclick='displayResult2b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks2' onclick='displayResult2c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks2' onclick='displayResult2d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks2' onclick='displayResult2e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks2a' id='rs2a'>
                                      <input type='hidden' name='ks2b' id='rs2b'>
                                      <input type='hidden' name='ks2c' id='rs2c'>
                                      <input type='hidden' name='ks2d' id='rs2d'>
                                      <input type='hidden' name='ks2e' id='rs2e'>                                      
                                    
                                    </tr>";
                                    }

                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA003'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks3' onclick='displayResult3a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks3' onclick='displayResult3b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks3' onclick='displayResult3c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks3' onclick='displayResult3d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks3' onclick='displayResult3e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks3a' id='rs3a'>
                                      <input type='hidden' name='ks3b' id='rs3b'>
                                      <input type='hidden' name='ks3c' id='rs3c'>
                                      <input type='hidden' name='ks3d' id='rs3d'>
                                      <input type='hidden' name='ks3e' id='rs3e'>
                                    </tr>";
                                    }
                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA004'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks4' onclick='displayResult4a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks4' onclick='displayResult4b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks4' onclick='displayResult4c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks4' onclick='displayResult4d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks4' onclick='displayResult4e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks4a' id='rs4a'>
                                      <input type='hidden' name='ks4b' id='rs4b'>
                                      <input type='hidden' name='ks4c' id='rs4c'>
                                      <input type='hidden' name='ks4d' id='rs4d'>
                                      <input type='hidden' name='ks4e' id='rs4e'>
                                    </tr>
                                    
                                    
                                     <tr>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                    </tr>";
                                    }
                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA005'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                    <tr>
                                      <th colspan='6'>$r[jenis_kuisoner]</th>
                                      <td rowspan='3'><textarea class='span8' name='evaluasi2' rows='5' style='width:600px' placeholder ='Masukkan Saran dan Catatan Peralatan dan Fasilitas' required></textarea></td>
                                    </tr>
                                    
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks5' onclick='displayResult5a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks5' onclick='displayResult5b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks5' onclick='displayResult5c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks5' onclick='displayResult5d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks5' onclick='displayResult5e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks5a' id='rs5a'>
                                      <input type='hidden' name='ks5b' id='rs5b'>
                                      <input type='hidden' name='ks5c' id='rs5c'>
                                      <input type='hidden' name='ks5d' id='rs5d'>
                                      <input type='hidden' name='ks5e' id='rs5e'>
                                      
                                    </tr>";
                                    }
                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA006'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks6' onclick='displayResult6a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks6' onclick='displayResult6b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks6' onclick='displayResult6c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks6' onclick='displayResult6d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks6' onclick='displayResult6e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks6a' id='rs6a'>
                                      <input type='hidden' name='ks6b' id='rs6b'>
                                      <input type='hidden' name='ks6c' id='rs6c'>
                                      <input type='hidden' name='ks6d' id='rs6d'>
                                      <input type='hidden' name='ks6e' id='rs6e'>
                                      
                                    </tr>
                                    
                                     <tr>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                    </tr>";
                                    }
                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA007'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                      <tr>
                                      <th colspan='6'>$r[jenis_kuisoner]</th>
                                      <td rowspan='3'><textarea class='span8' name='evaluasi3' rows='5' style='width:600px' placeholder ='Masukkan Saran dan Catatan Praktikan' required></textarea></td>
                                     </tr>
                                    
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks7' onclick='displayResult7a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks7' onclick='displayResult7b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks7' onclick='displayResult7c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks7' onclick='displayResult7d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks7' onclick='displayResult7e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks7a' id='rs7a'>
                                      <input type='hidden' name='ks7b' id='rs7b'>
                                      <input type='hidden' name='ks7c' id='rs7c'>
                                      <input type='hidden' name='ks7d' id='rs7d'>
                                      <input type='hidden' name='ks7e' id='rs7e'>
                                    </tr>";
                                    }
                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA008'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                    
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks8' onclick='displayResult8a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks8' onclick='displayResult8b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks8' onclick='displayResult8c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks8' onclick='displayResult8d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks8' onclick='displayResult8e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks8a' id='rs8a'>
                                      <input type='hidden' name='ks8b' id='rs8b'>
                                      <input type='hidden' name='ks8c' id='rs8c'>
                                      <input type='hidden' name='ks8d' id='rs8d'>
                                      <input type='hidden' name='ks8e' id='rs8e'>
                                    </tr>
                                    
                                     <tr>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      
                                    </tr>";
                                    }

                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA009'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"
                                      <tr>
                                      <th colspan='6'>$r[jenis_kuisoner]</th>
                                      <td rowspan='2'><textarea class='span8' name='evaluasi4' rows='5' style='width:600px' placeholder ='Masukkan Saran dan Catatan Waktu dan Jumlah Pertemuan' required></textarea></td>
                                    </tr>
                                    
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks9' onclick='displayResult9a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks9' onclick='displayResult9b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks9' onclick='displayResult9c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks9' onclick='displayResult9d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks9' onclick='displayResult9e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks9a' id='rs9a'>
                                      <input type='hidden' name='ks9b' id='rs9b'>
                                      <input type='hidden' name='ks9c' id='rs9c'>
                                      <input type='hidden' name='ks9d' id='rs9d'>
                                      <input type='hidden' name='ks9e' id='rs9e'>
                                    </tr>
                                    
                                     <tr>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                    </tr>";
                                    }

                                    $tampil = mysql_query("select * from kuisoner_asisten where id_ka = 'KA010'");
                                    while ($r = mysql_fetch_array($tampil)) {
                                        echo"   
                                     <tr>
                                      <th colspan='6'>$r[jenis_kuisoner]</th>
                                      <td rowspan='2'><textarea class='span8' name='evaluasi5' rows='5' style='width:600px' placeholder ='Masukkan Saran dan Catatan Pelayanan dan Manajemen' required></textarea></td>
                                    </tr>
                                    
                                    <tr>
                                      <td scope='col'>$r[kuisoner]</td>
                                      <td align=center scope='col'><input type='radio' name='ks10' onclick='displayResult10a(this.value)' id='optionsRadios' value='1' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks10' onclick='displayResult10b(this.value)' id='optionsRadios' value='2' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks10' onclick='displayResult10c(this.value)' id='optionsRadios' value='3' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks10' onclick='displayResult10d(this.value)' id='optionsRadios' value='4' required></td>
                                      <td align=center scope='col'><input type='radio' name='ks10' onclick='displayResult10e(this.value)' id='optionsRadios' value='5' required></td>
                                      <input type='hidden' name='ks10a' id='rs10a'>
                                      <input type='hidden' name='ks10b' id='rs10b'>
                                      <input type='hidden' name='ks10c' id='rs10c'>
                                      <input type='hidden' name='ks10d' id='rs10d'>
                                      <input type='hidden' name='ks10e' id='rs10e'>
                                    </tr>
                                    
                                     <tr>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                      <td scope='col'>&nbsp;</td>
                                    </tr>
                                    
                                      
                                  </tbody>
                                </table>
                                 <br>
                                    <div class='control-group'>
                                            <div class='controls'>
                                                <button type='submit' class='btn btn-danger pull-right'>Submit</button>
                                            </div>
                                 </div>
                                    
                                    </form>";
                                    }
                                    ?>


                                    <!--<div class='control-group'>
                                               <div class='controls'>
                                                   <button type='submit' class='btn-large table'>Submit</button>
                                               </div>
                                    </div>
                                    -->

                                <br />
                                <!-- <hr /> -->
                                <br />


                        </div>
                    </div><!--/.module-->

                    <br />

                </div>
            </div>
        </section>  <!--/gmap_area -->

        <footer id="footer" class="midnight-blue">
<?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-1.12.3.js"></script>
        <script src="datatable/media/js/jquery.dataTables.min.js"></script>
        <script src="datatable/media/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#table_id').DataTable();
            });
        </script>
        <script>
            function displayResult1a(ks1) {
                document.getElementById("rs1a").value = ks1;
                document.getElementById("rs1b").value = null;
                document.getElementById("rs1c").value = null;
                document.getElementById("rs1d").value = null;
                document.getElementById("rs1e").value = null;
            }
            function displayResult1b(ks1) {
                document.getElementById("rs1a").value = null;
                document.getElementById("rs1b").value = ks1;
                document.getElementById("rs1c").value = null;
                document.getElementById("rs1d").value = null;
                document.getElementById("rs1e").value = null;
            }
            function displayResult1c(ks1) {
                document.getElementById("rs1a").value = null;
                document.getElementById("rs1b").value = null;
                document.getElementById("rs1c").value = ks1;
                document.getElementById("rs1d").value = null;
                document.getElementById("rs1e").value = null;
            }
            function displayResult1d(ks1) {
                document.getElementById("rs1a").value = null;
                document.getElementById("rs1b").value = null;
                document.getElementById("rs1c").value = null;
                document.getElementById("rs1d").value = ks1;
                document.getElementById("rs1e").value = null;
            }
            function displayResult1e(ks1) {
                document.getElementById("rs1a").value = null;
                document.getElementById("rs1b").value = null;
                document.getElementById("rs1c").value = null;
                document.getElementById("rs1d").value = null;
                document.getElementById("rs1e").value = ks1;
            }


            function displayResult2a(ks2) {
                document.getElementById("rs2a").value = ks2;
                document.getElementById("rs2b").value = null;
                document.getElementById("rs2c").value = null;
                document.getElementById("rs2d").value = null;
                document.getElementById("rs2e").value = null;
            }
            function displayResult2b(ks2) {
                document.getElementById("rs2a").value = null;
                document.getElementById("rs2b").value = ks2;
                document.getElementById("rs2c").value = null;
                document.getElementById("rs2d").value = null;
                document.getElementById("rs2e").value = null;
            }
            function displayResult2c(ks2) {
                document.getElementById("rs2a").value = null;
                document.getElementById("rs2b").value = null;
                document.getElementById("rs2c").value = ks2;
                document.getElementById("rs2d").value = null;
                document.getElementById("rs2e").value = null;
            }
            function displayResult2d(ks2) {
                document.getElementById("rs2a").value = null;
                document.getElementById("rs2b").value = null;
                document.getElementById("rs2c").value = null;
                document.getElementById("rs2d").value = ks2;
                document.getElementById("rs2e").value = null;
            }
            function displayResult2e(ks2) {
                document.getElementById("rs2a").value = null;
                document.getElementById("rs2b").value = null;
                document.getElementById("rs2c").value = null;
                document.getElementById("rs2d").value = null;
                document.getElementById("rs2e").value = ks2;
            }


            function displayResult3a(ks3) {
                document.getElementById("rs3a").value = ks3;
                document.getElementById("rs3b").value = null;
                document.getElementById("rs3c").value = null;
                document.getElementById("rs3d").value = null;
                document.getElementById("rs3e").value = null;
            }
            function displayResult3b(ks3) {
                document.getElementById("rs3a").value = null;
                document.getElementById("rs3b").value = ks3;
                document.getElementById("rs3c").value = null;
                document.getElementById("rs3d").value = null;
                document.getElementById("rs3e").value = null;
            }
            function displayResult3c(ks3) {
                document.getElementById("rs3a").value = null;
                document.getElementById("rs3b").value = null;
                document.getElementById("rs3c").value = ks3;
                document.getElementById("rs3d").value = null;
                document.getElementById("rs3e").value = null;
            }
            function displayResult3d(ks3) {
                document.getElementById("rs3a").value = null;
                document.getElementById("rs3b").value = null;
                document.getElementById("rs3c").value = null;
                document.getElementById("rs3d").value = ks3;
                document.getElementById("rs3e").value = null;
            }
            function displayResult3e(ks3) {
                document.getElementById("rs3a").value = null;
                document.getElementById("rs3b").value = null;
                document.getElementById("rs3c").value = null;
                document.getElementById("rs3d").value = null;
                document.getElementById("rs3e").value = ks3;
            }


            function displayResult4a(ks4) {
                document.getElementById("rs4a").value = ks4;
                document.getElementById("rs4b").value = null;
                document.getElementById("rs4c").value = null;
                document.getElementById("rs4d").value = null;
                document.getElementById("rs4e").value = null;
            }
            function displayResult4b(ks4) {
                document.getElementById("rs4a").value = null;
                document.getElementById("rs4b").value = ks4;
                document.getElementById("rs4c").value = null;
                document.getElementById("rs4d").value = null;
                document.getElementById("rs4e").value = null;
            }
            function displayResult4c(ks4) {
                document.getElementById("rs4a").value = null;
                document.getElementById("rs4b").value = null;
                document.getElementById("rs4c").value = ks4;
                document.getElementById("rs4d").value = null;
                document.getElementById("rs4e").value = null;
            }
            function displayResult4d(ks4) {
                document.getElementById("rs4a").value = null;
                document.getElementById("rs4b").value = null;
                document.getElementById("rs4c").value = null;
                document.getElementById("rs4d").value = ks4;
                document.getElementById("rs4e").value = null;
            }
            function displayResult4e(ks4) {
                document.getElementById("rs4a").value = null;
                document.getElementById("rs4b").value = null;
                document.getElementById("rs4c").value = null;
                document.getElementById("rs4d").value = null;
                document.getElementById("rs4e").value = ks4;
            }


            function displayResult5a(ks5) {
                document.getElementById("rs5a").value = ks5;
                document.getElementById("rs5b").value = null;
                document.getElementById("rs5c").value = null;
                document.getElementById("rs5d").value = null;
                document.getElementById("rs5e").value = null;
            }
            function displayResult5b(ks5) {
                document.getElementById("rs5a").value = null;
                document.getElementById("rs5b").value = ks5;
                document.getElementById("rs5c").value = null;
                document.getElementById("rs5d").value = null;
                document.getElementById("rs5e").value = null;
            }
            function displayResult5c(ks5) {
                document.getElementById("rs5a").value = null;
                document.getElementById("rs5b").value = null;
                document.getElementById("rs5c").value = ks5;
                document.getElementById("rs5d").value = null;
                document.getElementById("rs5e").value = null;
            }
            function displayResult5d(ks5) {
                document.getElementById("rs5a").value = null;
                document.getElementById("rs5b").value = null;
                document.getElementById("rs5c").value = null;
                document.getElementById("rs5d").value = ks5;
                document.getElementById("rs5e").value = null;
            }
            function displayResult5e(ks5) {
                document.getElementById("rs5a").value = null;
                document.getElementById("rs5b").value = null;
                document.getElementById("rs5c").value = null;
                document.getElementById("rs5d").value = null;
                document.getElementById("rs5e").value = ks5;
            }


            function displayResult6a(ks6) {
                document.getElementById("rs6a").value = ks6;
                document.getElementById("rs6b").value = null;
                document.getElementById("rs6c").value = null;
                document.getElementById("rs6d").value = null;
                document.getElementById("rs6e").value = null;
            }
            function displayResult6b(ks6) {
                document.getElementById("rs6a").value = null;
                document.getElementById("rs6b").value = ks6;
                document.getElementById("rs6c").value = null;
                document.getElementById("rs6d").value = null;
                document.getElementById("rs6e").value = null;
            }
            function displayResult6c(ks6) {
                document.getElementById("rs6a").value = null;
                document.getElementById("rs6b").value = null;
                document.getElementById("rs6c").value = ks6;
                document.getElementById("rs6d").value = null;
                document.getElementById("rs6e").value = null;
            }
            function displayResult6d(ks6) {
                document.getElementById("rs6a").value = null;
                document.getElementById("rs6b").value = null;
                document.getElementById("rs6c").value = null;
                document.getElementById("rs6d").value = ks6;
                document.getElementById("rs6e").value = null;
            }
            function displayResult6e(ks6) {
                document.getElementById("rs6a").value = null;
                document.getElementById("rs6b").value = null;
                document.getElementById("rs6c").value = null;
                document.getElementById("rs6d").value = null;
                document.getElementById("rs6e").value = ks6;
            }


            function displayResult7a(ks7) {
                document.getElementById("rs7a").value = ks7;
                document.getElementById("rs7b").value = null;
                document.getElementById("rs7c").value = null;
                document.getElementById("rs7d").value = null;
                document.getElementById("rs7e").value = null;
            }
            function displayResult7b(ks7) {
                document.getElementById("rs7a").value = null;
                document.getElementById("rs7b").value = ks7;
                document.getElementById("rs7c").value = null;
                document.getElementById("rs7d").value = null;
                document.getElementById("rs7e").value = null;
            }
            function displayResult7c(ks7) {
                document.getElementById("rs7a").value = null;
                document.getElementById("rs7b").value = null;
                document.getElementById("rs7c").value = ks7;
                document.getElementById("rs7d").value = null;
                document.getElementById("rs7e").value = null;
            }
            function displayResult7d(ks7) {
                document.getElementById("rs7a").value = null;
                document.getElementById("rs7b").value = null;
                document.getElementById("rs7c").value = null;
                document.getElementById("rs7d").value = ks7;
                document.getElementById("rs7e").value = null;
            }
            function displayResult7e(ks7) {
                document.getElementById("rs7a").value = null;
                document.getElementById("rs7b").value = null;
                document.getElementById("rs7c").value = null;
                document.getElementById("rs7d").value = null;
                document.getElementById("rs7e").value = ks7;
            }

            function displayResult8a(ks8) {
                document.getElementById("rs8a").value = ks8;
                document.getElementById("rs8b").value = null;
                document.getElementById("rs8c").value = null;
                document.getElementById("rs8d").value = null;
                document.getElementById("rs8e").value = null;
            }
            function displayResult8b(ks8) {
                document.getElementById("rs8a").value = null;
                document.getElementById("rs8b").value = ks8;
                document.getElementById("rs8c").value = null;
                document.getElementById("rs8d").value = null;
                document.getElementById("rs8e").value = null;
            }
            function displayResult8c(ks8) {
                document.getElementById("rs8a").value = null;
                document.getElementById("rs8b").value = null;
                document.getElementById("rs8c").value = ks8;
                document.getElementById("rs8d").value = null;
                document.getElementById("rs8e").value = null;
            }
            function displayResult8d(ks8) {
                document.getElementById("rs8a").value = null;
                document.getElementById("rs8b").value = null;
                document.getElementById("rs8c").value = null;
                document.getElementById("rs8d").value = ks8;
                document.getElementById("rs8e").value = null;
            }
            function displayResult8e(ks8) {
                document.getElementById("rs8a").value = null;
                document.getElementById("rs8b").value = null;
                document.getElementById("rs8c").value = null;
                document.getElementById("rs8d").value = null;
                document.getElementById("rs8e").value = ks8;
            }

            function displayResult9a(ks9) {
                document.getElementById("rs9a").value = ks9;
                document.getElementById("rs9b").value = null;
                document.getElementById("rs9c").value = null;
                document.getElementById("rs9d").value = null;
                document.getElementById("rs9e").value = null;
            }
            function displayResult9b(ks9) {
                document.getElementById("rs9a").value = null;
                document.getElementById("rs9b").value = ks9;
                document.getElementById("rs9c").value = null;
                document.getElementById("rs9d").value = null;
                document.getElementById("rs9e").value = null;
            }
            function displayResult9c(ks9) {
                document.getElementById("rs9a").value = null;
                document.getElementById("rs9b").value = null;
                document.getElementById("rs9c").value = ks9;
                document.getElementById("rs9d").value = null;
                document.getElementById("rs9e").value = null;
            }
            function displayResult9d(ks9) {
                document.getElementById("rs9a").value = null;
                document.getElementById("rs9b").value = null;
                document.getElementById("rs9c").value = null;
                document.getElementById("rs9d").value = ks9;
                document.getElementById("rs9e").value = null;
            }
            function displayResult9e(ks9) {
                document.getElementById("rs9a").value = null;
                document.getElementById("rs9b").value = null;
                document.getElementById("rs9c").value = null;
                document.getElementById("rs9d").value = null;
                document.getElementById("rs9e").value = ks9;
            }

            function displayResult10a(ks10) {
                document.getElementById("rs10a").value = ks10;
                document.getElementById("rs10b").value = null;
                document.getElementById("rs10c").value = null;
                document.getElementById("rs10d").value = null;
                document.getElementById("rs10e").value = null;
            }
            function displayResult10b(ks10) {
                document.getElementById("rs10a").value = null;
                document.getElementById("rs10b").value = ks10;
                document.getElementById("rs10c").value = null;
                document.getElementById("rs10d").value = null;
                document.getElementById("rs10e").value = null;
            }
            function displayResult10c(ks10) {
                document.getElementById("rs10a").value = null;
                document.getElementById("rs10b").value = null;
                document.getElementById("rs10c").value = ks10;
                document.getElementById("rs10d").value = null;
                document.getElementById("rs10e").value = null;
            }
            function displayResult10d(ks10) {
                document.getElementById("rs10a").value = null;
                document.getElementById("rs10b").value = null;
                document.getElementById("rs10c").value = null;
                document.getElementById("rs10d").value = ks10;
                document.getElementById("rs10e").value = null;
            }
            function displayResult10e(ks10) {
                document.getElementById("rs10a").value = null;
                document.getElementById("rs10b").value = null;
                document.getElementById("rs10c").value = null;
                document.getElementById("rs10d").value = null;
                document.getElementById("rs10e").value = ks10;
            }
        </script>
    </body>
</html>