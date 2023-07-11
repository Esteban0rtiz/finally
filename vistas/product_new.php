
<h1 class=" has-text-centered" ><img src="./img/inam.png" alt=""  width="200"></h1>
<h1 class="title has-text-centered">PRODUCTOS</h1>
	<h2 class="subtitle has-text-centered">AGREGAR NUEVO PRODUCTO</h2>


<div class="container pb-1 pt-1">
	<?php
		require_once "./php/main.php";
	?>

	<div class="form-rest mb-1 mt-1"></div>

	<form action="./php/producto_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >

	
				<label>Foto o imagen del producto</label><br>
				<div class="file is-small has-name">
				  	<label class="file-label">
				    	<input class="file-input" type="file" name="producto_foto" accept=".jpg, .png, .jpeg" >
				    	<span class="file-cta">
				      		<span class="file-label">Imagen</span>
				    	</span>
				    	<span class="file-name">JPG, JPEG, PNG. (MAX 3MB)</span>
				  	</label>
				</div>
				<br><br>

				
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
		  	
	<div style="margin: 10px;">
		<label>Código del Producto</label>
		<input class="input custom-input" type="text" name="producto_codigo" >
	</div>			  
		  	
	<div style="margin: 10px;">
		<label>Nombre</label>
		<input class="input custom-input" type="text" name="producto_nombre" >
	</div> 	  
		  	
	<div style="margin: 10px;">
		<label>PRECIO</label>
		<input class="input custom-input" type="text" name="producto_precio" >
	</div>
		  	
	<div class="control" style="margin: 10px;">
		<label>MARCA</label>
    	<input class="input custom-input" type="text" name="producto_marca" >
	</div>
		<br>		
			<div class="select is-rounded" style="margin: 25px;">
				  	<select name="producto_categoria" >
				    	<option  value="" selected="" >Seleccione una categoria</option>
				    	<?php
    						$categorias=conexion();
    						$categorias=$categorias->query("SELECT * FROM categoria");
    						if($categorias->rowCount()>0){
    							$categorias=$categorias->fetchAll();
    							foreach($categorias as $row){
    								echo '<option value="'.$row['categoria_id'].'" >'.$row['categoria_ubicacion'].'</option>';
				    			}
				   			}
				   			$categorias=null;
				    	?>
				  	</select>
				</div>
		  	</div>
		</div>
		</h1>
		
	
		
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>