<?php
    session_start();
    require_once "./view/core/constantes.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Confecciones Vasquez es una tienda de confeción y venta de carteras al por mayor y menor">
    <title>
        <?php
            if(empty($_GET['views'])){
                $NomTitle = "Confecciones Vasquez";
                echo $NomTitle;
            } else {
                $text = $_GET['views'];
                $Title = explode("/", $_GET['views']);
                $NomTitle = ucfirst($Title[0]);

                if ($NomTitle == 'Categoria' || $NomTitle == 'ProductoDetalle'){
                    $NomTitle = ucfirst($Title[1]);
                }else{
                    $NomTitle = ucfirst($Title[0]);
                }
                echo $NomTitle;
            }
        ?>
    </title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo SERVERURL ?>view/img/jpg/bolso.ico" type="image/x-icon">
    <!-- CSS -->
    <?php require_once "links/css.php"; ?>
    <!-- JAVA SCRIPT -->
</head>
<body>


    <?php
        $Ajax = false;
        require_once "./controller/viewcontroller.php";
        $view = new viewcontroller();
        $vistas = $view -> obtenervistacontrolador();

        if($vistas == "inicio"){
            $vistas = "./view/content/inicio.php";
        }
    ?>

    <?php
        if(isset($_SESSION["idrol"])){
            if($NomTitle == "Inventario" || $NomTitle ==  "Productos"){
                include "modulos/contenido.php";
                $clasemain = "main-inventario";
            }else{
                include "modulos/header.php";
                $clasemain = "main";
            }
        }else{
            include "modulos/header.php";
            $clasemain = "main";
        }
    ?>

    <div class="<?php echo $clasemain ?>">
        <?php require_once $vistas;?>
    </div>

    <?php
    ?>

    <?php include "modulos/footer.php"; ?>
</body>
</html>