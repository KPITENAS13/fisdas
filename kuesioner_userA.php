<?php
include "koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$ks1a=$_POST['ks1a'];
$ks1b=$_POST['ks1b'];
$ks1c=$_POST['ks1c'];
$ks1d=$_POST['ks1d'];
$ks1e=$_POST['ks1e'];

$ks2a=$_POST['ks2a'];
$ks2b=$_POST['ks2b'];
$ks2c=$_POST['ks2c'];
$ks2d=$_POST['ks2d'];
$ks2e=$_POST['ks2e'];

$ks3a=$_POST['ks3a'];
$ks3b=$_POST['ks3b'];
$ks3c=$_POST['ks3c'];
$ks3d=$_POST['ks3d'];
$ks3e=$_POST['ks3e'];

$ks4a=$_POST['ks4a'];
$ks4b=$_POST['ks4b'];
$ks4c=$_POST['ks4c'];
$ks4d=$_POST['ks4d'];
$ks4e=$_POST['ks4e'];

$ks5a=$_POST['ks5a'];
$ks5b=$_POST['ks5b'];
$ks5c=$_POST['ks5c'];
$ks5d=$_POST['ks5d'];
$ks5e=$_POST['ks5e'];

$ks6a=$_POST['ks6a'];
$ks6b=$_POST['ks6b'];
$ks6c=$_POST['ks6c'];
$ks6d=$_POST['ks6d'];
$ks6e=$_POST['ks6e'];

$ks7a=$_POST['ks7a'];
$ks7b=$_POST['ks7b'];
$ks7c=$_POST['ks7c'];
$ks7d=$_POST['ks7d'];
$ks7e=$_POST['ks7e'];

$ks8a=$_POST['ks8a'];
$ks8b=$_POST['ks8b'];
$ks8c=$_POST['ks8c'];
$ks8d=$_POST['ks8d'];
$ks8e=$_POST['ks8e'];

$ks9a=$_POST['ks9a'];
$ks9b=$_POST['ks9b'];
$ks9c=$_POST['ks9c'];
$ks9d=$_POST['ks9d'];
$ks9e=$_POST['ks9e'];

$ks10a=$_POST['ks10a'];
$ks10b=$_POST['ks10b'];
$ks10c=$_POST['ks10c'];
$ks10d=$_POST['ks10d'];
$ks10e=$_POST['ks10e'];

$evaluasi=$_POST["evaluasi"];
$evaluasi2=$_POST["evaluasi2"];
$evaluasi3=$_POST["evaluasi3"];
$evaluasi4=$_POST["evaluasi4"];
$evaluasi5=$_POST["evaluasi5"];

$subtotal1=$_POST['subtotal1'];
$subtotal2=$_POST['subtotal2'];
$subtotal3=$_POST['subtotal3'];
$subtotal4=$_POST['subtotal4'];
$subtotal5=$_POST['subtotal5'];
$total = $_POST['total'];
$avarage = $_POST['avarage'];



if($ks1a==''){
    $ks1a=0;
}
else{ 
    $ks1a=$ks1a;
}
if($ks1b==''){
    $ks1b=0;
}
else{ 
    $ks1b=$ks1b;
}
if($ks1c==''){
    $ks1c=0;
}
else{ 
    $ks1c=$ks1c;
}
if($ks1d==''){
    $ks1d=0;
}
else{ 
    $ks1d=$ks1d;
}
if($ks1e==''){
    $ks1e=0;
}
else{ 
    $ks1e=$ks1e;
}


if($ks2a==''){
    $ks2a=0;
}
else{ 
    $ks2a=$ks2a;
}
if($ks2b==''){
    $ks2b=0;
}
else{ 
    $ks2b=$ks2b;
}
if($ks2c==''){
    $ks2c=0;
}
else{ 
    $ks2c=$ks2c;
}
if($ks2d==''){
    $ks2d=0;
}
else{ 
    $ks2d=$ks2d;
}
if($ks2e==''){
    $ks2e=0;
}
else{ 
    $ks2e=$ks2e;
}

