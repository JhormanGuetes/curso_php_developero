<?php 

//IMPRIMIR PANTALLAS
echo "NOTAS: </br>"
echo "echo: El echo funciona para imprimir en PHP </br>";
print("print: Print es una manera de imprimir en PHP </br>");
print("print_r: Funciona para imprimir arreglos en PHP </br>");
print("var_dump: Esa función sirve para imprimir cualquiere tipo de datos en PHP </br>");

//LAS VARIABLES EN PHP
//En PHP no se coloca de manera explicita el tipo de la variable
$n = 1; //entero
$altura = 1.6; //flotante

//CADENAS
$cadena1 = "Comillas dobles con $n números </br>";
$cadena2 = 'Comillas simples con $n número </br>';
$conclusion = "Se puede notar que en las dobles imprime la variable y en la otra no </br>";

//¿Qué diferencia hay entre comillas simples y dobles
//1. La diferencia es que en las dobles se pueden incluir valores o variables
// pero en las comillas simples lo va a tomar como literal

print($cadena1);
print($cadena2);
print($conclusion);

//BOOLEAN
$verdadero = true;
$falso = false;

//ARRAY
//PRIMERA FORMA DE DECLARAR UN ARRAY
//con esta forma lo que se está diciendo es que los indices tienen un nombre y un valor
$personas = array("nombre" => "Juan",
                "edad" => "24",
                "domicilio" => "calle san loco");
//De esta manera se acceden a los datos con este tipo de declaración
print($personas["nombre"]);

//SEGUNDA FORMA DE DECLARAR UN ARRAY
$paises = array('México', 'Chile', 'Argentina');
//De esta manera se acceden a los datos con este tipo de declaración
print($paises[1]);


?>