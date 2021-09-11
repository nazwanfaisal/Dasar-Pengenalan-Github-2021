<?php
    $bulan = "Mei";
    $bayar = 5000000;
    $potong =  $bayar -  ($bayar *(10/100));

if ($bulan == "Mei") {
    echo "Daftar pada bulan $bulan <br>";
    echo "Anda mendapat diskon 30% <br>";
    echo "Biaya yang harus dibayar = $potong";
    
}  elseif ($bulan == "juni") {
   echo "Daftar pada $bulan <br>";
   echo "Anda mendapat diskon 20%!<br>";
   
} elseif ($bulan == "juli") {
    echo "Daftar pada $bulan <br>";
    echo "Anda mendapat diskon 10%!<br>";

} else {
    echo "Anda tidak dapat diskon!!!";
}


?>