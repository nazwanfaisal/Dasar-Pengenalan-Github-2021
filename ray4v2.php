<!DOCTYPE html>
<html>
<head>
<title>Cetak Nilai</title>
<style>
</style>
</head>
<?php
if(isset($_POST['cetak'])){
    $nama = $_POST ['nama'];
    $nis = $_POST ['nis'];
    $nilai1 = $_POST ['nilai1'];
    $nilai2 = $_POST ['nilai2'];
    $nilai3 = $_POST ['nilai3'];
    $nilai4 = $_POST ['nilai4'];
    $nilai5 = $_POST ['nilai5'];
    $nilai6 = $_POST ['nilai6'];
    $nilai7 = $_POST ['nilai7'];
    $nilai8 = $_POST ['nilai8'];
    $nilai9 = $_POST ['nilai9'];
    $nilai10 = $_POST ['nilai10'];
}
?>
<fieldset border="3">
<body><h2 align="center">Hasil Cetak Nilai Siswa<br>SMK ASSALAAM BANDUNG<br>Thn 2021/2022</h2>
<form method = "POST" action= "soalray4.php">
<br></br>
<center>
<table border="1">
<tr>Nama : </tr>    
<tr><?php echo $_POST['nama']; ?></tr>
<br>
<tr>NIS : </tr>
<tr><?php echo $_POST['nis']; ?></tr>
<br>
<br>
<tr>
<td>No</td>
<td colspan="10" align="center">Mata Pelajaran</td>
<td>Nilai</td>
</tr>
<tr>
<td align="center">1</td>
<td colspan="10">Pendidikan Agama Islam</td>
<td><?php
if ($nilai1 > 100){
    echo "ERROR";
} elseif($nilai1 >= 85){
    echo "A";
} elseif($nilai1 >= 70){
    echo "B";
} elseif($nilai1 >= 60){
    echo "C";
} elseif($nilai1 >= 40){
    echo "D";
} elseif($nilai1 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">2</td>
<td colspan="10">PPKN</td>
<td><?php
if ($nilai2 > 100){
    echo "ERROR";
} elseif($nilai2 >= 85){
    echo "A";
} elseif($nilai2 >= 70){
    echo "B";
} elseif($nilai2 >= 60){
    echo "C";
} elseif($nilai2 >= 40){
    echo "D";
} elseif($nilai2 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">3</td>
<td colspan="10">Bahasa Indonesia</td>
<td><?php 
if ($nilai3 > 100){
    echo "ERROR";
} elseif($nilai3 >= 85){
    echo "A";
} elseif($nilai3 >= 70){
    echo "B";
} elseif($nilai3 >= 60){
    echo "C";
} elseif($nilai3 >= 40){
    echo "D";
} elseif($nilai3 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">4</td>
<td colspan="10">Matematika</td>
<td><?php
if ($nilai4 > 100){
    echo "ERROR";
} elseif($nilai4 >= 85){
    echo "A";
} elseif($nilai4 >= 70){
    echo "B";
} elseif($nilai4 >= 60){
    echo "C";
} elseif($nilai4 >= 40){
    echo "D";
} elseif($nilai4 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">5</td>
<td colspan="10">Bahasa Inggris</td>
<td><?php
if ($nilai5 > 100){
    echo "ERROR";
} elseif($nilai5 >= 85){
    echo "A";
} elseif($nilai5 >= 70){
    echo "B";
} elseif($nilai5 >= 60){
    echo "C";
} elseif($nilai5 >= 40){
    echo "D";
} elseif($nilai5 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">6</td>
<td colspan="10">Produk Kreatif Dan Komunikatif</td>
<td><?php 
if ($nilai6 > 100){
    echo "ERROR";
} elseif($nilai6 >= 85){
    echo "A";
} elseif($nilai6 >= 70){
    echo "B";
} elseif($nilai6 >= 60){
    echo "C";
} elseif($nilai6 >= 40){
    echo "D";
} elseif($nilai6 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">7</td>
<td colspan="10">Al Qur`an</td>
<td><?php 
if ($nilai7 > 100){
    echo "ERROR";
} elseif($nilai7 >= 85){
    echo "A";
} elseif($nilai7 >= 70){
    echo "B";
} elseif($nilai7 >= 60){
    echo "C";
} elseif($nilai7 >= 40){
    echo "D";
} elseif($nilai7 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">8</td>
<td colspan="10">Bimbingan Konseling</td>
<td><?php
if ($nilai8 > 100){
    echo "ERROR";
} elseif($nilai8 >= 85){
    echo "A";
} elseif($nilai8 >= 70){
    echo "B";
} elseif($nilai8 >= 60){
    echo "C";
} elseif($nilai8 >= 40){
    echo "D";
} elseif($nilai8 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">9</td>
<td colspan="10">Produktif RPL</td>
<td><?php
if ($nilai9 > 100){
    echo "ERROR";
} elseif($nilai9 >= 85){
    echo "A";
} elseif($nilai9 >= 70){
    echo "B";
} elseif($nilai9 >= 60){
    echo "C";
} elseif($nilai9 >= 40){
    echo "D";
} elseif($nilai9 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
<tr>
<td align="center">10</td>
<td colspan="10">Produktif TKJ</td>
<td><?php
if ($nilai10 > 100){
    echo "ERROR";
} elseif($nilai10 >= 85){
    echo "A";
} elseif($nilai10 >= 70){
    echo "B";
} elseif($nilai10 >= 60){
    echo "C";
} elseif($nilai10 >= 40){
    echo "D";
} elseif($nilai10 >= 0){
    echo "E";
} else{
    echo "ERROR";
}
?></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>