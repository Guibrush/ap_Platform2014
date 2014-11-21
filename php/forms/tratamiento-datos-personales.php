


<div class="row datosPersonales">
	<div class="small-12 columns datosPersonales-comunicaciones">
		<h5>Tratamiento de datos personales</h5>
		<p>Si te parece bien te enviaremos nuestras ofertas y promociones, por correo electrónico, 
		sms, etc. ¿Estás de acuerdo?</p>
		
		<input type="radio" name="publi" value="1" id="radioSi" required /><label for="radioSi">Sí</label>
  		<input type="radio" name="publi" value="0" id="radioNo" required /><label for="radioNo">No</label>
  		<small class="error">Indica uno u otro</small>	
	</div>

	<div class="small-12 columns datosPersonales-lopd">
		<input id="legalCheckbox" type="checkbox" name="clausula" maxlength="1" required />
			
			<span>He leído</span>
				<span class="datosPersonales-lopdLink">
					la cláusula de tratamiento de datos personales y la acepto
				</span>

		<small class="error">Debes aceptar las condiciones para poder seguir</small>	

		<div class="datosPersonales-lopdContent">										
			<figure class="right u-iconClose">
		        <img src="img/icon-close.png">
		    </figure>
			
			<div class="datosPersonales-lopdText">

			    <p>Mediante la cumplimentación voluntaria de este formulario autorizas que los 
		    	datos contenidos en el mismo sean incorporados a un fichero automatizado y almacenados y tratados 
		    	por Dreamplannner Marketing Digital S.L. para dirigirte ofertas comerciales de los productos y 
		    	servicios de la empresa y sus productos, informándote del carácter voluntario en la recogida de 
		    	datos y que tu no respuesta conlleva consecuencia negativa alguna. Podrás ejercitar los derechos 
		    	de oposición,acceso, rectificación y cancelación de tus datos, previstos en la L.O. 15/1999 de 13 
		    	de diciembre de Protección de Datos de Carácter Personal, remitiendo escrito a 
		    	Dreamplanner Marketing Digital S.L. Dpto. Marketing-Base de datos c/Canigo, 74, Local 3 (08031) 
		    	Barcelona, Barcelona, o a través del e-mail  
				<a href="mailto:bajas@dreamplanner.es">bajas@dreamplanner.es</a>.</p>
				<p>
					<!-- Ni obligatorio ni requerido, solo si lo quiere marcar -->
					<input id="clauseCheckbox" type="checkbox" name="clausula" maxlength="1" onclick="changeClausula(this,'pnautorizo')">

				Selecciona esta casilla en caso de no desear que tales datos sean recogidos o 
				cedidos en la forma y con las finalidades mencionadas.</p>
			</div>
			
		</div>

	</div>
	
</div>