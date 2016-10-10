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
                                <h3><center>EVALUASI & KUISONER PRAKTIKUM LAB TEKNIK INFORMATIKA</center></h3>
                                
                                
                            </div>
                            <div class="module-body">
                                           
                                <table class="table table-striped table-bordered table-condensed">
                                  <thead>
                                    <tr>
                                      <th>PRAKTIKAN</th>
                                      <th width="4%"><center>1</center></th>
                                      <th width="4%"><center>2</center></th>
                                      <th width="4%"><center>3</center></th>
                                      <th width="4%"><center>4</center></th>
                                      <th width="4%"><center>5</center></th>
                                      <th width="50%"><center>Saran dan Catatan</center></th>
                                    </tr>
                                  </thead>
                                  
                                  
                                  <tbody>

                                  <?php
                                  $id = $_GET['id'];
                                  include "koneksi.php";
                                  $tampil = mysql_query("select * from ks_nilaipraktikan where id_ksnilai = '$id'");
                                  while ($r = mysql_fetch_array($tampil)) {

                                    if($r['ks1a']==0){
                                        $r['ks1a']='';
                                    }else{
                                        $r['ks1a']=$r['ks1a'];
                                    }
                                     if($r['ks1b']==0){
                                        $r['ks1b']='';
                                    }else{
                                        $r['ks1b']=$r['ks1b'];
                                    }
                                     if($r['ks1c']==0){
                                        $r['ks1c']='';
                                    }else{
                                        $r['ks1c']=$r['ks1c'];
                                    }
                                     if($r['ks1d']==0){
                                        $r['ks1d']='';
                                    }else{
                                        $r['ks1d']=$r['ks1d'];
                                    }
                                     if($r['ks1e']==0){
                                        $r['ks1e']='';
                                    }else{
                                        $r['ks1e']=$r['ks1e'];
                                    }

                                    if($r['ks2a']==0){
                                        $r['ks2a']='';
                                    }else{
                                        $r['ks2a']=$r['ks2a'];
                                    }
                                     if($r['ks2b']==0){
                                        $r['ks2b']='';
                                    }else{
                                        $r['ks2b']=$r['ks2b'];
                                    }
                                     if($r['ks2c']==0){
                                        $r['ks2c']='';
                                    }else{
                                        $r['ks2c']=$r['ks2c'];
                                    }
                                     if($r['ks2d']==0){
                                        $r['ks2d']='';
                                    }else{
                                        $r['ks2d']=$r['ks2d'];
                                    }
                                     if($r['ks2e']==0){
                                        $r['ks2e']='';
                                    }else{
                                        $r['ks2e']=$r['ks2e'];
                                    }

                                    if($r['ks3a']==0){
                                        $r['ks3a']='';
                                    }else{
                                        $r['ks3a']=$r['ks3a'];
                                    }
                                     if($r['ks3b']==0){
                                        $r['ks3b']='';
                                    }else{
                                        $r['ks3b']=$r['ks3b'];
                                    }
                                     if($r['ks3c']==0){
                                        $r['ks3c']='';
                                    }else{
                                        $r['ks3c']=$r['ks3c'];
                                    }
                                     if($r['ks3d']==0){
                                        $r['ks3d']='';
                                    }else{
                                        $r['ks3d']=$r['ks3d'];
                                    }
                                     if($r['ks3e']==0){
                                        $r['ks3e']='';
                                    }else{
                                        $r['ks3e']=$r['ks3e'];
                                    }
                                    
                                    if($r['ks4a']==0){
                                        $r['ks4a']='';
                                    }else{
                                        $r['ks4a']=$r['ks4a'];
                                    }
                                     if($r['ks4b']==0){
                                        $r['ks4b']='';
                                    }else{
                                        $r['ks4b']=$r['ks1b'];
                                    }
                                     if($r['ks4c']==0){
                                        $r['ks4c']='';
                                    }else{
                                        $r['ks4c']=$r['ks4c'];
                                    }
                                     if($r['ks4d']==0){
                                        $r['ks4d']='';
                                    }else{
                                        $r['ks4d']=$r['ks1d'];
                                    }
                                     if($r['ks4e']==0){
                                        $r['ks4e']='';
                                    }else{
                                        $r['ks4e']=$r['ks4e'];
                                    }

                                    if($r['ks5a']==0){
                                        $r['ks5a']='';
                                    }else{
                                        $r['ks5a']=$r['ks5a'];
                                    }
                                     if($r['ks5b']==0){
                                        $r['ks5b']='';
                                    }else{
                                        $r['ks5b']=$r['ks5b'];
                                    }
                                     if($r['ks5c']==0){
                                        $r['ks5c']='';
                                    }else{
                                        $r['ks5c']=$r['ks5c'];
                                    }
                                     if($r['ks5d']==0){
                                        $r['ks5d']='';
                                    }else{
                                        $r['ks5d']=$r['ks5d'];
                                    }
                                     if($r['ks5e']==0){
                                        $r['ks5e']='';
                                    }else{
                                        $r['ks5e']=$r['ks5e'];
                                    }

                                    if($r['ks6a']==0){
                                        $r['ks6a']='';
                                    }else{
                                        $r['ks6a']=$r['ks6a'];
                                    }
                                     if($r['ks6b']==0){
                                        $r['ks6b']='';
                                    }else{
                                        $r['ks6b']=$r['ks6b'];
                                    }
                                     if($r['ks6c']==0){
                                        $r['ks6c']='';
                                    }else{
                                        $r['ks6c']=$r['ks6c'];
                                    }
                                     if($r['ks6d']==0){
                                        $r['ks6d']='';
                                    }else{
                                        $r['ks6d']=$r['ks6d'];
                                    }
                                     if($r['ks6e']==0){
                                        $r['ks6e']='';
                                    }else{
                                        $r['ks6e']=$r['ks6e'];
                                    }

                                    if($r['ks7a']==0){
                                        $r['ks7a']='';
                                    }else{
                                        $r['ks7a']=$r['ks7a'];
                                    }
                                     if($r['ks7b']==0){
                                        $r['ks7b']='';
                                    }else{
                                        $r['ks7b']=$r['ks7b'];
                                    }
                                     if($r['ks7c']==0){
                                        $r['ks7c']='';
                                    }else{
                                        $r['ks7c']=$r['ks7c'];
                                    }
                                     if($r['ks7d']==0){
                                        $r['ks7d']='';
                                    }else{
                                        $r['ks7d']=$r['ks7d'];
                                    }
                                     if($r['ks7e']==0){
                                        $r['ks7e']='';
                                    }else{
                                        $r['ks7e']=$r['ks7e'];
                                    }

                                    if($r['ks8a']==0){
                                        $r['ks8a']='';
                                    }else{
                                        $r['ks8a']=$r['ks8a'];
                                    }
                                     if($r['ks8b']==0){
                                        $r['ks8b']='';
                                    }else{
                                        $r['ks8b']=$r['ks8b'];
                                    }
                                     if($r['ks8c']==0){
                                        $r['ks8c']='';
                                    }else{
                                        $r['ks8c']=$r['ks8c'];
                                    }
                                     if($r['ks8d']==0){
                                        $r['ks8d']='';
                                    }else{
                                        $r['ks8d']=$r['ks8d'];
                                    }
                                     if($r['ks8e']==0){
                                        $r['ks8e']='';
                                    }else{
                                        $r['ks8e']=$r['ks8e'];
                                    }

                                    if($r['ks9a']==0){
                                        $r['ks9a']='';
                                    }else{
                                        $r['ks9a']=$r['ks1a'];
                                    }
                                     if($r['ks9b']==0){
                                        $r['ks9b']='';
                                    }else{
                                        $r['ks9b']=$r['ks9b'];
                                    }
                                     if($r['ks9c']==0){
                                        $r['ks9c']='';
                                    }else{
                                        $r['ks9c']=$r['ks9c'];
                                    }
                                     if($r['ks9d']==0){
                                        $r['ks9d']='';
                                    }else{
                                        $r['ks9d']=$r['ks9d'];
                                    }
                                     if($r['ks9e']==0){
                                        $r['ks9e']='';
                                    }else{
                                        $r['ks9e']=$r['ks9e'];
                                    }

                                    if($r['ks10a']==0){
                                        $r['ks10a']='';
                                    }else{
                                        $r['ks10a']=$r['ks10a'];
                                    }
                                     if($r['ks10b']==0){
                                        $r['ks10b']='';
                                    }else{
                                        $r['ks10b']=$r['ks10b'];
                                    }
                                     if($r['ks10c']==0){
                                        $r['ks10c']='';
                                    }else{
                                        $r['ks10c']=$r['ks10c'];
                                    }
                                     if($r['ks10d']==0){
                                        $r['ks10d']='';
                                    }else{
                                        $r['ks10d']=$r['ks10d'];
                                    }
                                     if($r['ks10e']==0){
                                        $r['ks10e']='';
                                    }else{
                                        $r['ks10e']=$r['ks10e'];
                                    }

                                   echo"<tr>
                                      <th colspan='6'>A. Modul</th>
                                      <td rowspan='5'>- Praktikan membutuhkan contoh kode program di modul<br>
                                                      - Kurang Penjelasan Coding pada Linefollower                                   
                                     </td>
                                     </tr>

                                      <tr>
                                      <td scope='col'>1. Kualitas Materi</td>
                                      <td scope='col'><center>$r[ks1a]</center></td>
                                      <td scope='col'><center>$r[ks1b]</center></td>
                                      <td scope='col'><center>$r[ks1c]</center></td>
                                      <td scope='col'><center>$r[ks1d]</center></td>
                                      <td scope='col'><center>$r[ks1e]</center></td>
                                      
                                    </tr>
                                    
                                    <tr>
                                      <td scope='col'>2. Kuantitas Materi</td>
                                      <td scope='col'><center>$r[ks2a]</center></td>
                                      <td scope='col'><center>$r[ks2b]</center></td>
                                      <td scope='col'><center>$r[ks2c]</center></td>
                                      <td scope='col'><center>$r[ks2d]</center></td>
                                      <td scope='col'><center>$r[ks2e]</center></td>
                                      
                                    
                                    </tr>
                                    <tr>
                                      <td scope='col'>3. Kualitas Soal Latihan</td>
                                      <td scope='col'><center>$r[ks3a]</center></td>
                                      <td scope='col'><center>$r[ks3b]</center></td>
                                      <td scope='col'><center>$r[ks3c]</center></td>
                                      <td scope='col'><center>$r[ks3d]</center></td>
                                      <td scope='col'><center>$r[ks3e]</center></td>
                                     
                                    </tr>
                                    <tr>
                                      <td scope='col'>4. Kuantitas Soal Latihan</td>
                                      <td scope='col'><center>$r[ks4a]</center></td>
                                      <td scope='col'><center>$r[ks4b]</center></td>
                                      <td scope='col'><center>$r[ks4c]</center></td>
                                      <td scope='col'><center>$r[ks4d]</center></td>
                                      <td scope='col'><center>$r[ks4e]</center></td>
                                     
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
                                    
                                    <tr>
                                      <th colspan='6'>B. Peralatan dan Fasilitas</th>
                                      <td rowspan='3'>- Pengecekan Robot<br>
                                                      - Daya Listrik tidak kuat (Listrik mati jika kedua AC dinyalakan)
                                     </td>
                                    </tr>
                                    <tr>
                                      <td scope='col'>5. Kualitas Peralatan</td>
                                      <td scope='col'><center>$r[ks5a]</center></td>
                                      <td scope='col'><center>$r[ks5b]</center></td>
                                      <td scope='col'><center>$r[ks5c]</center></td>
                                      <td scope='col'><center>$r[ks5d]</center></td>
                                      <td scope='col'><center>$r[ks5e]</center></td>
                                      
                                     
                                    </tr>
                                    <tr>
                                      <td scope='col'>6. Kuantitas Peralatan</td>
                                      <td scope='col'><center>$r[ks6a]</center></td>
                                      <td scope='col'><center>$r[ks6b]</center></td>
                                      <td scope='col'><center>$r[ks6c]</center></td>
                                      <td scope='col'><center>$r[ks6d]</center></td>
                                      <td scope='col'><center>$r[ks6e]</center></td>
                                      
                                    
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
                                      <tr>
                                      <th colspan='6'>C. Asisten</th>
                                      <td rowspan='3'></td>
                                    </tr>
                                    <tr>
                                      <td scope='col'>7. Kualitas Asisten</td>
                                      <td scope='col'><center>$r[ks7a]</center></td>
                                      <td scope='col'><center>$r[ks7b]</center></td>
                                      <td scope='col'><center>$r[ks7c]</center></td>
                                      <td scope='col'><center>$r[ks7d]</center></td>
                                      <td scope='col'><center>$r[ks7e]</center></td>
                                      
                                     
                                    </tr>
                                    <tr>
                                      <td scope='col'>8. Kuantitas Asisten</td>
                                      <td scope='col'><center>$r[ks8a]</center></td>
                                      <td scope='col'><center>$r[ks8b]</center></td>
                                      <td scope='col'><center>$r[ks8c]</center></td>
                                      <td scope='col'><center>$r[ks8d]</center></td>
                                      <td scope='col'><center>$r[ks8e]</center></td>
                                      
                                    
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
                                      <tr>
                                      <th colspan='6'>D. Waktu dan Jumlah Pertemuan</th>
                                      <td rowspan='2'></td>
                                    </tr>
                                    
                                    <tr>
                                      <td scope='col'>9. Kuantitas</td>
                                      <td scope='col'><center>$r[ks9a]</center></td>
                                      <td scope='col'><center>$r[ks9b]</center></td>
                                      <td scope='col'><center>$r[ks9c]</center></td>
                                      <td scope='col'><center>$r[ks9d]</center></td>
                                      <td scope='col'><center>$r[ks9e]</center></td>
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
                                        
                                     <tr>
                                      <th colspan='6'>E. Pelayanan dan Manajemen</th>
                                      <td rowspan='2'></td>
                                    </tr>
                                    
                                    <tr>
                                      <td scope='col'>10. Kualitas</td>
                                      <td scope='col'><center>$r[ks10a]</center></td>
                                      <td scope='col'><center>$r[ks10b]</center></td>
                                      <td scope='col'><center>$r[ks10c]</center></td>
                                      <td scope='col'><center>$r[ks10d]</center></td>
                                      <td scope='col'><center>$r[ks10e]</center></td>
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

                                    <tr>
                                 
                                      <th scope='col'>Sub Total</th>
                                      <th scope='col'><center>$r[subtotal1]</center></th>
                                      <th scope='col'><center>$r[subtotal2]</center></th>
                                      <th scope='col'><center>$r[subtotal3]</center></th>
                                      <th scope='col'><center>$r[subtotal4]</center></th>
                                      <th scope='col'><center>$r[subtotal5]</center></th>
                                      <th rowspan='3'><center>Poin $r[total]/50</center></th>
                                    </tr>
                                     <tr>
                                      <th scope='col'>Total</th>
                                      <th colspan='5'><center>$r[total]</center></th>
                                    </tr>
                                     <tr>
                                      <th scope='col'>Rata-rata</th>
                                      <th colspan='5'><center>$r[avarage]</center></th>
                            
                                    </tr>
                                     </tbody>
                                </table>
                                <br>";
                                }
                                echo "<div class='control-group'>";
                                $tampil2 = mysql_query("select count(*) as total from ks_nilaipraktikan");
                                $r2 = mysql_fetch_array($tampil2);
                                if ($id != $r2['total']){
                                    $id++;
                                    echo"
                                        <div class='control pull-right'>
                                            <a href='test.php?id=$id' type='submit' class='btn btn-success'>Next</a>  
                                        </div>
                                    "; 
                                }else{
                                    echo"
                                        <div class='control pull-right'>
                                            <button type='submit' class='btn btn-success' disabled>Next</button>  
                                        </div>
                                    "; 
                                }
                                if ($_GET['id'] != 1){
                                    $id = $id - 2;
                                    echo"
                                        <div class='control pull-left'>
                                            <a href='test.php?id=$id' type='submit' class='btn btn-success'>Prev</a>  
                                        </div>
                                    "; 
                                }else{
                                    echo"
                                        <div class='control pull-left'>
                                            <button type='submit' class='btn btn-success' disabled>Prev</button>  
                                        </div>
                                    "; 
                                }
                                echo "</div>";
                                    ?>                                  
                                  </tbody>
                                </table>
                                <br>
                                 

                            
                                <!-- <hr /> -->
                                <br />

                            
                            </div>

                            
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

    </body>
</html>