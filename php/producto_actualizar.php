<?php
	require_once "main.php";

	/*== Almacenando id ==*/
    $id=limpiar_cadena($_POST['producto_id']);


    /*== Verificando producto ==*/
	$check_producto=conexion();
	$check_producto=$check_producto->query("SELECT * FROM producto WHERE producto_id='$id'");

    if($check_producto->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El producto no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_producto->fetch();
    }
    $check_producto=null;


    /*== Almacenando datos ==*/
    $codigoB=limpiar_cadena($_POST['producto_codigoB']);
	$codigoA=limpiar_cadena($_POST['producto_codigoA']);
    $codigoP=limpiar_cadena($_POST['producto_codigoP']);
	$nombre=limpiar_cadena($_POST['producto_nombre']);
	$serie=limpiar_cadena($_POST['producto_serie']);
	$modelo=limpiar_cadena($_POST['producto_modelo']);
    $marca=limpiar_cadena($_POST['producto_marca']);
    $color=limpiar_cadena($_POST['producto_color']);
    $material=limpiar_cadena($_POST['producto_material']);
    $estado=limpiar_cadena($_POST['producto_estado']);
    $ubicacion=limpiar_cadena($_POST['producto_ubicacion']);
    $cedulaC=limpiar_cadena($_POST['producto_cedulaC']);
    $custodioAn=limpiar_cadena($_POST['producto_custodioAn']);
    $custodioA=limpiar_cadena($_POST['producto_custodioA']);
    $proximaC=limpiar_cadena($_POST['producto_proximaC']);
    $observaciones=limpiar_cadena($_POST['producto_observaciones']);
	$categoria=limpiar_cadena($_POST['producto_categoria']);


	/*== Verificando campos obligatorios ==*/
    if($codigoB=="" || $codigoA=="" || $codigoP=="" || $nombre=="" || $serie=="" 
    || $modelo=="" || $marca=="" || $color=="" || $material=="" 
    || $estado=="" || $ubicacion=="" || $cedulaC=="" || $custodioAn=="" || $custodioA=="" || $proximaC==""
    || $observaciones=="" || $categoria==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos 
    
    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$codigoB)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El coDIGO BIEN no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$codigoA)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CODIGO ANTERIOR no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$codigoP)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CODIGO PROVISIONAL no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
    


    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$nombre)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$serie)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>                                     
                LA SERIE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$modelo)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El MODELO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$marca)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA MARCA no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$color)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El COLOR no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$material)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El MATERIAL no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$estado)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El ESTADO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$ubicacion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA UBICACION no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$cedulaC)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LA CEDULA no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$custodioAn)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CUSTODIO ANTERIOR no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$custodioA)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El CUSTODIO ACTUAL no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$proximaC)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El PROXIMO CUSTODIO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$observaciones)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                LAS OBSERVACIONES no coincide con el formato solicitado
            </div>
        ';
        exit();
    }
==*/

    /*== Verificando nombre ==*/
    if($nombre!=$datos['producto_nombre']){
	    $check_nombre=conexion();
	    $check_nombre=$check_nombre->query("SELECT producto_nombre FROM producto WHERE producto_nombre='$nombre'");
	    if($check_nombre->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                El NOMBRE ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_nombre=null;
    }


    /*== Verificando categoria ==*/
    if($categoria!=$datos['categoria_id']){
	    $check_categoria=conexion();
	    $check_categoria=$check_categoria->query("SELECT categoria_id FROM categoria WHERE categoria_id='$categoria'");
	    if($check_categoria->rowCount()<=0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La categoría seleccionada no existe
	            </div>
	        ';
	        exit();
	    }
	    $check_categoria=null;
    }

    /*== Actualizando datos ==*/
    $actualizar_producto=conexion();
    $actualizar_producto=$actualizar_producto->prepare("UPDATE producto SET producto_codigoB=:codigoB,
    producto_codigoA=:codigoA,producto_codigoP=:codigoP,producto_nombre=:nombre,producto_serie=:serie,producto_modelo=:modelo,producto_marca=:marca
    ,producto_color=:color,producto_material=:material,producto_estado=:estado,producto_ubicacion=:ubicacion,producto_cedulaC=:cedulaC,producto_custodioAn=:custodioAn,producto_custodioA=:custodioA
    ,producto_proximaC=:proximaC,producto_observaciones=:observaciones,categoria_id=:categoria WHERE producto_id=:id");

    $marcadores=[
      
        ":codigoB"=>$codigoB,
        ":codigoA"=>$codigoA,
        ":codigoP"=>$codigoP,
        ":nombre"=>$nombre,
        ":serie"=>$serie,
        ":modelo"=>$modelo,
        ":marca"=>$marca,
        ":color"=>$color,
        ":material"=>$material,
        ":estado"=>$estado,
        ":ubicacion"=>$ubicacion,
        ":cedulaC"=>$cedulaC,
        ":custodioAn"=>$custodioAn,
        ":custodioA"=>$custodioA,
        ":proximaC"=>$proximaC,
        ":observaciones"=>$observaciones,
        ":categoria"=>$categoria,
        ":id"=>$id
    ];


    if($actualizar_producto->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡PRODUCTO ACTUALIZADO!</strong><br>
                El producto se actualizo con exito
            </div>
        ';

    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar el producto, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_producto=null;