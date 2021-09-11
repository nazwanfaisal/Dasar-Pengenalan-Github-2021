<?php
echo "<h2>Gaji Karyawan</h2>";
if (isset( $_POST["jam"])) {
}
$jam = @$_POST ['jam'];
    echo "Jam Kerja Anda : $jam <br>";
    $golongan = @$_POST['golongan'];
    echo "Golongan Kerja Anda : $golongan<br>";
    $A = 10000;
    $B = 20000;
    $C = 30000;
    $D = 40000;
switch ($golongan) {
case 'A':
    $gaji=$jam*$A;
    echo "Gaji anda adalah Rp. $gaji";
break;
case 'B':
    $gaji=$jam*$B;
    echo "Gaji anda adalah Rp. $gaji";
break;
case 'C':
    $gaji=$jam*$C;
    echo "Gaji anda adalah Rp. $gaji";
break;
case 'D';
    $gaji=$jam*$D;
    echo "Gaji anda adalah Rp. $gaji";
break;
}
?>