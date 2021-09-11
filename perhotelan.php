<!DOCTYPE html>
<html>
<head>
    <title>Data Hotel</title>
</head>
<body>
<h2> HOTEL SENOPARTI </h2>
<hr>
<form method= "POST" action="perhotelan2.php">
 <table>
 <tr>
   <td>Tanggal menginap</td>
   <td>:</td>
   <td><input type='date' name='tanggal'></td>
  </tr>
  <tr>
   <td>Nama Tamu</td>
   <td>:</td>
   <td><input type='text' name='nama'></td>
  </tr>
  <tr>
   <td>No Identitas</td>
   <td>:</td>
   <td><input type='number' name='no'></td>
  </tr>
  <tr>
   <td>Type Kamar</td>
   <td>:</td>
   <td><select name='type'> 
   <option value ='superior'> CLASS 1 </option>
   <option value ='delux'> CLASS 2</option>
   <option value ='junior'> CLASS 3</option></select>
  </tr>
  <tr>
   <td>Durasi Menginap</td>
   <td>:</td>
   <td><input type='text' name='durasi'></td>
  </tr>
  <tr>
   <td></td>
   <td></td>
   <td><input type='submit' name='kirim' value='Simpan'></td>
  </tr>

</body>
</html>