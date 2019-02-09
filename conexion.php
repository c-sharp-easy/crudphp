<?php

//Funciones de crud


function MOSTRAR(){


    $sql = "SELECT  *FROM contactos ORDER BY Nombre";
	$conexion = new PDO('mysql:host=localhost;dbname=agendaphp','root','');
     $resultados = $conexion->query($sql);
     return $resultados;


}


function AGREGAR($Nombre, $Apellido, $Correo, $Fecha, $Ocupacion){

    $sql = "INSERT INTO contactos  values (null,'{$Nombre}', '{$Apellido}', '{$Correo}','{$Fecha}', '{$Ocupacion}')";
	$conexion = new PDO('mysql:host=localhost;dbname=agendaphp','root','');
     $resultados = $conexion->query($sql);

}

function WHERE($id){

    $sql = "SELECT  *FROM contactos WHERE Id = {$id}";
	$conexion = new PDO('mysql:host=localhost;dbname=agendaphp','root','');
     $resultados = $conexion->query($sql);
     return $resultados;


}


function ELIMINAR ($id){

    $sql = "DELETE FROM contactos WHERE Id = {$id}";
	$conexion = new PDO('mysql:host=localhost;dbname=agendaphp','root','');
     $resultados = $conexion->query($sql);
     return $resultados;


}

function EDITAR($Nombre, $Apellido, $Correo, $Fecha, $Ocupacion, $id){

    $sql = "UPDATE contactos SET Nombre = '{$Nombre}', Apellido = '{$Apellido}', Correo= '{$Correo}', Fecha = '{$Fecha}', Ocupacion = '{$Ocupacion}' WHERE Id = '{$id}' ";
	$conexion = new PDO('mysql:host=localhost;dbname=agendaphp','root','');
     $resultados = $conexion->query($sql);
     



}








?>
