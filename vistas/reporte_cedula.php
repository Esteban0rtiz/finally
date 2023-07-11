<!DOCTYPE html>
<html>
<head>
    <title>Generar Reporte</title>
    <style>
        body {
            background-color: transparent;
        }

        .back-button {
            display: block;
            padding: 6px 12px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin: 20px auto;
            text-align: center;
            width: fit-content;
        }

        .back-button:hover {
            background-color: #45a049;
        }

        .report-container {
            background-color: transparent;
            padding: 20px;
            margin-bottom: 20px;
        }

        .report-title {
            text-align: center;
        }

        .report-table {
            width: 100%;
            border-collapse: collapse;
            border: 6px solid #ddd; /* Agregado para añadir bordes */
        }

        .report-table th,
        .report-table td {
            border: 1px solid black; /* Cambiado a color negro */
            padding: 8px;
            text-align: left;
        }

        .report-table tr:first-child {
            background-color: #ffeeba; /* Color amarillo claro */
        }

        .report-table tr:not(:first-child) {
            background-color: #d6eaf8; /* Color azul claro */
        }

        .total-bienes {
            background-color: #ffcccc; /* Color rojo claro */
            padding: 10px;
            text-align: center;
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
<div style="display: flex; justify-content: center;">
    <h1><img src="https://www.gob.ec/sites/default/files/styles/medium/public/2018-09/Logo%20nuevo%20inamhi.png?itok=oeU1iIlk" alt=""></h1>
</div>


<?php
// Obtener el número de cédula enviado desde el formulario
$cedula = $_POST['cedula'];

// Realizar la conexión a la base de datos
$conexion = new mysqli('localhost', 'root', 'liga2016', 'inamhi');

// Verificar si hay errores en la conexión
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Preparar la consulta SQL para obtener el reporte
$sql = "SELECT *
        FROM producto
        WHERE producto_cedulaC = '$cedula'" ;

// Ejecutar la consulta
$resultado = $conexion->query($sql);

// Verificar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Mostrar el reporte
    echo "<div class='report-container'>";
    echo "<h2 class='report-title'>Reporte de bienes para el número de cédula $cedula:</h2>";
    echo "<table class='report-table'>";
    echo "<tr>
            <th>Código del Bien Esbye</th>
            <th>Código Anterior</th>
            <th>Código Provisional</th>
            <th>Nombre del bien</th>
            <th>Serie</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Color</th>
            <th>Material</th>
            <th>Estado</th>
            <th>Ubicación</th>
            <th>Cédula Custodio</th>
            <th>Custodio Anterior</th>
            <th>Custodio Actual</th>
            <th>Próxima Custodia</th>
            <th>Observaciones</th>
          </tr>";
    $row_count = 0;
    while ($fila = $resultado->fetch_assoc()) {
        $row_class = $row_count % 2 == 0 ? '' : 'highlighted';
        echo "<tr class='$row_class'>
                <td>" . $fila['producto_codigoB'] . "</td>
                <td>" . $fila['producto_codigoA'] . "</td>
                <td>" . $fila['producto_codigoP'] . "</td>
                <td>" . $fila['producto_nombre'] . "</td>
                <td>" . $fila['producto_serie'] . "</td>
                <td>" . $fila['producto_modelo'] . "</td>
                <td>" . $fila['producto_marca'] . "</td>
                <td>" . $fila['producto_color'] . "</td>
                <td>" . $fila['producto_material'] . "</td>
                <td>" . $fila['producto_estado'] . "</td>
                <td>" . $fila['producto_ubicacion'] . "</td>
                <td>" . $fila['producto_cedulaC'] . "</td>
                <td>" . $fila['producto_custodioAn'] . "</td>
                <td>" . $fila['producto_custodioA'] . "</td>
                <td>" . $fila['producto_proximaC'] . "</td>
                <td>" . $fila['producto_observaciones'] . "</td>
              </tr>";
        $row_count++;
    }
    echo "</table>";
    
        // Mostrar el total de los bienes
    $total_bienes = $resultado->num_rows;
    echo "<p class='total-bienes'>Total de bienes encontrados: $total_bienes</p>";
} else {
    echo "No se encontraron bienes para la cédula $cedula.";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>

<a class="back-button" href="javascript:history.back()">Volver</a>
</body>
</html>












