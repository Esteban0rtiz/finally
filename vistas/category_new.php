<h1 class=" has-text-centered" ><img src="https://logos.flamingtext.com/Name-Logos/Tuti-design-china-name.png" alt=""  width="200"></h1>
<h1 class="title has-text-centered">CATEGORIAS</h1>
	<h2 class="subtitle has-text-centered">AGREGAR NUEVA CATEGORIA</h2>

<div class="container pb-6 pt-6">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/categoria_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input" type="text" name="categoria_ubicacion"  maxlength="150" >
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>