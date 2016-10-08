<?php

$id = $_POST['kode'];

$kdJur = substr($id, 0, 2);
if($kdJur == "11"){
    $jurusan = "Teknik Elektro";
}
if($kdJur == "12"){
    $jurusan = "Teknik Mesin";
}
if($kdJur == "13"){
    $jurusan = "Teknik Industri";
}
if($kdJur == "14"){
    $jurusan = "Teknik Kimia";
}
if($kdJur == "15"){
    $jurusan = "Teknik Informatika";
}
if($kdJur == "21"){
    $jurusan = "Teknik Arsitektur";
}
if($kdJur == "22"){
    $jurusan = "Teknik Sipil";
}
if($kdJur == "23"){
    $jurusan = "Teknik Geodesi";
}
if($kdJur == "24"){
    $jurusan = "Perencanaan Wilayah dan Kota";
}
if($kdJur == "25"){
    $jurusan = "Teknik Lingkungan";
}
if($kdJur == "31"){
    $jurusan = "Desain Interior";
}
if($kdJur == "32"){
    $jurusan = "Desain Produk";
}
if($kdJur == "33"){
    $jurusan = "Desain Komunikasi Visual";
}

$Lid = strlen($id);
$sandi = $_POST['sandi'];
$pass = $sandi;

if ($Lid == 4) {    // Untuk Dosen
    
    $target_dir = "../images/dosen/";
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fileName ;
    $nama_file = "images/dosen/$fileName";
    $uploadOk = 1;
    
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            include "../koneksi.php";
            mysql_query("INSERT INTO dosen (nid,sandi,email,nama,jk,tgl_lahir,no_telp,alamat,foto) VALUES($id,$pass,'$_POST[email]','$_POST[nama]','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]','$nama_file')");
            $tanggal =  date("Y-m-d h:i:s", time());
            $isi = 'Anda telah terdaftar sebagai user pada sistem Laboratorium Teknik Informatika ITENAS';
            mysql_query("insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$id')");
            echo"
            <script>
                    alert('Terima kasih telah mendaftar. Sekarang anda dapat masuk..!');
                    window.location.href='../index.php';
            </script>";
        } else {
            echo"
            <script>
                    alert('NRP telah terdaptar. Silakan minta password ke teknisi jika lupa...!');
                    window.location.href='../index.php';
            </script>";
        }
    }
} else 
if ($Lid == 9){     // Untuk Mahasiswa
    
    $target_dir = "../images/mahasiswa/";
    $fileName = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fileName ;
    $nama_file = "images/mahasiswa/$fileName";
    $uploadOk = 1;
    
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            include "../koneksi.php";
            mysql_query("INSERT INTO mahasiswa (id,pin,email,nama,jurusan,jk,tgl_lahir,no_telp,alamat,foto) VALUES($id,$pass,'$_POST[email]','$_POST[nama]','$jurusan','$_POST[jk]','$_POST[tgl]','$_POST[telp]','$_POST[alamat]','$nama_file')");
            $tanggal =  date("Y-m-d h:i:s", time()-18000);
            $isi = 'Anda telah terdaftar sebagai user pada sistem Laboratorium Teknik Informatika ITENAS';
            mysql_query("insert into pemberitahuan (tanggal,isi,user) values ('$tanggal', '$isi' , '$id')");
            echo"
            <script>
                    alert('Terima kasih telah mendaftar. Silakan melakukan login!');
                    window.location.href='../index.php';
            </script>";
        } else {
            echo"
            <script>
                    alert('NRP telah terdaftar. Silakan minta password ke teknisi jika lupa...!');
                    window.location.href='../index.php';
            </script>";
        }
    }
}
?>