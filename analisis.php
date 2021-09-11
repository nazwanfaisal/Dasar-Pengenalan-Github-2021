<?php
   
  echo "<center>PROGRAM BANGUN DATAR</center>";
   
   $juan = [
       'Luas' => [
           'segitiga' => [
               $segitiga[] = 'L = 1/2 x a x t. ',
               $segitiga[] = 'alas = 7',
               $segitiga[] = 'tinggi = 9',
               $segitiga[] = 'maka luas nya adalah 63'
           ],
           'persegi' => [
            $persegi[] = 'L = s x s ',
            $persegi[] = 'sisi = 5',
            $persegi[] = 'sisi = 9',
            $persegi[] = 'maka luas nya adalah 25'
        ],
           'persegi panjang' => [
               $persegipanjang[] = 'L = p x 1 ',
               $persegipanjang[] = 'panjang = 15',
               $persegipanjang[] = 'Lebar = 10',
               $persegipanjang[] = 'maka luas nya adalah 150'
        ],
        'lingkaran' => [
            $lingkaran[] = 'L= π × r² ',
            $lingkaran[] = 'phi (22/7 atau 3,14)',
            $lingkaran[] = 'jari jari = 14 cm',
            $lingkaran[] = 'maka luas nya adalah 616cm2'
     
        ],
        ]
    ];
        echo "<pre>";
        print_r($juan);

 
?>