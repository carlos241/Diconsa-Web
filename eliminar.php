<?php
include("conexion.php");
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


    <!-- <div class="cuerpo">
        <?php
        /* if (file_exists("modulos/" . $p . ".php")) {
            include "modulos/" . $p . ".php";
        } else {
            echo "no se encuentra el archivo";
        }*/
        ?>
    </div> -->
    <div class="row" style="display: flex;width: 100%;">
        <div class="col-2">
            <img src="eliminar.png" style="width: auto; margin-left: 20px;">
        </div>
        <div class="col-10">
            <h2 style="font-size: 20px; text-align: center; margin-top: 12px;">ELIMINAR PRODUCTOS</h2>
        </div>
    </div>

  
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;" class="navbar navbar-light bg-light">
        <div class="row" style="display: flex;width: 100%;">
            <div class="col-2">
                <img src="lupa.png" style="width: 35px; margin-left: 10px;">
            </div>
            <div class="col-10">

                <form method="POST" action="" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="from-control" name="busqueda" placeholder="Buscar producto" width="70px" />

                        <?php
                        if (isset($busqueda)) {
                            $q = $conn->query("SELECT Id_prod,Nombre,Categoria,Precio_neto,Exist FROM productos WHERE Nombre LIKE sopa");
                        } else {
                            $q = $conn->query("SELECT Id_prod,Nombre,Categoria,Precio_neto,Exist FROM productos");
                            //echo "hola";
                        }
                        ?>
                        <button type="sumit" class="btn btn-outline-success" style="height: 32px; padding: 0px 10px 0px 10px; margin: 0px;" name="buscar">Buscar</button>

                    </div>
                </form>

            </div>
        </div>
    </nav>

    



    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr><td></td>
                <td>Id</td>
                <td>Nombre</td>
                <td>Categoria</td>
                <td>Precio</td>
                <td>Stock</td>
            </tr>
        </thead>
        <?php

        // $result = mysqli_query($conn, $q);

        while ($mostrar = mysqli_fetch_array($q)) {
        ?>
            <tr>
            <td><input class="uk-checkbox" type="checkbox"></td>
                <td style="font-size: 10px;"><?php echo $mostrar['Id_prod'] ?></td>
                <td style="font-size: 12px;"><?php echo $mostrar['Nombre'] ?></td>
                <td style="font-size: 12px;"><?php echo $mostrar['Categoria'] ?></td>
                <td style="font-size: 12px;"><?php echo $mostrar['Precio_neto'] ?></td>
                <td style="font-size: 12px;"><?php echo $mostrar['Exist'] ?></td>
            </tr>
        <?php
        }
        ?>

    </table>


   

    <div class="d-grid gap-2 col-6 mx-auto">
    <button type="button" class="btn btn-outline-danger">Eliminar</button>
    </div>

    <br>





















    
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