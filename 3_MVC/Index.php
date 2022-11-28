<?php

#Index: En el mostraremos la salida de las vistas al usuario y tambien a traves de el enviaremos
#las distintas acciones que el usuario envie al controlador

#Require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio para el
#funcionamiento del programa. Por ello, si el archivo especificado en la funcion require() no se
#encuentra saltara un error "PHP fatal error" y el programa PHP se detendra.

#La version require_once() funcionan de la misma forma que sus respectivos, salvo que, al utilizar la version
#_once() se impide la carga de un mismo archivo, mas de una vez

require_once "Controladores/Plantilla_Controlador.php";

$Plantilla = new ControladorPlantilla();
$Plantilla -> CtrTraerPlantilla();

?>