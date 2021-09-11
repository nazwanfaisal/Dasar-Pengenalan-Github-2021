<?php
echo "RESTORAN VINTAGE<br>";
echo "DISKON 20% SETIAP PEMBELIAN LEBIH DARI Rp.150.000 <br>";
echo "PROMO PPKM BOSSS!!! <br>";
echo "<br>";

$food = "makanan";
$makanan = "nasigoreng";
$jma = 50;

if ($food == "makanan") {

    if ($makanan == "nasigoreng") {
        $harga = 20000;
        $jumlah = $jma * $harga;
        $bayar =  $jumlah - ($jumlah *(20/100));
        echo "makanan: nasi goreng <br>";
        echo "harga: Rp.$harga <br>";
        echo "pesan: $jma<br>";
        echo "total harga: Rp.$jumlah<br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "pemesanan lebih dari rp.150.000 <br>";
            echo "mendapat diskon 20% <br>";
            echo "total: rp.$bayar";
        }
    } elseif ($makanan == "ayamgoreng") {
        $harga = 13000;
        $jumlah = $jma * $harga;
        $bayar =  $jumlah - ($jumlah *(20/100));
        echo "makanan: ayam goreng <br>";
        echo "harga: Rp.$harga <br>";
        echo "pesan: $jma<br>";
        echo "total harga: Rp.$jumlah<br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "pemesanan lebih dari rp.150.000 <br>";
            echo "mendapat diskon 20% <br>";
            echo "total: rp.$bayar";
        }
    } elseif ($makanan == "ayambakar") {
        $harga = 15000;
        $jumlah = $jma * $harga;
        $bayar =  $jumlah - ($jumlah *(20/100));
        echo "makanan: ayam bakar <br>";
        echo "harga: Rp.$harga <br>";
        echo "pesan: $jma<br>";
        echo "total harga: Rp.$jumlah<br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "pemesanan lebih dari rp.150.000 <br>";
            echo "mendapat diskon 20% <br>";
            echo "total: rp.$bayar";
        }
    } elseif ($makanan == "nasiputih") {
        $harga = 5000;
        $jumlah = $jma * $harga;
        $bayar =  $jumlah - ($jumlah *(20/100));
        echo "makanan: nasi putih <br>";
        echo "harga: Rp.$harga <br>";
        echo "pesan: $jma<br>";
        echo "total harga: Rp.$jumlah<br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "pemesanan lebih dari rp.150.000 <br>";
            echo "mendapat diskon 20% <br>";
            echo "total: rp.$bayar";
        }
    } else {
        echo "Makanan tidak tersedia";
    }
} elseif ($food == "minuman") {

    if ($makanan == "jusjeruk") {
        $harga = 8000;
        $jumlah = $jma * $harga;
        $bayar =  $jumlah - ($jumlah *(20/100));
        echo "makanan: jus jeruk <br>";
        echo "harga: Rp.$harga <br>";
        echo "pesan: $jma<br>";
        echo "total harga: Rp.$jumlah<br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "pemesanan lebih dari rp.150.000 <br>";
            echo "mendapat diskon 20% <br>";
            echo "total: rp.$bayar";
        }
    } elseif ($makanan == "jusalpukat") {
        $harga = 10000;
        $jumlah = $jma * $harga;
        $bayar =  $jumlah - ($jumlah *(20/100));
        echo "makanan: jusa lpukat <br>";
        echo "harga: Rp.$harga <br>";
        echo "pesan: $jma<br>";
        echo "total harga: Rp.$jumlah<br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "pemesanan lebih dari rp.150.000 <br>";
            echo "mendapat diskon 20% <br>";
            echo "total: rp.$bayar";
        }
    } elseif ($makanan == "airmineral") {
        $harga = 7000;
        $jumlah = $jma * $harga;
        $bayar =  $jumlah - ($jumlah *(20/100));
        echo "makanan: air mineral <br>";
        echo "harga: Rp.$harga <br>";
        echo "pesan: $jma<br>";
        echo "total harga: Rp.$jumlah<br>";
        if ($jumlah >= 150000) {
            echo "<br>";
            echo "pemesanan lebih dari rp.150.000 <br>";
            echo "mendapat diskon 20% <br>";
            echo "total: rp.$bayar";
        }
    } else {
        echo "Minuman tidak tersedia";
    }
}
    

    
    


?>