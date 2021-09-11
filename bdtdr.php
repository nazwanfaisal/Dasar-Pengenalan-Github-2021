<!DOCTYPE html>
<html lang="en">
<body>
<tr>
<?php
$nis= @$_POST['NIS']; 
$Nama= @$_POST['Nama'];
$jurusan= @$_POST['jurusan'];
$Tempat= @$_POST['Tempat'];
$Tgl= @$_POST['Tgl'];
$Bln= @$_POST['Bln'];
$Thn= @$_POST['Thn'];
$JK= @$_POST['JK'];
$alamat= @$_POST['alamat'];
echo "<td> NIS      : $nis </td><br>";
echo "<td>Nama     : $Nama</td><br>";
echo "<td>Jurusan  : $jurusan</td><br>";
echo "<td>Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn</td><br>";
echo "<td>Jenis Kelamin : $JK</td><br>";
echo "<td>Alamat : $alamat</td><br>";
?>
</tr>
</table>
</body>
</html>