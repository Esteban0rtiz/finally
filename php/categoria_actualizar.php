<?php
	require_once "main.php";

	/*== Almacenando id ==*/
    $id=limpiar_cadena($_POST['categoria_id']);


    /*== Verificando categoria ==*/
	$check_categoria=conexion();
	$check_categoria=$check_categoria->query("SELECT * FROM categoria WHERE categoria_id='$id'");

    if($check_categoria->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La categoría no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_categoria->fetch();
    }
    $check_categoria=null;

    /*== Almacenando datos ==*/
   # $nombre=limpiar_cadena($_POST['categoria_nombre']);
    $ubicacion=limpiar_cadena($_POST['categoria_ubicacion']);


    /*== Actualizar datos ==*/
    $actualizar_categoria=conexion();
    $actualizar_categoria=$actualizar_categoria->prepare("UPDATE categoria SET categoria_ubicacion=:ubicacion WHERE categoria_id=:id");

    $marcadores=[
 
        ":ubicacion"=>$ubicacion,
        ":id"=>$id
    ];

    if($actualizar_categoria->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡CATEGORIA ACTUALIZADA!</strong><br>
                La categoría se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar la categoría, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_categoria=null;