if($ks3a==''){
    $ks3a=0;
}
else{ 
    $ks3a=$ks3a;
}
if($ks3b==''){
    $ks3b=0;
}
else{ 
    $ks3b=$ks3b;
}
if($ks3c==''){
    $ks3c=0;
}
else{ 
    $ks3c=$ks3c;
}
if($ks3d==''){
    $ks3d=0;
}
else{ 
    $ks3d=$ks3d;
}
if($ks3e==''){
    $ks3e=0;
}
else{ 
    $ks3e=$ks3e;
}

if($ks4a==''){
    $ks4a=0;
}
else{ 
    $ks4a=$ks4a;
}
if($ks4b==''){
    $ks4b=0;
}
else{ 
    $ks4b=$ks4b;
}
if($ks4c==''){
    $ks4c=0;
}
else{ 
    $ks4c=$ks4c;
}
if($ks4d==''){
    $ks4d=0;
}
else{ 
    $ks4d=$ks4d;
}
if($ks4e==''){
    $ks4e=0;
}
else{ 
    $ks4e=$ks4e;
}

if($ks5a==''){
    $ks5a=0;
}
else{ 
    $ks5a=$ks5a;
}
if($ks5b==''){
    $ks5b=0;
}
else{ 
    $ks5b=$ks5b;
}
if($ks5c==''){
    $ks5c=0;
}
else{ 
    $ks5c=$ks5c;
}
if($ks5d==''){
    $ks5d=0;
}
else{ 
    $ks5d=$ks5d;
}
if($ks5e==''){
    $ks5e=0;
}
else{ 
    $ks5e=$ks5e;
}

if($ks6a==''){
    $ks6a=0;
}
else{ 
    $ks6a=$ks6a;
}
if($ks6b==''){
    $ks6b=0;
}
else{ 
    $ks6b=$ks6b;
}
if($ks6c==''){
    $ks6c=0;
}
else{ 
    $ks6c=$ks6c;
}
if($ks6d==''){
    $ks6d=0;
}
else{ 
    $ks6d=$ks6d;
}
if($ks6e==''){
    $ks6e=0;
}
else{ 
    $ks6e=$ks6e;
}

if($ks7a==''){
    $ks7a=0;
}
else{ 
    $ks7a=$ks7a;
}
if($ks7b==''){
    $ks7b=0;
}
else{ 
    $ks7b=$ks7b;
}
if($ks7c==''){
    $ks7c=0;
}
else{ 
    $ks7c=$ks7c;
}
if($ks7d==''){
    $ks7d=0;
}
else{ 
    $ks7d=$ks7d;
}
if($ks7e==''){
    $ks7e=0;
}
else{ 
    $ks7e=$ks7e;
}

if($ks8a==''){
    $ks8a=0;
}
else{ 
    $ks8a=$ks8a;
}
if($ks8b==''){
    $ks8b=0;
}
else{ 
    $ks8b=$ks8b;
}
if($ks8c==''){
    $ks8c=0;
}
else{ 
    $ks8c=$ks8c;
}
if($ks8d==''){
    $ks8d=0;
}
else{ 
    $ks8d=$ks8d;
}
if($ks8e==''){
    $ks8e=0;
}
else{ 
    $ks8e=$ks8e;
}

if($ks9a==''){
    $ks9a=0;
}
else{ 
    $ks9a=$ks9a;
}
if($ks9b==''){
    $ks9b=0;
}
else{ 
    $ks9b=$ks9b;
}
if($ks9c==''){
    $ks9c=0;
}
else{ 
    $ks9c=$ks9c;
}
if($ks9d==''){
    $ks9d=0;
}
else{ 
    $ks9d=$ks9d;
}
if($ks9e==''){
    $ks9e=0;
}
else{ 
    $ks9e=$ks9e;
}

