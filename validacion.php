<?php


function VALIDARNOMBRE($Nombres){

    $retornar = false;
    
    if(isset($Nombres) && strlen($Nombres)>=2){

        $Nombres = trim($Nombres);
        $Nombres = stripcslashes($Nombres);
        $Nombres = filter_var($Nombres, FILTER_SANITIZE_STRING);
        $Nombres = htmlspecialchars($Nombres); 

        $retornar = true;
    }

    return $retornar;

}

function VALIDARAPELLIDO($Apellidos){

        $retornar = false;

    if(isset($Apellidos) && strlen($Apellidos)>=2){

        $Apellidos = trim($Apellidos);
        $Apellidos = stripcslashes($Apellidos);
        $Apellidos = filter_var($Apellidos, FILTER_SANITIZE_STRING);
        $Apellidos = htmlspecialchars($Apellidos);

        $retornar = true;

    }

    return $retornar; 
    

}

function VALIDAROCUPACION($Ocupacion){

    $retornar = false;

    if(isset($Ocupacion) && strlen($Ocupacion)>=4){

        $Ocupacion = trim($Ocupacion);
        $Ocupacion = stripcslashes($Ocupacion);
        $Ocupacion = filter_var($Ocupacion, FILTER_SANITIZE_STRING);
        $Ocupacion = htmlspecialchars($Ocupacion);

        $retornar = true;

    }

    return $retornar;



}


?>