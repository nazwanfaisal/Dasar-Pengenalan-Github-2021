<?Php 
 $nilai = 101;
echo " GRADE PENILAIAN DENGAN KETENTUAN : ";
echo "<br>";

 if ($nilai >= 91 && $nilai <= 100) {
     echo "A";
 } elseif ($nilai >= 80 && $nilai <= 90) {
     echo "B";
 } elseif ($nilai >= 71 && $nilai <= 80) {
     echo "C";
 } elseif ($nilai >= 61 && $nilai <= 75) {
     echo "D";
 } elseif ($nilai <= 51 && $nilai <= 60) {
     echo "E";
 } else {
     echo " Anda tidak bisa menampilkan !!";
 }
 ?>