<?php
 $employee = [
     'jurusan teknik informatika' => 'ada di indek 0',
     'jurusan sistem informasi' => 'ada di indek 1',
     'jurusan teknik komputer' => 'ada di indek 2',
     'jurusan manajemen informatika' => 'ada di indek 3',
 ];
  
 

 foreach ($employee as $key => $value) {
     echo '<pre>';
     echo $key . '-' . $value;
     echo '<br>';
 }




?>