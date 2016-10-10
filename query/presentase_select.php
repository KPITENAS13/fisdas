<?php
$periode = $_POST['periode'];
$praktikum = $_POST['praktikum'];
$connect = mysqli_connect("localhost", "root", "", "inventaris");
$output = '';
$sql = "SELECT * FROM presentase_nilai WHERE periode='".$periode."' AND praktikum='".$praktikum."'";
$result = mysqli_query($connect, $sql);
$output .= ''
        . '<div class="table-responsive">'
        . '     <table class="table table-bordered table-striped" style="width:100%;" id="tabel3">'
        . '         <tr align="center">'
        . '             <th>Tugas (%)</th>'
        . '             <th>Nilai Absensi (%)</th>'
        . '             <th>Nilai UTS (%)</th>'
        . '             <th>Nilai UAS (%)</th>'
        . '             <th>Nilai Lain-lain (%)</th>'
        . '             <th>Aksi</th>'
        . '         </tr>';
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
        $output .= '<tr align="center">'
                . ' <td style="background-color: #FFF"  class="pnh" data-id1="'.$row["id"].'" contenteditable>'.$row["nilai_harian"].'</td>'
                . ' <td style="background-color: #FFF"  class="pabs" data-id2="'.$row["id"].'" contenteditable>'.$row["absensi"].'</td>'
                . ' <td style="background-color: #FFF"  class="puts" data-id3="'.$row["id"].'" contenteditable>'.$row["uts"].'</td>'
                . ' <td style="background-color: #FFF"  class="puas" data-id4="'.$row["id"].'" contenteditable>'.$row["uas"].'</td>'
                . ' <td style="background-color: #FFF"  class="ppro" data-id5="'.$row["id"].'" contenteditable>'.$row["project"].'</td>'
                . ' <td><button class="btn btn-danger btn-xs" name="pre_delete" id="pre_delete" data-id6="'.$row["id"].'"><span class="glyphicon glyphicon-remove"></span></button></td>'
                . '</tr>';
    }
}else{
    $output .= '<tr align="center">'
            . '     <td id="pnh" contenteditable></td>'
            . '     <td id="pabs" contenteditable></td>'
            . '     <td id="puts" contenteditable></td>'
            . '     <td id="puas" contenteditable></td>'
            . '     <td id="ppro" contenteditable></td>'
            . '     <td><button name="pre_add" id="pre_add" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-pencil"></span> Proses</button></td>'
            . ' </tr>';
}
$output .= '</table>'
        . '</div>';
echo $output;
?>