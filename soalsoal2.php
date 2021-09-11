<?php
    
    $nama=@$_POST['nama'];
    $kls=@$_POST['kelas'];
    $jurusan=@$_POST['jurusan'];
    $jk=@$_POST['jk'];
    $tugas1=@$_POST['tugas1'];
    $tugas2=@$_POST['tugas2'];
    $tugas3=@$_POST['tugas3'];
    $uts=@$_POST['uts'];
    $uas=@$_POST['uas'];

    $total =(($tugas1 + $tugas2 + $tugas3)/3 * 0.2) + ($uts * 0.3) + ($uas * 0.5);

    if ($tugas1 >= 75) {
        $l1 = "lulus";
    } else{
        $l1 = "tidak lulus";
    }
    if ($tugas2 >= 75) {
        $l2 = "lulus";
    } else{
        $l2 = "tidak lulus";
    }
    if ($tugas3 >= 75) {
        $l3 = "lulus";
    } else{
        $l3 = "tidak lulus";
    }
    if ($uts >= 75) {
        $l4 = "lulus";
    } else{
        $l4 = "tidak lulus";
    }
    if ($uas >= 75) {
        $l5 = "lulus";
    } else{
        $l5 = "tidak lulus";
    }
    if ($total >= 75) {
        $l6 = "lulus";
    } else{
        $l6 = "tidak lulus";
    }

    if ($tugas1 >= 80) {   $i1 = "A";
    }elseif($tugas1 >= 60){ $i1 = "B";
    }elseif($tugas1 >= 40){ $i1 = "C";
    }elseif($tugas1 >= 20){ $i1 = "D";
    }elseif($tugas1 >= 0){  $i1 = "E";
    }
    if ($tugas2 >= 80) {   $i2 = "A";
    }elseif($tugas2 >= 60){ $i2 = "B";
    }elseif($tugas2 >= 40){ $i2 = "C";
    }elseif($tugas2 >= 20){ $i2 = "D";
    }elseif($tugas2 >= 0) { $i2 = "E";
    }
    if ($tugas3 >= 80) {   $i3 = "A";
    }elseif($tugas3 >= 60){ $i3 = "B";
    }elseif($tugas3 >= 40){ $i3 = "C";
    }elseif($tugas3 >= 20){ $i3 = "D";
    }elseif($tugas3 >= 0) { $i3 = "E";
    }
    if ($uts >= 80) {   $i4 = "A";
    }elseif($uts >= 60){ $i4 = "B";
    }elseif($uts >= 40){ $i4 = "C";
    }elseif($uts >= 20){ $i4 = "D";
    }elseif($uts >= 0){  $i4 = "E";
    }
    if ($uas >= 80) {   $i5 = "A";
    }elseif($uas >= 60){ $i5 = "B";
    }elseif($uas >= 40){ $i5 = "C";
    }elseif($uas >= 20){ $i5 = "D";
    }elseif($uas >= 0){  $i5 = "E";
    }
    if ($total >= 80) {   $i6 = "A";
    }elseif($total >= 60){ $i6 = "B";
    }elseif($total >= 40){ $i6 = "C";
    }elseif($total >= 20){ $i6 = "D";
    }elseif($total >= 0) { $i6 = "E";
    }

    echo "
        <table width=400>
        <tr>
        <td>Nama Siswa</td>
        <td colspan=3>: $nama</td>
        </tr>
        <tr>
        <td>Kelas</td>
        <td>: $kls</td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td>
        <td>: $jk</td>
        </tr>
        <tr>
        <td>Nilai Tugas 1</td>
        <td>: $tugas1</td>
        <td>: $i1</td>
        <td>: $l1</td>
        </tr>
        <tr>
        <td>Nilai Tugas 2</td>
        <td>: $tugas2</td>
        <td>: $i2</td>
        <td>: $l2</td>
        </tr><tr>
        <td>Nilai Tugas 3</td>
        <td>: $tugas3</td>
        <td>: $i3</td>
        <td>: $l3</td>
        </tr>
        <tr>
        <td>Nilai UTS</td>
        <td>: $uts</td>
        <td>: $i4</td>
        <td>: $l4</td>
        </tr>
        <tr>
        <td>Nilai UAS</td>
        <td>: $uas</td>
        <td>: $i5</td>
        <td>: $l5</td>
        </tr>
        <tr>
        <td>Total Nilai</td>
        <td>: $total</td>
        <td>: $i6</td>
        <td>: $l6</td>
        </tr>"
?>        