<!DOCTYPE html>
<html>
<head>
    <title>Data Hotel</title>
</head>
<body>
<h2>Pendataan Tamu Hotel</h2>
<hr>
<form method= "GET" action="perhotelan.php">
</form>
</body>
</html>
<?php
if (isset($_POST['kirim'])){
    $tanggal=$_POST['tanggal'];
    $nama=$_POST['nama'];
    $no=$_POST['no'];
    $type=$_POST['type'];
    $durasi=$_POST['durasi'];

    echo"Tanggal menginap : $tanggal<br>";
    echo"Nama tamu : $nama<br>";
    echo"No Identitas : $no<br>";
    
    $total = $_POST['type'];
    if($total == 'superior'){
        echo"Type Kamar : class1 <br>";
        echo"Durasi : $durasi <br>";
        $totalsup = 850000 * $durasi;
        echo "Total harga : $totalsup <br>";
        if($total > 1700000 ){
            $diskon = $total * (15/100);
            $diskon1 = $total - $diskon;
            echo "Diskon sebesar 15%";
            echo "Total harga diskon : $diskon1";
        }elseif($total > 2500000 ){
            $diskon = $total * (25/100);
            $diskon2 = $total - $diskon;
            echo "Diskon sebesar 25%";
            echo "Total harga diskon : $diskon2 <br>";
        }else{
            echo "Tidak ada diskon";
        }
    }
    
    elseif($total == 'delux'){
        echo"Type Kamar : class2 <br>";
        echo"Durasi : $durasi<br>";
        $totaldel = 950000 * $durasi;
        echo "Total harga : $totaldel <br>";
        if($total > 1700000 ){
            $diskon = $total * (15/100);
            $diskon3 = $total - $diskon;
            echo "Diskon sebesar 15%";
            echo "Total harga diskon : $diskon3";
        }elseif($total > 2500000 ){
            $diskon = $total * (25/100);
            $diskon4 = $total - $diskon;
            echo "Diskon sebesar 25%";
            echo "Total harga diskon : $diskon4 <br>";
        }else{
            echo "Tidak ada diskon";
        }
    }
    
    else{
        echo"Type Kamar :  class3 <br>";
        echo"Durasi : $durasi<br>";
        $totaljs = 1400000 * $durasi;
        echo "Total harga : $totaljs <br>";
        if($total > 1700000 ){
            $diskon = $total * (15/100);
            $diskon5 = $total - $diskon;
            echo "Diskon sebesar 15%";
            echo "Total harga diskon : $diskon5";
        }elseif($total > 2500000 ){
            $diskon = $total * (25/100);
            $diskon6 = $total - $diskon;
            echo "Diskon sebesar 25%";
            echo "Total harga diskon : $diskon6 <br>";
        }else {
            echo "Tidak ada diskon";
        }
}
}
?>