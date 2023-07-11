<?php
    require_once "main.php";

    /*== Almacenando datos ==*/
    $ubicacion = limpiar_cadena($_POST['categoria_ubicacion']);

    /*== Guardando datos ==*/
    $guardar_categoria = conexion();
    $guardar_categoria = $guardar_categoria->prepare("INSERT INTO categoria(categoria_ubicacion, categoria_nombre) VALUE(:ubicacion, NULL)");

    $marcador = [
        ":ubicacion" => $ubicacion
    ];

    $guardar_categoria->execute($marcador);

    if($guardar_categoria->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡CATEGORIA REGISTRADA!</strong><br>
                La categoría se registró con éxito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrió un error inesperado!</strong><br>
                No se pudo registrar la categoría, por favor inténtelo nuevamente
            </div>
        ';
    }
    $guardar_categoria=null;
?>
