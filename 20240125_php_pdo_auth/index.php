<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h1>Listado de productos</h1>
<?php
global$conexion;
include_once('config.php');
$resultado=$conexion->query("select * from productos");
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">unidades</th>
        <th scope="col">precio</th>
        <th scope="col">caducidad</th>
        <th scope="col">descuento</th>
        <th scope="col">imagen</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>';
        echo '<td>'.$fila["id"].'</td>';
        echo '<td>'.$fila["nombre"].'</td>';
        echo '<td>'.$fila["unidades"].'</td>';
        echo '<td>'.$fila["precio"].'</td>';
        echo '<td>'.$fila["caducidad"].'</td>';
        echo '<td>'.$fila["descuento"].'</td>';
        echo '<td><img src="'.$fila["imagen"].'" width="100"></td>';
        echo '<td><form action="editar.php?id='.$fila["id"].'" method="post"><input type="submit" value="Editar"></form></td>';

        echo  '</tr>';
    }

    ?>
    </tbody>
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
