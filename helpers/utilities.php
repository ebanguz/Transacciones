<?php 

$carreras =[1 => "Redes", 
            2 => "Software", 
            3 => "Multimedia", 
            4 => "Mecatronica", 
            5 => "Seguridad informática"];



function getLastElement($list){
    $countList = count($list);
    $lastElement = $list[$countList -1];

    return $lastElement;
    
}


?>