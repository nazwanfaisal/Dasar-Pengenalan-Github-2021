<?php
 echo '1.OUTPUT ARRAY DENGAN MENGGUNAKAN PERINTAH PRINTR()';
$array = [];
$array [] = 'indonesia';
$array [] = 'Malaysia';
$array [] = 'singapura';
$array [] = 'Brunei Darussalam';
$array [] = 'fhlipina';


echo '<pre>';
print_r($array);
echo '<br>'; 


echo "2.OUPUT ARRAY ASSOSIATIF<br>";
echo "<br></br>";

$array = [
    '* ibukota indonesia adalah' => 'Jakarta',
    '* ibukota malayasia adalah' => 'kuala lumpur',
    '* ibukota singapura adalah' => 'singapura',
    '* ibukota Thailand adalah'  => 'Bangkok',
    '* ibukota Filipina adalah'  => 'Manila',
];
 

foreach ($array as $key => $value) {
    echo $key . '' . $value;
    echo '<br>';
    echo '<br>';
}



?>