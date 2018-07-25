<?php
    function majority ($age,$gender){
        $g="Vous êtes ".$gender;
        if ($age < 18){
            $r=$g." et vous êtes mineur\n";
        }else{
            $r=$g." et vous êtes majeur\n";
        }
        echo $r;
    }
    majority(23,"un homme");
?>