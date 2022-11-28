<?php

#Codigo imperativo o espaguetti

$automovil1 = (object)["Marca"=>"Toyota", "Modelo"=>"Corolla"];
$automovil2 = (object)["Marca"=>"Hyundai", "Modelo"=>"Accent Vision"];

function mostrar ($automovil){
    echo "<p>  Datos del auto: Marca = $automovil->Marca, Modelo = $automovil->Modelo </p>";
}

mostrar($automovil1);
mostrar($automovil2);

?>