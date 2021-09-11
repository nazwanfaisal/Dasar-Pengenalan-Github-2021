<?php 
 $perusahaan = [
     'nama' => 'Nazwan Faisal Ag',
     'umur' => '18 tahun',
     'alamat' => 'Permat Kopo',
     'hobby' => [
         'Membaca',
         'Menghitung',
     ],
     'Media sosial' => [
         'Instagram' => 'Nazwanfaisal',
         'Facebook' => 'Nazwan Faisal Ag'
        ]
     ];

     echo "<pre>";
     print_r($perusahaan);

     echo "<br>";
     echo "Program array multidimensi menampilkan satu data <br>";
     echo $perusahaan['hobby'][1]."<br>";
     echo $perusahaan['Media sosial']['Facebook'];



?>