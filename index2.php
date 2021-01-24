<?php
include "configuraciones/config.php";
include "configuraciones/funciones.php";

if (!isset($p)) {
    $p = "principal";
} else {
    $p = $p;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diconsa</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/imgs/D.png" type="image/x-icon">


    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="fontawesome/css/all.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <!---->
</head>

<body>
    <a href="index.php" style="float: right; margin-top: 5px; margin-bottom: 0px;">
        <img src="cerrar.png" width="25px" height="25px">
    </a>

    <header class="headerimg">
        <img src="img/imgs/diconsa.png">
    </header>


    <div class="menu">
        <a href="?p=principal" class="principal">principal</a>
        <a href="?p=productos" class="productos">productos</a>
        <a href="?p=sugerencias" class="sugerencias">sugerencias</a>
        <a href="?p=carrito" class="carrito">
            <img src="./img/imgs/shoppingcart_85988.png" width="25px" height="30px">
        </a>

    </div>


    <div class="cuerpo">
        <?php
        if (file_exists("modulos/" . $p . ".php")) {
            include "modulos/" . $p . ".php";
        } else {
            echo "no se encuentra el archivo";
        }
        ?>
    </div>

    <div class="footer">

        <div class="row" style="display: flex;width: 100%;">
            <div class="col-6">
                <p style="color: white; text-transform: uppercase; margin-left: 5px; margin-top: 10px; margin-bottom: 0px; text-align: justify; font-weight: bold;">Le atiende:</p>
                <p style="margin-left: 5px; margin-top: 0px; margin-bottom: 20px;">Maday Olivares Figueroa</p>
                <p style="color: white; text-transform: uppercase; margin-left: 5px; margin-top: 10px; margin-bottom: 0px; text-align: justify; font-weight: bold;">Domicilio:</p>
                <p style="margin-left: 5px; margin-top: 0px; margin-bottom: 0px;">Calle Oxtitlan S/N Nuevo poblado caracol Guerrero</p>

            </div>


            <div class="col-6">
                <p style="color: white; text-transform: uppercase; margin-left: 5px; margin-top: 10px; margin-bottom: 0px; text-align: justify; font-weight: bold;">Contactanos:</p>

                <div>
                    <img style="float: left;" src="Whats.png" width="32px" height="32px">
                    <p>7331331903</p>
                </div>

                <div>
                    <img style="float: left;" src="Face.png" width="30px" height="30px">
                    <p style=" font-size: 12px;">DICONSA_CARACOL</p>
                </div>

                <div>
                    <img style="float: left;" src="Tel.png" width="30px" height="30px">
                    <p>6641430799</p>
                </div>

            </div>
        </div>

        <br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js " integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js " integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj " crossorigin="anonymous "></script>
</body>

</html>