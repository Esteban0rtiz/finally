<h1 class=" has-text-centered" ><img src="https://logos.flamingtext.com/Name-Logos/Tuti-design-china-name.png" alt=""  width="200"></h1>
<h1 class="title has-text-centered">PRODUCTOS</h1>
	<h2 class="subtitle has-text-centered">ACTUALIZAR PRODUCTOS</h2>

<div class="container pb-6 pt-6">
	<?php
		include "./inc/btn_back.php";

		require_once "./php/main.php";

		$id = (isset($_GET['product_id_up'])) ? $_GET['product_id_up'] : 0;
		$id=limpiar_cadena($id);

		/*== Verificando producto ==*/
    	$check_producto=conexion();
    	$check_producto=$check_producto->query("SELECT * FROM producto WHERE producto_id='$id'");

        if($check_producto->rowCount()>0){
        	$datos=$check_producto->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['producto_nombre']; ?></h2>

	<form action="./php/producto_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="producto_id" value="<?php echo $datos['producto_id']; ?>" required >

		<style>
	.custom-input {
		border: 2px solid #A9A9A9; /* Color del borde por defecto */
	}

	.custom-input:focus {
		border: 2px solid purple; /* Color del borde al obtener el foco */
	}
</style>


		    <h1 class=" has-text-centered"> 
			<div class="control" style="display: flex; flex-direction: row; flex-wrap: wrap;">
		

				<div class="control" style="margin: 10px;">
					<label>Código </label>
				  	<input class="input custom-input" type="text" name="producto_codigo" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['producto_codigo']; ?>" >
				</div>

				<div class="control" style="margin: 10px;">
					<label>NOMBRE </label>
				  	<input class="input custom-input" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['producto_nombre']; ?>" >
				</div>

				<div class="control" style="margin: 10px;">
					<label>PRECIO</label>
				  	<input class="input custom-input" type="text" name="producto_precio" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['producto_precio']; ?>" >
				</div>
		 
		    	<div class="control" style="margin: 10px;">
					<label>MARCA</label>
				  	<input class="input custom-input" type="text" name="producto_marca" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['producto_marca']; ?>" >
				</div>

				<div class="column" style="margin: 10px;">
				<label>Categoría</label><br>
		    	<div class="select is-rounded">
				  	<select name="producto_categoria" >
				    	<?php
    						$categorias=conexion();
    						$categorias=$categorias->query("SELECT * FROM categoria");
    						if($categorias->rowCount()>0){
    							$categorias=$categorias->fetchAll();
    							foreach($categorias as $row){
    								if($datos['categoria_id']==$row['categoria_id']){
    									echo '<option value="'.$row['categoria_id'].'" selected="" >'.$row['categoria_nombre'].' (Actual)</option>';
    								}else{
    									echo '<option value="'.$row['categoria_id'].'" >'.$row['categoria_nombre'].'</option>';
    								}
				    			}
				   			}
				   			$categorias=null;
				    	?>
				  	</select>
				</div>
		  	</div>
		</div>
		</div>
		</h1>
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded">Actualizar</button>
		</p>
	</form>
	</div>

	<?php 
		}else{
			include "./inc/error_alert.php";
		}
		$check_producto=null;
	?>
</div>