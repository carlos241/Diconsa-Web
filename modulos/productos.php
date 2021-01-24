<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<div class="navs">

    <nav class="navbar navbar-light bg-light">

        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z" />
        </svg>


        <form method="POST" action="" class="form-inline">
            <div class="form-group">
                <input type="text" class="from-control" name="busq" placeholder="Buscar producto" width="70px" />

                <?php
                if (isset($busq)) {
                    $q = $cn->query("SELECT * FROM productos WHERE Nombre LIKE '%$busq%'");
                } else {
                    $q = $cn->query("SELECT * FROM productos");
                }
                ?>
                <button type="sumit" class="btn btn-outline-success" name="buscar">Buscar</button>

            </div>
        </form>
    </nav>
</div>
<?php
while ($r = mysqli_fetch_array($q)) {
?>
    <table>
        <tr>
            <td>
                <img class="imagen" src="productos/<?= $r['Img'] ?>" />
            </td>
            <td>
                <div class="name_producto"><?= $r['Nombre'] ?></div>
                <div class="descrip">Categoria: <?= $r['Categoria'] ?></div>
                <div class="precio"> Precio: $<?= $r['Precio_neto'] ?> </div>
                <div class="existencia">Disponibles <?= $r['Exist'] ?></div>

                <div class="botoncarro"> <button type="button" class="btn btn-outline-info" onclick="agregar_carro('<?= $r['Id_prod'] ?>','<?= $r['Nombre'] ?>','<?= $r['Categoria'] ?>','<?= $r['Precio_neto'] ?>','<?= $r['Img'] ?>');"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.975 8l.025-.5c0-.517-.067-1.018-.181-1.5h5.993l-.564 2h-5.273zm-2.475 10c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm11.305-15l-3.432 12h-10.428l-.455-1.083c-.323.049-.653.083-.99.083-.407 0-.805-.042-1.191-.114l1.306 3.114h13.239l3.474-12h1.929l.743-2h-4.195zm-6.305 15c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm-4.5-10.5c0 2.485-2.017 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.017-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-3.086-2.122l-1.414 1.414-1.414-1.414-.707.707 1.414 1.415-1.414 1.414.707.708 1.414-1.415 1.414 1.414.708-.708-1.414-1.413 1.414-1.414-.708-.708z" />
                        </svg></svg></button>
                </div>

            </td>
        </tr>
    </table>
    <hr class="separador">
<?php
}
?>

<script>
    function agregar_carro(idp, nombre, categoria, precio, img) {
        var cant = prompt("¿Que cantidad desea agregar?", 1);
        if (cant > 0) {
            alert("Ingresa una cantidad valida " + idp + " " + nombre + " " + categoria + " " + precio + " " + img);
            window.location = "?p=productos&agregar" + "?w1=" + idp + "&w2=" + nombre + "&w3=" + categoria + "&w4=" + precio + "&w5=" + img + "&w6=" + cant;



        } else {
            alert("Ingresa una cantidad valida ");
        }
    }
</script>


<?php
// comprobar si tenemos los parametros w1 y w2 en la URL
if (isset($_GET["w1"]) && isset($_GET["w2"]) && isset($_GET["w3"]) && isset($_GET["w4"]) && isset($_GET["w5"]) && isset($_GET["w6"])) {
    $idp = $_GET["w1"];
    $nombre = $_GET["w2"];
    $categoria = $_GET["w3"];
    $precio = $_GET["w4"];
    $img = $_GET["w5"];
    $cant = $_GET["w6"];
    echo $idp . $nombre . $categoria . $precio . $img;

    $q = $cn->query("INSERT INTO `carrito`(`Id_usu`, `Id_prod`, `Nombre`, `Categoria`, `Precio_neto`, `Img`, `Cant`)
                 VALUES (1,$idp,$nombre ,$categoria , $precio,$img ,$cant)");
}

?>