if($ks10a==''){
    $ks10a=0;
}
else{ 
    $ks10a=$ks10a;
}
if($ks10b==''){
    $ks10b=0;
}
else{ 
    $ks10b=$ks10b;
}
if($ks10c==''){
    $ks10c=0;
}
else{ 
    $ks10c=$ks10c;
}
if($ks10d==''){
    $ks10d=0;
}
else{ 
    $ks10d=$ks10d;
}
if($ks10e==''){
    $ks10e=0;
}
else{ 
    $ks10e=$ks10e;
}

?>

 <?php
    session_start();
    include koneksi.php;
    $tahun = getdate();                         
    $subtotal1 = ($ks1a) + ($ks2a) + ($ks3a)  + ($ks4a) + ($ks5a) + ($ks6a) + ($ks7a) + ($ks8a) + ($ks9a) + ($ks10a);
    $subtotal2 = ($ks1b) + ($ks2b) + ($ks3b)  + ($ks4b) + ($ks5b) + ($ks6b) + ($ks7b) + ($ks8b) + ($ks9b) + ($ks10b);
    $subtotal3 = ($ks1c) + ($ks2c) + ($ks3c)  + ($ks4c) + ($ks5c) + ($ks6c) + ($ks7c) + ($ks8c) + ($ks9c) + ($ks10c);
    $subtotal4 = ($ks1d) + ($ks2d) + ($ks3d)  + ($ks4d) + ($ks5d) + ($ks6d) + ($ks7d) + ($ks8d) + ($ks9d) + ($ks10d);
    $subtotal5 = ($ks1e) + ($ks2e) + ($ks3e)  + ($ks4e) + ($ks5e) + ($ks6e) + ($ks7e) + ($ks8e) + ($ks9e) + ($ks10e);   

    $total = $subtotal1+$subtotal2+$subtotal3+$subtotal4+$subtotal5;
    $avarage = $total / 10;

    mysql_query("INSERT INTO ks_nilaiasisten(ks1a,ks1b,ks1c,ks1d,ks1e,
                                                            ks2a,ks2b,ks2c,ks2d,ks2e,
                                                            ks3a,ks3b,ks3c,ks3d,ks3e,
                                                            ks4a,ks4b,ks4c,ks4d,ks4e,
                                                            ks5a,ks5b,ks5c,ks5d,ks5e,
                                                            ks6a,ks6b,ks6c,ks6d,ks6e,
                                                            ks7a,ks7b,ks7c,ks7d,ks7e,
                                                            ks8a,ks8b,ks8c,ks8d,ks8e,
                                                            ks9a,ks9b,ks9c,ks9d,ks9e,
                                                            ks10a,ks10b,ks10c,ks10d,ks10e,
                                                            evaluasi,evaluasi2,evaluasi3,evaluasi4,evaluasi5,
                                                            subtotal1,subtotal2,subtotal3,subtotal4,subtotal5,total,avarage) 
                 VALUES ('$ks1a','$ks1b','$ks1c','$ks1d','$ks1e',
                                        '$ks2a','$ks2b','$ks2c','$ks2d','$ks2e',
                                        '$ks3a','$ks3b','$ks3c','$ks3d','$ks3e',
                                        '$ks4a','$ks4b','$ks4c','$ks4d','$ks4e',
                                        '$ks5a','$ks5b','$ks5c','$ks5d','$ks5e',
                                        '$ks6a','$ks6b','$ks6c','$ks6d','$ks6e',
                                        '$ks7a','$ks7b','$ks7c','$ks7d','$ks7e',
                                        '$ks8a','$ks8b','$ks8c','$ks8d','$ks8e',
                                        '$ks9a','$ks9b','$ks9c','$ks9d','$ks9e',
                                        '$ks10a','$ks10b','$ks10c','$ks10d','$ks10e',
                                        '$evaluasi','$evaluasi2','$evaluasi3','$evaluasi4','$evaluasi5',
                                        '$subtotal1','$subtotal2','$subtotal3','$subtotal4','$subtotal5','$total','$avarage')");
   
    $_SESSION['pesan'] = 'Pengisian Kuisoner Anda Telah Digunakan!';
    header("location:index.php");
?>