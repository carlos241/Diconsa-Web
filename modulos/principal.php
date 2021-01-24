<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diconsa</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <!--
 <div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: -200" style="background-image: url('images/dark.jpg');">

    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical" uk-parallax="y: 100,0">Headline</h1>

</div>
-->
</head>

<body>
    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/arriba/imagen1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/arriba/imagen2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/arriba/imagen3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/arriba/imagen4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/arriba/imagen5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/arriba/imagen6.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <br>


    <!-- Promociones -->
    <p class="promociones">Promociones</p>
    <div class=" uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">
        <ul class="uk-slider-items uk-grid">

            <?php
            $q = $cn->query("SELECT * FROM promo");
            while ($r = mysqli_fetch_array($q)) {
            ?>

                <li class="uk-width-3-4">
                    <div class="uk-panel">
                        <div class="card" style="width: 100%; height:  350px; margin: 0px;">
                            <p style="font-size: 15px;  margin: 0px; text-transform: uppercase; text-align: center; color: white; background-color: #C90B37;"><?= $r['Nombre'] ?></p>
                            <img style="margin: 0px; padding: 0px; height: 250px;" src="productos/<?= $r['Img'] ?>" class="img-thumbnail" height="550px">
                            <div class="card-body" style="background-color: #006d32;">
                                <p class="de">De: $<?= $r['Precio_anterior'] ?> </p>
                                <p class="aa"> a: $<?= $r['Precio_actual'] ?></p>
                            </div>

                        </div>
                    </div>
                </li>
            <?php
            }
            ?>

        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
    <br>
    <br>
    <br>



    <div class="uk-background-fixed uk-background-center-center uk-height-small uk-width-large" style="background-image: url(./img/imgs/Diconsa.jpg);"></div>



    <!-- Categorias -->
    <p class="promociones">Buscar por categoria</p>
    <div class="row" style="width: 100%;">
        <div class="col-6">
            <div class="card" style="width: 100%;">
                <img src="./img/categorias/personal.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; margin: 0px; ">Cuidado personal</h5>
                    <a style="text-align: center;" class="stretched-link" href="#">Más..</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 100%;">
                <img src="./img/categorias/hogar.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; margin: 0px;">Cuidado del hogar</h5>
                    <a style="text-align: center;" class="stretched-link" href="#">Más..</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row" style="width: 100%;">
        <div class="col-6">
            <div class="card" style="width: 100%;">
                <img src="./img/categorias/bebes.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;  margin: 0px;">Bebes</h5>
                    <a style="text-align: center;" class="stretched-link" href="#">Más..</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 100%;">
                <img src="./img/categorias/bebidas.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;  margin: 0px;">Bebidas</h5>
                    <a style="text-align: center;" class="stretched-link" href="#">Más..</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row" style="width: 100%;">
        <div class="col-6">
            <div class="card" style="width: 100%;">
                <img src="./img/categorias/imagen1.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; ">Despensa</h5>
                    <a style="text-align: center;" class="stretched-link" href="#">Más..</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 100%;">
                <img src="./img/categorias/lacteos.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center; ">Lácteos</h5>
                    <a style="text-align: center;" class="stretched-link" href="#">Más..</a>
                </div>
            </div>
        </div>
    </div>
    <br>




</body>

</html>