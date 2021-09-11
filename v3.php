<?php
for ($x=0;$x<count ($mp_array);[$x++]){
    if ($mp_array[$x] > 85 && $mp_array[$x]<=100){
        $grade[$x]='A';
        $bobot[$x]=4;
    }elseif ($mp_array[$x] > 70 && $mp_array[$x]<=85){
        $grade[$x]='B';
        $bobot[$x]=3;
    }elseif ($mp_array[$x] > 60 && $mp_array[$x]<=70){
        $grade[$x]='C';
        $bobot[$x]=2;
    }elseif ($mp_array[$x] > 40 && $mp_array[$x]<=60){
        $grade[$x]='D';
        $bobot[$x]=1;
    }elseif ($mp_array[$x] < 40){
        $grade[$x]='E';
        $bobot[$x]=0;
    }
    $ratarata=array_sum($bobot)/10;
}
?>