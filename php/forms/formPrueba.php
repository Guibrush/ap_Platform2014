
<!-- Formulario tipo con todos los campos -->


<form data-abide="ajax" action="/comunidad-apuntate2.php" method="POST" id="formPrueba">

	<div class="row">

		<!-- name = Nombre de la persona  -->

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputName" name="name" type="text" placeholder="Nombre*" required pattern="[a-zA-Z]+"/>
			<small class="error">Por favor, introduce tu nombre</small>
		</div>



		<!-- surname = Apellidos  -->

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputSurName" name="surname" type="text" placeholder="Apellidos*" required pattern="[a-zA-Z]+"/>
			<small class="error">Por favor, introduce tus apellidos</small>
		</div>


		<!-- personal-email = El email del usuario o empresa (por defecto personal) -->

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputEmail" name="email" type="email" placeholder="Email*" required />
			<small class="error">Por favor, introduce tu email</small>
		</div>



		<!-- tel1 = El telefono del usuario o empresa  -->

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputTel" name="tel" type="tel" placeholder="Teléfono*" required pattern="number" />
			<small class="error">Por favor, introduce tu número de teléfono</small>
		</div>



		<!-- direction = Campo de texto libre con la dirección  -->

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputAdress" name="adress" type="text" placeholder="Dirección" />
		</div>

		

		<!-- country = Por defecto españa selecciona de un combo  -->

		<div class="small-12 large-6 columns">
			<?php require_once('php/countries.php');?>				
		</div>



		<!-- comercial-name = Solo en el caso de España, las cifras del codigo postal  -->

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputComercial" name="comercial" type="text" placeholder="El nombre de tu empresa o proyecto" />
		</div>



		<!-- comment = Campo de texto, el típico comentarios  -->

		<div class="small-12 columns">
			<label for="InputComement">Cuéntanos a qué te dedicas</label>
			<textarea id="InputComment" class="Inputs" name="comment" 
			placeholder="Dínos cuál es tu producto o servicio estrella y sobre todo empieza a compartir los temas que te preocupan.">
			</textarea>
		</div>



		<!-- contact-web = La URL de la página del contacto  -->

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputWeb" name="web" type="url" placeholder="http://" />
		</div>



		<!-- contact-facebook, contact-linkedin, contact-twitter = La URL de la red social del usuario del contacto  -->

		<div class="small-12 columns">

			<label>Indica la dirección de tus redes sociales</label>

			<div class="small-4 columns">
				<div class="row">
					<div class="small-4 columns">
						<span class="icon-facebook"></span>
					</div>
					<div class="small-8 columns">
						<input class="Inputs" id="InputFacebook" name="facebook" type="url" placeholder="http://" />
					</div>
				</div>
			</div>

			<div class="small-4 columns">
				<div class="row">
					<div class="small-4 columns">
						<span class="icon-linkedin"></span>
					</div>
					<div class="small-8 columns">
						<input class="Inputs" id="InputLinkedin" name="linkedin" type="url" placeholder="http://" />
					</div>
				</div>
			</div>

			<div class="small-4 columns">
				<div class="row">
					<div class="small-4 columns">
						<span class="icon-twitter"></span>
					</div>
					<div class="small-8 columns">
						<input class="Inputs" id="InputTwitter" name="twitter" type="url" placeholder="http://" />
					</div>
				</div>
			</div>
		</div>



		<!-- captured-segment = La frase escogida entre el combo. Luego se casignara como pro/medium/basic  -->
		
		<div class="small-12 large-6 columns">
			<select name="segment" id="InputSegment">
				<option value="pro">Si, ya se de que va todo esto</option>
				<option value="medium">Bueno, lo probe alguna vez pero...</option>
				<option value="basic">Ni idea, virgen como el aceite de oliva</option>
			</select>
		</div>



		<!-- contact-db-check = Si tiene bd que cantidad  -->

		<!-- A REVISAR -->

		<!--<div class="small-12 large-6 columns">
			<select name="segment" id="InputSegment">
				<option value="pro">Si, ya se de que va todo esto</option>
				<option value="medium">Bueno, lo probe alguna vez pero...</option>
				<option value="basic">Ni idea, virgen como el aceite de oliva</option>
			</select>
		</div>-->



		<!-- discount-code = De momento un codigo para todos  -->

		<div class="small-12 large-6 columns">
			<input class="Inputs" id="InputCode" name="code" type="text" placeholder="Introduce tu codigo de descuento" />
		</div>
								

		<!-- Clausula de tratamiento de datos personales -->

		<div class="row datosPersonales">
			<div class="small-12 columns datosPersonales-comunicaciones">
				<h4>Tratamiento de datos personales</h4>
				<p class="u-textSmall">Si te parece bien te enviaremos nuestras ofertas y promociones, por correo electrónico, 
				sms, etc. ¿Estás de acuerdo?</p>
				
				<!-- Inputs de si o no, requerido uno de los dos -->
				<input type="radio" name="publi" value="1" id="radioSi" required /><label for="radioSi">Sí</label>
		  		<input type="radio" name="publi" value="0" id="radioNo" required /><label for="radioNo">No</label>
		  		<small class="error">Indica uno u otro</small>

			</div>

			<div class="small-12 columns datosPersonales-lopd">
				<p class="u-textSmall">

					<!-- Campo obligatório, si no lo marca, no se envia un carajo -->
					<input id="legalCheckbox" type="checkbox" name="clausula" maxlength="1" required />
						He leído 
							<span class="datosPersonales-lopdLink">
								la cláusula de tratamiento de datos personales y la acepto
							</span>
					<small class="error">Debes aceptar las condiciones para poder seguir</small>			

				</p>

				<div class="datosPersonales-lopdContent">

					<figure class="right u-iconClose">
				        <img src="img/icon-close.png">
				    </figure>
					
					<div class="datosPersonales-lopdText">

					    <p class="u-textSmall">Mediante la cumplimentación voluntaria de este formulario autorizas que los 
				    	datos contenidos en el mismo sean incorporados a un fichero automatizado y almacenados y tratados 
				    	por Dreamplannner Marketing Digital S.L. para dirigirte ofertas comerciales de los productos y 
				    	servicios de la empresa y sus productos, informándote del carácter voluntario en la recogida de 
				    	datos y que tu no respuesta conlleva consecuencia negativa alguna. Podrás ejercitar los derechos 
				    	de oposición,acceso, rectificación y cancelación de tus datos, previstos en la L.O. 15/1999 de 13 
				    	de diciembre de Protección de Datos de Carácter Personal, remitiendo escrito a 
				    	Dreamplanner Marketing Digital S.L. Dpto. Marketing-Base de datos c/Canigo, 74, Local 3 (08031) 
				    	Barcelona, Barcelona, o a través del e-mail  
						<a href="mailto:bajas@dreamplanner.es">bajas@dreamplanner.es</a>.</p>
						<p class="u-textSmall">

							<!-- Ni obligatorio ni requerido, solo si lo quiere marcar -->
							<input id="clauseCheckbox" type="checkbox" name="clausula" maxlength="1" onclick="changeClausula(this,'pnautorizo')">

						Selecciona esta casilla en caso de no desear que tales datos sean recogidos o 
						cedidos en la forma y con las finalidades mencionadas.</p>
					</div>
					
				</div>

			</div>
			
		</div>

		<input class="u-buttonStrong" id="FormButton" name="submit" type="submit" value="Apúntate gratis" />

	</div>

</form>