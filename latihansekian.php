<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form Program Segitiga Bintang Siku-siku</title>
</head>
<body>
<form method="POST" NAME= "input">
    Masukan Bintang = 
    <input type="text" name="bintang" required>
    <input type="submit" name="submit" value="submit"><br><br>

<?php 
    echo"Program segitiga bintang siku-siku<br>";
    if(isset($_POST['submit'])){
        $bintang = $_POST['bintang'];
        for($a = 1; $a <= $bintang; $a++){
            for($b = 1; $b <= $a; $b++){
                echo"*";
            }
            echo"<br>";
        }
    }
?>
</form>
</body>
</html>