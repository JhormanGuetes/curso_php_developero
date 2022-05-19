<?php 
//EJERCICIO NÚMERO 1
//Capturar en variable nombre, apellido, edad, domicilio y guardarlo e imprimirlo en un array

$nombre = "Jhorman";
$apellido = "Guetes";
$edad = 23;
$domicilio = "Calle 12 y más";

$persona = array('nombre' => $nombre,
                "apellido" => $apellido,
                "edad" => $edad,
                'domicilio' => $domicilio);

print_r($persona);
?>