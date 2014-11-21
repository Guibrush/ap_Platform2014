
<!-- Form Publicidad - Promocional -->

<form data-abide="ajax" action="/comunidad-apuntate2.php" method="POST" id="FormPaginaPromocional">

	<!-- Info propia del form -->
	<input type="hidden" value="Solicitud-producto" id="InputContactType" name="contactType" />
	<input type="hidden" value="Plataforma" id="InputContactOrigin" name="contactOrigin" />
	<input type="hidden" value="Landing" id="InputContactSubOrigin" name="contactSubOrigin" />
	<input type="hidden" value="LA" id="InputContactSubID" name="contactSubID" />
	<input type="hidden" value="Pagina-promocional" id="InputCapturedProduct" name="contactCapturedProduct" />

	<!-- Datos personales -->

	<div class="row u-separationMedium">

		<div class="small-12 large-8 columns">
			<div class="row collapse">
				<div class="small-2 columns">
					<span class="prefix"><span class="formIcon icon-users"></span></span>
				</div>
				<div class="small-5 columns">
					<input class="Inputs" id="InputName" name="name" type="text" placeholder="Nombre*" required />
				</div>
				<div class="small-5 columns">
					<input class="Inputs" id="InputSurName" name="surname" type="text" placeholder="Apellido*" required />
				</div>		
			</div>
			<small class="error">Por favor, introduce tu nombre</small>	
		</div>
		
		<div class="small-12 large-4 columns">
			
			<div class="row collapse">
				<div class="small-2 columns">
					<span class="prefix">@</span></span>
				</div>
				<div class="small-10 columns">
					<input class="Inputs" id="InputEmail" name="email" type="email" placeholder="Email*" required/>
				</div>			
			</div>
			<small class="error">Por favor, introduce tu email</small>
		</div>

		<div class="small-12 medium-12 large-4 columns">
			<div class="row collapse">
				<div class="small-2 large-3 columns">
					<span class="prefix"><span class="formIcon icon-users"></span></span>
				</div>
				<div class="small-10 large-9 columns">
					<input class="Inputs" id="InputTel" name="tel" type="tel" placeholder="Teléfono*" required pattern="number"/>
				</div>			
			</div>
			<small class="error">Por favor, introduce tu número de teléfono</small>	
		</div>

		<div class="small-12 medium-6 large-4 columns">
			<div class="row collapse">
				<div class="small-2 medium-3 columns">
					<span class="prefix"><span class="formIcon icon-users"></span></span>
				</div>
				<div class="small-10 medium-9 columns">
					<input class="Inputs" id="InputPC" name="postalcode" type="text" placeholder="Código Postal" required pattern="number"/>
				</div>			
			</div>
		</div>
		
		<div class="small-12 medium-6 large-4 columns">
			
			<?php require_once('php/countries.php');?>

		</div>

	</div>

	<!-- End Datos Personales -->





	<!-- Datos opcionales de empresa -->

	<div class="row formNegocio-container">

		<div class="small-12 columns">
	
			<div class="formNegocio-button">
				<div class="formNegocio-button-icon">
					<span class="icon-cancel-circle"></span>
				</div>
				<div class="formNegocio-button-text">
					Cuéntanos más para poder ayudarte mejor
				</div>					
			</div>

		</div>

		<div class="small-12 columns formNegocio-deplegable">
			<div class="formNegocio-deplegable-container">

				<div class="row">
					<div class="small-12 large-4 columns">
						<label for="InputWeb" class="inline">¿Tienes una página web?</label>
					</div>
					<div class="small-12 large-8 columns">
						<div class="row collapse">
							<div class="small-3 medium-2 columns">
								<span class="prefix">http://</span>
							</div>
							<div class="small-9 medium-10 columns">
								<input class="Inputs" id="InputWeb" name="web" type="text"/>
							</div>
							
						</div>
					</div>

					<div class="small-12 columns">
						<label for="asociatedProduct">¿Qué necesitas?</label>
						<select name="asociatedProduct" id="InputAsociatedProduct">
							<option value="pro">Quiero mejorar los resultados de mi página web</option>
							<option value="medium">Quiero hacer nuevas secciones o páginas promocionales</option>
							<option value="basic">Necesito construir una página desde cero</option>
						</select>
					</div>
					<div class="small-12 columns">
						<label for="InputComement">Cuéntanos más sobre lo que necesitas</label>
						<textarea id="InputComment" class="Inputs" name="comment" 
						placeholder="Ejemplos de webs que hayas visto etc..."></textarea>
					</div>
				</div>
				
			</div>
		</div>

	</div>

	<!-- End Datos opcionales de empresa -->

	<!-- LOPD -->
	
	<div class="row u-separationBig">
			
		<div class="small-12 columns">
			<?php require_once('php/forms/tratamiento-datos-personales.php') ?>					
		</div>
		<div class="small-12 columns">
			<input class="u-buttonStrong" id="FormButton" name="submit" type="submit" value="Enviar" />
		</div>

	</div>

	<!-- End LOPD -->

</form>