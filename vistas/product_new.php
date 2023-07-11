
<h1 class=" has-text-centered" ><img src="./img/inam.png" alt=""  width="200"></h1>
<h1 class="title has-text-centered">BIENES</h1>
	<h2 class="subtitle has-text-centered">AGREGAR NUEVO BIEN</h2>


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
		<label>Código del Bien Esbye</label>
		<input class="input custom-input" type="text" name="producto_codigoB" >
	</div>
		  	

			  
		  	
	<div style="margin: 10px;">
		<label>Código Anterior</label>
		<input class="input custom-input" type="text" name="producto_codigoA" >
	</div>
		  	

			  
		  	
	<div style="margin: 10px;">
		<label>Código Provisional</label>
		<input class="input custom-input" type="text" name="producto_codigoP" >
	</div>
		  	
		    	<div class="control" style="margin: 10px;">
					<label>Nombre del bien</label>
				  	<input class="input custom-input" type="text" name="producto_nombre" >
				</div>
		  

		
		    	<div class="control" style="margin: 10px;">
					<label>Serie</label>
				  	<input class="input custom-input" type="text" name="producto_serie" >
				</div>
		

		
		    	<div class="control" style="margin: 10px;">
					<label>Modelo</label>
				  	<input class="input custom-input" type="text" name="producto_modelo" >
				</div>
		 

		
		    	<div class="control" style="margin: 10px;">
					<label>Marca</label>
				  	<input class="input custom-input" type="text" name="producto_marca" >
				</div>
		

		
		    	<div class="control" style="margin: 10px;">
					<label>Color</label>
				  	<input class="input custom-input" type="text" name="producto_color" >
				</div>
		  

		
		    	<div class="control" style="margin: 10px;">
					<label>Material</label>
				  	<input class="input custom-input" type="text" name="producto_material" >
				</div>
		 

		
		    	<div class="control" style="margin: 10px;">
					<label>Estado</label>
				  	<input class="input custom-input" type="text" name="producto_estado" >
				</div>
		 

		
		    	<div class="control" style="margin: 10px;">
					<label>Ubicacion</label>
				  	<input class="input custom-input" type="text" name="producto_ubicacion">
				</div>
		  

		
		    	<div class="control" style="margin: 10px;">
					<label>Cedula Custodio</label>
				  	<input class="input custom-input" type="text" name="producto_cedulaC">
				</div>


				<div class="control" style="margin: 10px;">
					<label>Custodio Anterior</label>
				  	<input class="input custom-input" type="text" name="producto_custodioAn" >
				</div>
		

		
		    	<div class="control" style="margin: 10px;">
					<label>Custodio Actual</label>
				  	<input class="input custom-input" type="text" name="producto_custodioA" >
				</div>
		 

		
		    	<div class="control" style="margin: 10px;">
					<label>Proxima Custodia</label>
				  	<input class="input custom-input" type="text" name="producto_proximaC"  >
				</div>
	

		
		    	<div class="control" style="margin: 10px;">
					<label>Observaciones</label>
				  	<input class="input custom-input" type="text" name="producto_observaciones"   >
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
    								echo '<option value="'.$row['categoria_id'].'" >'.$row['categoria_nombre'].'</option>';
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