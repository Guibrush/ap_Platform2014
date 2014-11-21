
<!-- Form Publicidad - Publicidad -->

<form data-abide="ajax" action="/index.php#FormAnchore" method="POST" id="FormAbide">
	
	<div class="row">

		<div class="small-12 large-4 columns">
			<input class="Inputs" id="InputName" name="name" type="text" placeholder="Nombre*" required pattern="[a-zA-Z]+"/>
			<small class="error">Por favor, introduce tu nombre</small>
		</div>

		<div class="small-12 large-8 columns">
			<input class="Inputs" id="InputEmail" name="email" type="email" placeholder="Email*" required/>
			<small class="error">Por favor, introduce tu email</small>
		</div>

		<div class="small-12 large-4 columns">
			<input class="Inputs" id="InputTel" name="tel" type="tel" placeholder="Teléfono*" required pattern="number"/>
			<small class="error">Por favor, introduce tu número de teléfono</small>
		</div>

		<div class="small-12 large-4 columns">
			<input class="Inputs" id="InputPC" name="postalcode" type="number" placeholder="Código Postal" required pattern="number"/>
		</div>

		<div class="small-12 large-4 columns">
				<?php require_once('php/countries.php');?>				
		</div>

		<div class="small-12 columns">
			<label for="InputWeb">¿Tienes una página web?</label>
			<input class="Inputs" id="InputWeb" name="web" type="url" placeholder="http://">
		</div>

		<div class="small-12 columns">
			<label for="InputWeb">¿Has hecho alguna vez una campaña?</label>
			
			<div class="formRadio">
				
				<p><input type="radio" name="sem" value="avanzado" id="avanzado"><label for="avanzado">Sí, ya tengo una cuenta pero quiero mejorarla</label></p>
		  		<p><input type="radio" name="sem" value="medio" id="medio"><label for="medio">Lo probé pero no funciono</label></p>
		  		<p><input type="radio" name="sem" value="starter" id="starter"><label for="starter">Es mi primera vez</label></p>
				
			</div>

		</div>
	
		<div class="small-12 columns">
			<label for="InputComement">Cúentanos más sobre lo que necesitas</label>
			<textarea id="InputComment" class="Inputs" name="comment" 
			placeholder="De que presupuesto dispones, en que idioma sería tu campaña etc..."></textarea>
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