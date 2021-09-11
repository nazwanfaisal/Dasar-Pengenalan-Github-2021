<html>
<head></title>Perhitungan Berat Dan Tinggi Badan</title></head>
<body>
<table border=2 cellpadding=10 frame='void' width='400'><tr><td>
<center>
<form action="" method="POST">
    <table>
    <tr> <td>Tinggi Badan </td>
    <td>: <input type="text" name="tb"> Sentimeter</td>
    </tr>
    <tr><td> Berat Badan</td>
    <td>: <input type="text" name="bb"> Kilogram</td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td><td> :
        <input type="radio" name="jk" value="laki-laki">Laki-laki
        <input type="radio" name="jk" value="perempuan">Perempuan
    </td>
    </tr>
    <tr><td colspan=2><hr></td></tr>
    <tr>
    <td><input type="submit" name="proses" value="proses"></td>
    </tr>
    </table>
    </form>
</td></tr></table>
</body>
</html>

<?php
if (isset($_POST['proses'])){
    $tb=$_POST['tb'];
    $bb=$_POST['bb'];
    $jk=$_POST['jk'];

    if ($jk == 'laki-laki') {
        $ideal = ($tb -100) - (($tb-100) * (10/100));
    }else {
        $ideal = ($tb - 100) - (($tb-100) * (15/100));
    }

    if ($bb == $ideal){
        $hasil = "Berat Badan Anda Ideal";
    }else {
        $hasil = "Berat Badan Anda Tidak Ideal <br>";
    }

echo "
<table border=2 cellpadding=10 frame='void' width='400'><tr><td>
<table>
<tr>
<td>Tinggi Badan</td>
<td>: $tb Sentimeter</td>
</tr>
<tr>
<td>Berat Badan</td>
<td>: $bb Kilogram</td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>: $jk </td>
</tr>

<tr><td colspan=2><hr></td></tr>
<tr>
<td>BB Ideal Anda</td>
<td>: $ideal KG</td>
</tr>
<td>Hasil</td>
<td>: $hasil</td>
</tr>

</table>
</td></tr></table>";    
}
?>