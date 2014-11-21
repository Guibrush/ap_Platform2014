
<!-- Form Publicidad - Redes -->

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
			<label for="InputWeb">¿Tienes una págian web?</label>
			<input class="Inputs" id="InputWeb" name="web" type="url" placeholder="http://">
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