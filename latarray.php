<?php
      echo "<center>PROGRAM BANGUN DATAR</center>";
$bangundatar = array(
    array('segitiga<br>', ' 1/2 x A x T ', 1/2 * 3 * 3, ' A x T x S ', 3 * 3 * 3),
    array('persegi<br>', ' S x S ', 3 * 3, ' S x S x S x S ', 3*3*3*3),
    array('persegi panjang<br>', ' P x L ', 4*3, ' 2 x P + L ', 2*4+3),
    array('lingkaran<br>', ' 3.14 x D x D ', 3.14*3*3, ' 3.14 x R x D ', 4*6)
);
?>

<ul>
    <?php foreach ($bangundatar as $key => $value): ?>
        <i class="bi bi-chevron-double-right">Bangun <?= $value[0] ?> Rumus luas: <?= $value[1].' = '.$value[2].' Rumus keliling: '.$value[3].' = '.$value[4]?><br>     </i> 
        <?php endforeach ?>
    </ul>