<!DOCTYPE html>
<html>
<head>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 0 auto;
        border: 2px solid #000;
    }

    th, td {
        padding: 8px;
        text-align: center;
        border: 1px solid #000;
    }

    th {
        background-color: #b3c6ff;
    }

    td {
        background-color: #f9f9f9;
    }

    td.highlight {
        background-color: #e6f3ff;
    }

    .total-row {
        font-weight: bold;
    }

    /* Colores personalizados */
    .header-row th {
        background-color: #FFFF00;
    }

    .data-row td {
        background-color: #a9c9ff; 
    }

    .total-row td {
        background-color: #ffcccc;
    }
</style>
</head>
<body>
    <h1 class="has-text-centered"><img src="./img/inam.png" alt="" width="200"></h1>

    <?php

    
    $conexion = mysqli_connect("localhost", "root", "liga2016", "tuti");
    $consulta_productos = "SELECT * FROM producto INNER JOIN categoria ON producto.categoria_id = categoria.categoria_id";
    $consulta_cantidad = "SELECT COUNT(*) AS total_productos FROM producto";
    $resultado_productos = mysqli_query($conexion, $consulta_productos);
    $resultado_cantidad = mysqli_query($conexion, $consulta_cantidad);

    $total_productos = mysqli_fetch_assoc($resultado_cantidad)['total_productos'];

    echo "<table>";
    echo "<tr class='header-row'><th>codigo</th><th>nombre</th><th>precio</th><th>marca</th>";

    while ($fila = mysqli_fetch_assoc($resultado_productos)) {
        echo "<tr class='data-row'>";
        echo "<td>" . $fila['producto_codigo'] . " </td>";
        echo "<td>" . $fila['categoria_nombre'] . "</td>";
        echo "<td>" . $fila['producto_precio'] . "</td>";
        echo "<td>" . $fila['producto_marca'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<table>";
    echo "<tr class='total-row'><td colspan='4'>CANTIDAD TOTAL DE BIENES: " . $total_productos . "</td></tr>";
    echo "</table>";

    mysqli_close($conexion);
    ?>
</body>
</html>



