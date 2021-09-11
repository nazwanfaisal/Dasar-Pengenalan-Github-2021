<head>
    <title>Menghitung Jam Kerja</title>
</head>
<body>
    <h1>SUPERMARKET SWISS</h1>
<form action="gajihan.php" method="POST">
<table>
<tr>
    <td>Jumlah Jam Kerja</td>
    <td>:</td>
    <td><input type="text" name="jam" required></td>
</tr>
            
<tr>
    <td>Golongan Kerja</td>
    <td>:</td>
    <td>
    <input type="radio" name="golongan" value="A" checked>A
    <input type="radio" name="golongan" value="B" checked>B
    <input type="radio" name="golongan" value="C" checked>C
    <input type="radio" name="golongan" value="D" checked>D
    </td>
</tr>
<tr>
    <td></td>
    <td>
    <td><input type="submit" name="Kirim" value="Kirim"></td>
</tr>
</table>
</form>
</body>
</html>