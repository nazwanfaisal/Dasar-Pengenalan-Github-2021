<?php
  echo "1.Contoh program array numeric<br>";
 $jurusan = array("teknik informatika", "sistem informasi", "teknik komputer","manajemen informatika");
 $jumlah_array = count($jurusan);
  for($i = 0; $i < $jumlah_array ; $i++) {
      echo " jurusan ". $jurusan[$i]." - ada di index $i";
      echo "<br>";
  } 
  echo '<br>';
  echo '2. Contoh program array assosiatif<br>';
  $data = array("jurusan1" => "teknik informatika",
  "jurusan2"=>"sistem informasi",
  "jurusan3"=>"teknik komputer",
  "jurusan4"=>"manajamen informatika");

  foreach($data as $index => $nilai) {
      echo "Kata Kunci index= " . $index . ", nilai - " . $nilai;
      echo "<br>";
  }

?>