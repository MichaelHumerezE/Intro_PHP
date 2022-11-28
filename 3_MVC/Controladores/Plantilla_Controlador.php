<?php

class ControladorPlantilla{

    #LLamada a la plantilla

    Public function CtrTraerPlantilla(){

        #include() se utiliza para invocar el archivo que contiene código html-php
        include "Vistas/Plantilla.php";
    }
}

?>