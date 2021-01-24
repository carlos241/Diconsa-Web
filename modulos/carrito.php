<?php
$q = $cn->query("SELECT * FROM productos");
while ($r = mysqli_fetch_array($q)) {
?>
    <!DOCTYPE html>
    <html lang="ES">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/stilos.css">
        <title>Document</title>
    </head>

    <body>

        <table>
                <tr>
                    <td>
                        <div><img class="imagen" src="productos/<?= $r['Img'] ?>" />
                    </td>
                    <td>
                        <div class="name_producto"><?= $r['Nombre'] ?></div>
                        <div class="descrip">Categoria <?= $r['Categoria'] ?></div>
                        <div class="precio"> Precio: $<?= $r['Precio_neto'] ?> </div>
                
                    </td>
                   
                </tr>
                
        </table>
        <hr>

    </body>

    </html>
<?php
}
?>