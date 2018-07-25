<?php
    function number ($a,$b){
        if($a>$b){
            echo "Le premier nombre est plus grand\n";
            return "Le premier nombre est plus grand";
        }else if($a<$b){
            echo "Le premier nombre est plus petit\n";
            return "Le premier nombre est plus petit";
        }else{
            echo "Les deux nombres sont identiques\n";
            return  "Les deux nombres sont identiques";
        }

    }
    number(43,21);
?>
