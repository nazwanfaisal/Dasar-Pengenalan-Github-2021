<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="Ie=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Penilaian</title>
 </head>
 <body>
    <form action="soalsoal2.php" method="post" name="input">
    <h2>HASIL PENILAIAN SATU SEMESTER</h2><br>
    <fieldset>
    <table>
    <tr>
    <td>nama siswa</td>
    <td>:</td>
    <td><input type="text" name="nama" required> <br></td>
</tr>
<tr>
    <td>Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="">
        <option name ="Kelas" value="">kelas</option>
        <option name ="Kelas" value="">X</option>
        <option name ="Kelas" value="">XI</option>
        <option name ="Kelas" value="">XII</option>
    </select> <br></td>
</tr>

<tr>
   <td>Jenis Kelamin</td>
   <td>:</td>
   <td><input type="radio" name="jk" value="Laki-laki" checked> laki-laki
   <input type="radio" name="jk" value="Perempuan" checked> Perempuan<br>
</tr>

<tr>
  <td>Nilai tugas 1</td>
  <td>:</td>
  <td><input type="text" name="tgs1" id=""> <br></td>
</tr>

<tr>
  <td>Nilai tugas 2</td>
  <td>:</td>
  <td><input type="text" name="tgs2" id=""> <br></td>
</tr>

<tr>
  <td>Nilai tugas 3</td>
  <td>:</td>
  <td><input type="text" name="tgs3" id=""> <br></td>
</tr>

<tr>
  <td>Nilai UTS</td>
  <td>:</td>
  <td><input type="text" name="uts" id=""> <br></td>
</tr>

<tr>
  <td>Nilai UAS</td>
  <td>:</td>
  <td><input type="text" name="uas" id=""> <br></td>
</tr>

</table>

<input type="reset" value="Reset">
<input type="submit" name="Kirim" value="Kirim">
</fieldset>
</form>
</body>
</html>






