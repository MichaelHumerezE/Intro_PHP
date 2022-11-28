<?php

#Variable Numerica
$Numero = 100;
echo "Esto es una variable numerica: $Numero";
echo "<br>";
var_dump($Numero);
echo "<br><br>";

#Variable Tipo Texto
$Palabra = "Hola Mundo";
echo "Esto es una variable tipo texto: $Palabra";
echo "<br>";
var_dump($Palabra);
echo "<br><br>";

#Variable Booleana
$Boolean = true;
echo "Esto es una variable tipo booleana: $Boolean";
echo "<br>";
var_dump($Boolean);
echo "<br><br>";

#Variable Tipo Arreglo
$Perros = array("Beto", "Lucho", "Luna");
echo "Esto es una variable tipo arreglo: $Perros[2]";
echo "<br>";
var_dump($Perros);
echo "<br><br>";

#Variable Tipo Arreglo Con Propiedades
$Perros = array("Perro1"=>"Beto", "Perro2"=>"Lucho", "Perro3"=>"Luna");
echo "Esto es una variable tipo arreglo con propiedades: $Perros[Perro2]";
echo "<br>";
var_dump($Perros);
echo "<br><br>";

#Variable Tipo Objetos
$Gatos = (object)["Gato1"=>"Michi", "Gato2"=>"Moana"];
echo "Esto es una variable tipo objetos: $Gatos->Gato2";
echo "<br>";
var_dump($Gatos);
echo "<br><br>";

?>