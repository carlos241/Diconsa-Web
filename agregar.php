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
            <img src="add.png" style="width: 40px; margin-left: 20px; margin-top: 5px;">
        </div>
        <div class="col-10">
            <h2 style="font-size: 20px; text-align: center; margin-top: 12px;">AGREGAR PRODUCTOS</h2>
        </div>
    </div>
    <br>

    <form>
        <div class="form-group row">
            <label for="idp" class="col-sm-2 col-form-label" style="margin-left: 10px;">ID:</label>
            <div class="col-sm-10">
                <input type="text" style="margin-left: 10px;max-width: 90%; width: 100%;" class="form-control" id="idp" placeholder="Id">
            </div>
        </div>
        <div class="form-group row">
            <label for="nombrep" class="col-sm-2 col-form-label" style="margin-left: 10px;">Nombre</label>
            <div class="col-sm-10">
                <input type="text" style="margin-left: 10px;max-width: 90%; width: 100%;" class="form-control" id="nombrep" placeholder="Nombre">
            </div>
        </div>

        <div class="form-group row">
            <label for="nombrep" class="col-sm-2 col-form-label" style="margin-left: 10px;"> Categoria</label>
            <select name="categorias" id="categorias" style="display: block;font-size: 16px;font-weight: 400;color: #444;line-height: 1.3;padding: .4em 1.4em .3em .8em;width: 330px;max-width: 100%; box-sizing: border-box;margin-left: 20px;border: 1px solid #aaa;box-shadow: 0 1px 0 1px rgba(0,0,0,.03);border-radius: .3em;-moz-appearance: none;-webkit-appearance: none;appearance: none;background-color: #fff;background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),linear-gradient(to bottom, #ffffff 0%,#f7f7f7 100%);background-repeat: no-repeat, repeat;background-position: right .7em top 50%, 0 0;background-size: .65em auto, 100%;">
                <option style="width: 100% ;" value="Cuidado personal ">Cuidado personal </option>
                <option style="width: 100% ;" value="Cuidado del hogar">Cuidado del hogar </option>
                <option style="width: 100% ;" value="Bebés">Bebés</option>
                <option style="width: 100% ;" value="Bebidas">Bebidas</option>
                <option style="width: 100% ;" value="Despensas">Despensas</option>
                <option style="width: 100% ;" value="Lácteos">Lácteos</option>
            </select>
        </div>

        <div class="form-group row">
            <label for="nombrep" class="col-sm-2 col-form-label" style="margin-left: 10px;">Precio</label>
            <div class="col-sm-10">
                <input type="number" style="margin-left: 10px;max-width: 90%; width: 100%;" class="form-control" id="preciop" placeholder="Precio">
            </div>
        </div>

        <div class="form-group row">
            <label for="nombrep" class="col-sm-2 col-form-label" style="margin-left: 10px;">Existencia</label>
            <div class="col-sm-10">
                <input type="number" style="margin-left: 10px;max-width: 90%; width: 100%;" class="form-control" id="exisp" placeholder="Existencia">
            </div>
        </div>
        <div class="form-group row">
            <label for="nombrep" class="col-sm-2 col-form-label" style="margin-left: 10px;">Imagen</label>
            <div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
                <input type="file"  class="input-file" value="" style="width: 100%; margin-left: 10px;">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" style="margin-left: 40%; margin-top: 10px; margin-bottom: 10px;" class="btn btn-primary">Guardar</button>
            </div>
        </div>


    </form>






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