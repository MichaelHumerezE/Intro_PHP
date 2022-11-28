<?php

#Funcion sin parametros

function Saludo(){
    echo "Hola<br>";
}

Saludo();

#Funcion con parametros

function Despedida ($Adios){
    echo $Adios."<br>";
}

Despedida("Hasta Pronto");

#Funcion con parametros y retornos

function Bye($Bye){
    return $Bye;
}

echo Bye("Bye");

?>