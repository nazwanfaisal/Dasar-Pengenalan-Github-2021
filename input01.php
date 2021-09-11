<html>
<head>
	<title></title>
</head>
<body>
<h1>FRIED RICE TEQUILA</h1>
<form method="post">
Uang kita = <input type="text" name="uang" required><br>
Harga nasi goreng = <input type="text" name="harga" required><br>
<?php
$uang = @$_POST['uang']; 
$harga = @$_POST['harga']; 
if (($uang && $harga) == "") { 
	echo "<br/> SILAHKAN ISI UANG DAN HARGA !!";
} elseif ($uang == $harga){
	echo "<br/> OKE SILAHKAN MENUNGGU PESANNYA :)";
} elseif ($uang < $harga) { 
	$kurang = $harga - $uang; 
	echo " <br/>UANG ANDA TIDAK CUKUP <b> Rp.$kurang</b>, DASAR MISKIN !!!	";
} else { 
	$lebih = $uang - $harga; 
	echo " <br/> SILAHKAN AMBIL KEMBALIANNYA <b> Rp.$lebih </b>, UANG ANDA BANYAK SEKALEEEEEE !!! :)";
}
?>
<br><input type="submit" value="Proses">
</form>
</body>
</html> 