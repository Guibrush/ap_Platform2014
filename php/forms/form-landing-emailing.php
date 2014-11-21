
<!-- Form Publicidad - Emailing -->

<?php 
	$contactType       = "Solicitud de producto";
	$contactOrigin     = "Plataforma";
	$contactSuborigin  = "Página producto";
	$asociatedProducto = "Emailing + más info usuario";
?>

<form data-abide="ajax" action="/index.php#FormAnchore" method="POST" id="FormAbide">

	<div class="row">

		<div class="small-12 large-3 columns">
			<input class="Inputs" id="InputName" name="name" type="text" placeholder="Nombre*" required pattern="[a-zA-Z]+"/>
			<small class="error">Por favor, introduce tu nombre</small>
		</div>

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputEmail" name="email" type="email" placeholder="Email*" required/>
			<small class="error">Por favor, introduce tu email</small>
		</div>

		<div class="small-12 large-3 columns">
			<input class="Inputs" id="InputTel" name="tel" type="tel" placeholder="Teléfono*" required pattern="number"/>
			<small class="error">Por favor, introduce tu número de teléfono</small>
		</div>

		<div class="small-12 columns">
			<label for="InputWeb">¿Tienes una págian web a donde dirijan tus emailings?</label>
			<input class="Inputs" id="InputWeb" name="web" type="url" placeholder="http://">
		</div>

		<div class="small-12 columns">
			<label for="InputEmailing">Has hecho alguna vez un emailings?</label>
			
			<div class="formRadio">
				
				<p><input type="radio" name="emailing" value="avanzado" id="avanzado"><label for="avanzado">Sí, ahora quiero mejorar el resultado de mis emailings</label></p>
		  		<p><input type="radio" name="emailing" value="medio" id="medio"><label for="medio">Lo probe pero no funciono</label></p>
		  		<p><input type="radio" name="emailing" value="starter" id="starter"><label for="starter">Quiero hacer mi primer emailing</label></p>
				
			</div>

		</div>

		<div class="small-12 columns">
			<label for="Inputbbdd">¿Tienes una base de datos?</label>
			
			<div class="formRadio">
				
				<p><input type="radio" name="bbdd" value="avanzado" id="avanzado"><label for="avanzado">Sí, tengo una base de datos que uso habitualmente</label></p>
		  		<p><input type="radio" name="bbdd" value="medio" id="medio"><label for="medio">Sí, tengo una base de datos con contactos para explotar</label></p>
		  		<p><input type="radio" name="bbdd" value="starter" id="starter"><label for="starter">No tengo base de datos, solo algunos emails de contactos</label></p>
				
			</div>

		</div>

		<div class="small-12 columns">
			<label for="InputComement">Cuéntanos más sobre lo que necesitas</label>
			<textarea id="InputComment" class="Inputs" name="comment" 
			placeholder="Que contenido tendría, que tipo de público lo recibiría..."></textarea>
		</div>

	</div>
	
	<div class="row u-separationMedium">
			
		<div class="small-12 columns">
			<?php require_once('php/forms/tratamiento-datos-personales.php') ?>					
		</div>
		<div class="small-12 columns">
			<input class="u-buttonStrong" id="FormButton" name="submit" type="submit" value="Apúntate gratis" />
		</div>

		
	</div>				

</form>