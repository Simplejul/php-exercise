<?php
    $i=100;
    $j=rand(1,100);
    echo $j."\n";
    while ($i > 10) {
        echo "i= ".$i."\n";
        $r=$i*$j;
        echo $r."\n";
        $i--;
    }
?>