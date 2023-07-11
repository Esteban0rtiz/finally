<?php
	require_once "../inc/session_start.php";

	require_once "main.php";

	/*== Almacenando datos ==*/
	#$codigo=limpiar_cadena($_POST['producto_codigo']);
	#$nombre=limpiar_cadena($_POST['producto_nombre']);

	#$precio=limpiar_cadena($_POST['producto_precio']);
	#$stock=limpiar_cadena($_POST['producto_stock']);
  #  $codigo=limpiar_cadena($_POST['producto_codigo']);
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
    if( $nombre=="" || $serie=="" 
    || $modelo=="" || $marca=="" || $color=="" || $material=="" 
    || $estado=="" || $ubicacion=="" || $cedulaC=="" || $custodioAn==""  || $custodioA=="" || $proximaC==""
    || $observaciones=="" || $categoria==""){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No has llenado todos los campos que son obligatorios
            </div>
        ';
        exit();
    }


    /*== Verificando integridad de los datos ==*/
  #  if(verificar_datos("[a-zA-Z0-9- ]{1,70}",$codigo)){
   #     echo '
    #        <div class="notification is-danger is-light">
     #           <strong>¡Ocurrio un error inesperado!</strong><br>
      #          El CODIGO de BARRAS no coincide con el formato solicitado
      #      </div>
       # ';
        #exit();
    #}
     /*

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$codigoB)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El Codigo Bien no coincide con el formato solicitado
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

   /* if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$codigoP)){
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
                La SERIE no coincide con el formato solicitado
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
                La MARCA no coincide con el formato solicitado
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
                La UBICACION no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$cedulaC)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La cedula no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$custodioAn)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El Custodio Anterior no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$custodioA)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El Custodio ACTUAL no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$proximaC)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La Proxima Custodia no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$observaciones)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                Las observaciones no coincide con el formato solicitado
            </div>
        ';
        exit();
    }*/

     /*== Verificando codigoS ==
     $check_codigoB=conexion();
     $check_codigoB=$check_codigoB->query("SELECT producto_codigoB FROM producto WHERE producto_codigoB='$codigoB'");
     if($check_codigoB->rowCount()>0){
         echo '
             <div class="notification is-danger is-light">
                 <strong>¡Ocurrio un error inesperado!</strong><br>
                 El CODIGO BIEN ingresado ya se encuentra registrado, por favor elija otro
             </div>
         ';
         exit();
     }
     $check_codigoA=null;
 
     $check_codigoA=conexion();
     $check_codigoA=$check_codigoA->query("SELECT producto_codigoA FROM producto WHERE producto_codigoA='$codigoA'");
     if($check_codigoA->rowCount()>0){
         echo '
             <div class="notification is-danger is-light">
                 <strong>¡Ocurrio un error inesperado!</strong><br>
                 El CODIGO ANTERIOR ingresado ya se encuentra registrado, por favor elija otro
             </div>
         ';
         exit();
     }
     $check_codigoP=null;
 
     $check_codigoP=conexion();
     $check_codigoP=$check_codigoP->query("SELECT producto_codigoP FROM producto WHERE producto_codigoP='$codigoP'");
     if($check_codigoP->rowCount()>0){
         echo '
             <div class="notification is-danger is-light">
                 <strong>¡Ocurrio un error inesperado!</strong><br>
                 El CODIGO PROVISIONAL ingresado ya se encuentra registrado, por favor elija otro
             </div>
         ';
         exit();
     }
     $check_codigo=null;
 


    /*== Verificando codigo ==*/
 #   $check_codigo=conexion();
  #  $check_codigo=$check_codigo->query("SELECT producto_codigo FROM producto WHERE producto_codigo='$codigo'");
   # if($check_codigo->rowCount()>0){
    #    echo '
     #       <div class="notification is-danger is-light">
      #          <strong>¡Ocurrio un error inesperado!</strong><br>
       #         El CODIGO de BARRAS ingresado ya se encuentra registrado, por favor elija otro
        #    </div>
        #';
        #exit();
    #}
    #$check_codigo=null;


    /*== Verificando nombre ==*/
  #  $check_nombre=conexion();
   # $check_nombre=$check_nombre->query("SELECT producto_nombre FROM producto WHERE producto_nombre='$nombre'");
    #if($check_nombre->rowCount()>0){
     #   echo '
      #      <div class="notification is-danger is-light">
       #         <strong>¡Ocurrio un error inesperado!</strong><br>
        #        El NOMBRE ingresado ya se encuentra registrado, por favor elija otro
         #   </div>
        #';
        #exit();
    #}
    #$check_nombre=null;*/


    /*== Verificando categoria ==
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
    $check_categoria=null;*/


    /* Directorios de imagenes */
	$img_dir='../img/producto/';


	/*== Comprobando si se ha seleccionado una imagen ==*/
	if($_FILES['producto_foto']['name']!="" && $_FILES['producto_foto']['size']>0){

        /* Creando directorio de imagenes */
        if(!file_exists($img_dir)){
            if(!mkdir($img_dir,0777)){
                echo '
                    <div class="notification is-danger is-light">
                        <strong>¡Ocurrio un error inesperado!</strong><br>
                        Error al crear el directorio de imagenes
                    </div>
                ';
                exit();
            }
        }

		/* Comprobando formato de las imagenes */
		if(mime_content_type($_FILES['producto_foto']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['producto_foto']['tmp_name'])!="image/png"){
			echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La imagen que ha seleccionado es de un formato que no está permitido
	            </div>
	        ';
	        exit();
		}


		/* Comprobando que la imagen no supere el peso permitido */
		if(($_FILES['producto_foto']['size']/1024)>3072){
			echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                La imagen que ha seleccionado supera el límite de peso permitido
	            </div>
	        ';
			exit();
		}


		/* extencion de las imagenes */
		switch(mime_content_type($_FILES['producto_foto']['tmp_name'])){
			case 'image/jpeg':
			  $img_ext=".jpg";
			break;
			case 'image/png':
			  $img_ext=".png";
			break;
		}

		/* Cambiando permisos al directorio */
		chmod($img_dir, 0777);

		/* Nombre de la imagen */
		$img_nombre=renombrar_fotos($nombre);

		/* Nombre final de la imagen */
		$foto=$img_nombre.$img_ext;

		/* Moviendo imagen al directorio */
		if(!move_uploaded_file($_FILES['producto_foto']['tmp_name'], $img_dir.$foto)){
			echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
	                No podemos subir la imagen al sistema en este momento, por favor intente nuevamente
	            </div>
	        ';
			exit();
		}

	}else{
		$foto="";
	}


	/*== Guardando datos ==*/
    $guardar_producto=conexion();
    $guardar_producto=$guardar_producto->prepare("INSERT INTO producto(producto_codigoB,producto_codigoA,
    producto_codigoP,producto_nombre,producto_serie,producto_modelo,producto_marca,producto_color,
    producto_material,producto_estado,producto_ubicacion,producto_cedulaC,producto_custodioAn,producto_custodioA,
    producto_proximaC,producto_observaciones,producto_foto,categoria_id,usuario_id) VALUES(:codigoB,:codigoA,:codigoP,:nombre,:serie,
    :modelo,:marca,:color,:material,:estado,:ubicacion,:cedulaC,:custodioAn,:custodioA,:proximaC,:observaciones,:foto,:categoria,:usuario)");

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
        ":foto"=>$foto,
        ":categoria"=>$categoria,
        ":usuario"=>$_SESSION['id']
    ];

    $guardar_producto->execute($marcadores);

    if($guardar_producto->rowCount()==1){
        echo '
            <div class="notification is-info is-light">
                <strong>¡PRODUCTO REGISTRADO!</strong><br>
                El producto se registro con exito
            </div>
        ';
    }else{

    	if(is_file($img_dir.$foto)){
			chmod($img_dir.$foto, 0777);
			unlink($img_dir.$foto);
        }

        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo registrar el producto, por favor intente nuevamente
            </div>
        ';
    }
    $guardar_producto=null;