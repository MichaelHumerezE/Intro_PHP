<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo MVC</title>

    <!--PLUGINS DE CSS-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!--PLUGINS DE JAVASCRIPT-->

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Latest compiled Fontawesone -->
    <script src="https://kit.fontawesone.com/e632f1f723.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <!--LOGOTIPO-->
    <div class="container-fluid">
        <h3 class="text-center py-3">LOGO</h3>
    </div>

    <!--BOTON-->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

                 <!--GET: $_GET["variable"] Variables que se pasan como parametros via URL (tambien conocido como
                 cadena de consulta a traves de la URL)
                 *Cuando es la primera variable se separa con ?
                 las que siguen a continuacion se separa con &-->
                <li class="nav-item">
                    <a class="nav-link active" href="Index.php?pagina=registro">REGISTRO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Index.php?pagina=ingreso">INGRESO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Index.php?pagina=inicio">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Index.php?pagina=salir">SALIR</a>
                </li>
            </ul>
        </div>
    </div>

    <!--CONTENIDO-->
    <div class="container-fluid">
        <div class="container py-5">
            <?php

                #ISSET: isset() Determina si una variable esta definida y no es null
                if (isset($_GET["pagina"])){
                    if($_GET["pagina"] == "registro" ||
                        $_GET["pagina"] == "ingreso" ||
                        $_GET["pagina"] == "inicio" ||
                        $_GET["pagina"] == "salir"){
                            include "paginas/".$_GET["pagina"].".php";
                    }
                }else{
                    include "Paginas/Registro.php";
                }

            ?>
        </div>
    </div>
    
</body>
</html>