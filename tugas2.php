<html>
<head></title></title></head>
<h1>Ketentuan Masuk Mall</h1>
<body>
<table border=2 cellpadding=10 frame='void' width='400'><tr><td>
<center>
<form action="" method="POST">
    <table>
    <tr> <td>Nama Anda </td>
    <td>: <input type="text" name="nm"><br></td>
    </tr>
    <tr><td> Umur</td>
    <td>: <input type="text" name="ur"><br></td>
    </tr>
    <tr>
    <td>Memiliki Kartu Vaksin</td>
    <td> :
        <input type="radio" name="vak" value="ya">Ya
        <input type="radio" name="vak" value="tidak">Tidak
    </td>
    </tr>
    <tr><td colspan=2><hr></td></tr>
    <tr>
    <td><input type="submit" name="kirim" value="kirim"></td>
    </tr>
    </table>
    </form>
</td></tr></table>
</body>
</html>

<?php
if (isset($_POST['kirim'])){
    $nama = $_POST['nm'];
    $umur = $_POST['ur'];
    $vak = $_POST['vak'];

    if ($umur >= 12 && $umur <= 50 && $vak == "ya") {
        $pesan = "silahkan melanjutkan";
    }else{
        $pesan = "Maaf untuk melanjutkan silahkan ke situs<br>
        <a href=https://pedulilindungi.id/>pedulilindungi<a><br>
        untuk mendapatkan kartu vaksin terlebih dahulu.";
    }

    echo "
    <table border=2 cellpadding=10 frame='void' width='400'><tr><td>
    <table>
    <tr>
    <td>Nama Anda</td>
    <td>: $nama</td>
    </tr>
    <tr>
    <td>Umur</td>
    <td>: $umur</td>
    </tr>
    <tr>
    <td width=150>Memiliki Kartu Vaksin</td>
    <td>: $vak </td>
    </tr>
    <tr><td colspan=2><hr></td></tr>
    <tr>
    <td colspan=2><center><b>$pesan</td>
    </tr>
    </table>
    </td></tr></table>";
}
?>