

<form data-abide="ajax" action="/comunidad-apuntate2.php" method="POST" id="FormAbide">

	<div class="row">

		<div class="small-12 columns">
			<h4>Sobre ti</h4>
			<p>Crea tu perfil y ponte en contacto con otros profesionales</p>	
		</div>

		<div class="small-12 large-4 columns">
			<input class="Inputs" id="InputName" name="name" type="text" placeholder="Nombre*" />
			<small class="error">Por favor, introduce tu nombre</small>
		</div>

		<div class="small-12 large-8 columns">
			<input class="Inputs" id="InputSurName" name="surname" type="text" placeholder="Apellidos*" />
			<small class="error">Por favor, introduce tus apellidos</small>
		</div>

		<div class="small-12 large-8 columns">
			<input class="Inputs" id="InputEmail" name="email" type="email" placeholder="Email*" />
			<small class="error">Por favor, introduce tu email</small>
		</div>

		<div class="small-12 large-4 columns">
			<input class="Inputs" id="InputTel" name="tel" type="tel" placeholder="Teléfono*" />
						<small class="error">Por favor, introduce tu número de teléfono</small>
		</div>

		<div class="small-12 large-4 columns">
			<input class="Inputs" id="InputPC" name="postalcode" type="number" placeholder="Código Postal" />
			<small class="error">Si estás en España, indicanos tu código postal.</small>			
		</div>

		<div class="small-12 large-8 columns">
			<?php require_once('php/countries.php');?>				
		</div>

	</div>

	<div class="row u-separationBig">
		
		<div class="small-12 columns">
			<h4>Sobre tu negocio</h4>
			<p>Incluye tu logo, nombre comercial y dinos por qué eres especial</p>	
		</div>
		
		<div class="small-12 large-4 columns">
			<input class="Inputs" id="InputCompanyName" name="companyname" type="text" placeholder="Nombre*" />
			<small class="error">¿Cual es tu empresa?</small>
		</div>

		<div class="small-12 large-8 columns">
			<input class="Inputs" id="InputCompanyLogo" name="company" type="text" placeholder="Sube una imagen"/>
		</div>

		<div class="small-12 columns">
			<label for="InputComement">Cuéntanos a qué te dedicas</label>
			<textarea id="InputComment" class="Inputs" name="comment" 
			placeholder="Dínos cuál es tu producto o servicio estrella y sobre todo empieza a compartir los temas que te preocupan."></textarea>
		</div>
								
	</div>

	<?php require_once('php/forms/tratamiento-datos-personales.php') ?>					


		<a href="comunidad-apuntate2.php#conocimiento" class="u-buttonStrong" id="FormButton" name="submit" type="submit" value="Apúntate gratis">Apuntate</a>


</form>