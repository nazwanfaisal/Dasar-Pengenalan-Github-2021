<?php
for( $a=10;$a>0;$a--){
    for($a1=10;$a1>$a;$a1--){
        echo"*";
    }
echo"<br>";
}

for( $a=10;$a>0;$a--) {
	for($b=1; $b<=$a; $b++){
		echo "&nbsp ";
	}
	for($c=10;$c>$a;$c--){
		echo "*";
	}
	echo "<br/> ";
}
echo "<br>";

$jumlah=10;
for($a=1; $a<=$jumlah; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$jumlah; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
}

$jumlah = 10;
	echo "<br/>";
for($a=1; $a<=$jumlah; $a++){
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}

echo "<br/>";
$jumlah=10;
for($a=1; $a<=$jumlah; $a++){
    for($b=1; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=$jumlah; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}

echo "<br/>";
$jumlah=10;
for($a=1; $a<=$jumlah; $a++){
    for($b=$jumlah; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}

?>