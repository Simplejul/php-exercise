<?php
    $dep = array(02=>"Aisne",59=>"Nord",60=>"Oise",62=>"Pas-de-Calais",80=>"Somme");
    $dep[51]="Marne";
    $dep += [78=>"Yvelines"];
    var_dump($dep);
?>