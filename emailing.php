<!DOCTYPE html>
<html lang="es">

<?php

	$title = "Emaling";
	$description = "Ofrece a tus clientes lo que necesitan cuando lo necesitan y conseguirás que vuelvan.";
	
	require_once('php/head.php');
?>

	<body>

		<?php require_once('php/menu.php');?>

		<section class="emailing u-backgroundImage u-menuSeparation-desk">

			<div class="row">
				
				<div class="small-12 large-5 large-push-7 columns u-paddingNone u-menuSeparation-mobile">
					
					<figure id="emailingMain-figure-mobile">
						<img src="img/emailing/fondo-mobile.png" alt="">
					</figure>

					<figure id="emailingMain-figure-tablet">
						<img src="img/emailing/fondo-tablet.png" alt="">
					</figure>

				</div>
					
				<article class="small-12 large-7 large-pull-5 columns u-paddingNone">

					<div class="u-mainText">
						<h3>Comunica de forma eficaz tus ofertas, productos y servicios</h3>
						<h1>Tus novedades llegan al e-mail de tus clientes</h1>
						<p>Ofrece a tus clientes lo que necesitan cuando lo necesitan y conseguirás 
						que vuelvan.</p>
						
						<div class="row">
							<div class="small-12 medium-6 columns">
								<ul class="u-listNoMargin u-textSmall">
									<li>Diseño personalizado</li>
									<li>100% visible en todos los dispositivos</li>
								</ul>
							</div>

							<div class="small-12 medium-6 columns">
								<ul class="u-textSmall">
									<li>Económico y personalizable</li>
									<li>Resultados medibles e inmediatos</li>
								</ul>
														
							</div>
							<div class="small-12 columns">
									
								<a class="u-buttonStrong-main u-buttonMain-mobile" href="#" data-reveal-id="myModal">
									Envía tu emailing <span class="icon-play"></span>
								</a>
								
							</div>

							
							<p class="u-textSmall u-condiciones-mobile" href="#">Condiciones de la oferta</p>

							<div id="myModal" class="reveal-modal large" data-reveal>
								<h2>Ponte en contacto con activatupyme</h2>
								<p>En menos de 24h prepararemos juntos un emailing desde sólo 59€*</p>
								<div class="center"></div>
									<?php require_once('php/forms/form-landing-emailing.php') ?>
								<a class="close-reveal-modal">&#215;</a>
							</div>

						</div>
					</div>

					<a class="u-buttonMain-desk" href="#" data-reveal-id="myModal">
						Envía tu emailing <span class="icon-play"></span>
					</a>
					
					<p class="u-textSmall u-condiciones-desk" href="#">Condiciones de la oferta</p>

				</article>
			</div>

		</section>
		
		<a name="Features"></a>
			
			<?php 
				$conditions = "Los precios mostrados no incluyen IVA y se refieren exclusivamente a la 
				producción de creatividades de emailing estáticas con contenido libre de derechos de autor 
				y/o de reprodución o facilitado por el usuario. Incluyen un envío sin coste de hasta 3000 
				destinatarios mensuales. La oferta no incluye adquisición de bases de datos y, en caso de que 
				el cliente facilite su base de datos propia, la responsabilidad sobre la calidad, procedencia 
				legítima, vigencia y aceptación de terceros de los datos proporcionados queda garantizada y toda 
				responsabiliad al respecto será atribuida al cliente en exclusiva.  Oferta válida hasta 31/12/2014. 
				Si tienes otros requerimientos o necesitas otro tipo de plan escribe a ";
				
				require('php/legal/offer-conditions.php') 
			?>

		<section class="mainFeature">

			<article class="row u-borderBottom u-separationBig">
				<div class="small-12 medium-7 columns">
					<h2>Multiplica las opciones de llegar a tus clientes</h2>
					<p>Más del 60% de los e-mailings enviados se abren desde el móvil. Tus clientes pueden 
					recibir tus comunicaciones en cualquier momento y lugar. No pierdas esta oportunidad,
					 prepara tu campaña y empieza a probar sus beneficios <strong>desde tan sólo 59€*.</strong></p>

				
				</div>
				<div class="small-12 medium-5 columns text-center">
					<p class="mainFeature-data"><span>60</span>%</p>
				</div>
			</div>
		</section>

		<section>
			<article class="row u-fullWidth u-separationBig">
				<div class="small-12 medium-6 columns featureImage-mobile">
					<figure>
						<img src="img/emailing/emailing-mobile.png" alt="">
					</figure>
				</div>

				<div class="small-12 medium-6 columns">
					<div class="emailing-featureText-left">
						<h3 class="featureTitle-light">¿Conocen tus clientes realmente tu negocio?</h3>
						<p>Cuéntaselo tú mismo. Crearemos y enviaremos tu e-mailing a los diversos tipos de 
						contactos para transformar cada comunicación en oportunidades de negocio.
						<p>Compleméntalo, manteniendo informados a tus clientes y suscriptores de tus últimas 
						notícias y novedades con una newsletter semanal, mensual o cuando tú decidas.</p>
						<a class="u-buttonLight" href="#" data-reveal-id="myModal">Date a conocer <span class="icon-play"></span></a>
					</div>					
				</div>

				<div class="small-12 medium-6 columns featureImage-desk u-paddingNone">
					<figure>
						<img class="featureImage right" src="img/emailing/emailing-desk.png" alt="">
					</figure>
				</div>

			</article>


			<!-- Copied article from publicidad.php -->

			<article class="row publicidadFeatureBackground-mobile">
					
				<h2>Un mensaje para cada tipo de cliente</h2>
				
				<div class="small-12 columns u-paddingNone">

					<figure>
						<img src="img/publicidad/mensaje-mobile.jpg" alt="">
					</figure>						

				</div>

				<div class="small-12 columns u-separationMedium">
					
					<p>¡A todos nos gusta recibir información sobre algo que nos resulta útil!</p>
					
					<p>Te ayudamos  a analizar y separar tus contactos para adaptar tu mensaje y 
					hacer que cada impacto sea rentable. Mientras tanto, tu podrás centrarte en lo 
					más importante, hacer crecer tu negocio.</p>

					<a class="u-buttonLight" href="#" data-reveal-id="myModal">Personaliza tus mensajes <span class="icon-play"></span></a>

				</div>
			</article>
			
			<article class="u-backgroundImage u-separationBig publicidadFeatureBackground-desk">
				
				<div class="row">
					<div class="medium-6 columns"></div>
					<div class="medium-6 columns">
						<h2>Un mensaje para cada tipo de cliente</h2>
						<p>¡A todos nos gusta recibir información sobre algo que nos resulta útil!</p>
					
						<p>Te ayudamos  a analizar y separar tus contactos para adaptar tu mensaje y 
						hacer que cada impacto sea rentable. Mientras tanto, tu podrás centrarte en lo 
						más importante, hacer crecer tu negocio.</p>

					</div>
					<div class="medium-12 columns">
						<a class="u-buttonStrong right" href="#" data-reveal-id="myModal">Personaliza tus mensajes <span class="icon-play"></span></a>
					</div>
					
				</div>
			</article>

			<!-- End Copied article from publicidad.php -->
							

			<article class="row u-fullWidth u-separationBig">
				<div class="small-12 medium-6 columns featureImage-mobile">
					<figure>
						<img src="img/emailing/reporte-mobile.png" alt="">
					</figure>
				</div>

				<div class="small-12 medium-6 columns">
					<div class="emailing-featureText-left">
						<h3 class="featureTitle-light">Mide tus resultados</h3>
						<p>¡Tan sólo se puede mejorar si sabemos lo que mejor funciona!</p>
						<p>Todos tus envíos incluyen informes y análisis especializados que te permitirán obtener 
						la máxima rentabilidad y mejorar tus próximas acciones.</p>
						
						<a class="u-buttonLight" href="#" data-reveal-id="myModal">Apuesta sobre seguro <span class="icon-play"></span></a>
					</div>
				</div>

				<div class="small-12 medium-6 columns featureImage-desk u-paddingNone">
					<figure>
						<img class="featureImage right" src="img/emailing/reporte-desk.png" alt="">
					</figure>
				</div>

			</article>

			<article class="row u-separationBig">

				<div class="small-12 columns">						
					<h2>¿Estás preparado para contactar con personas interesadas en tus productos?</h2>
					<p>Multiplicar las posibilidades de que tu pyme sea un éxito es fácil si utilizas 
					correctamente las herramientas básicas que ofrece internet.</p>
					<p>En activatupyme somos expertos en marketing digital y queremos ayudarte a que des el 
					salto digital ofreciendote paquetes sencillos, asequibles y personalizados que sirva para 
					relanzar tus ventas.un plan económico que te dará la libertad y autonomía que buscas para tu página.</p>
				</div>
				
			</article>

		</section>

		<section>
			<?php require_once('php/pricing-tables/pricing-pagina-emailing.php') ?>
		</section>

		<section class="crosseling u-borderTop u-separationBig">

			<div class="row">

				<?php require_once('php/crosseling/crosseling.php') ?>

				<?php require_once('php/crosseling/cross-pagina-promocional.php') ?>
				<?php require_once('php/crosseling/cross-redes.php') ?>
				<?php require_once('php/crosseling/cross-publicidad.php') ?>

			</div>

		</section>
		
		<?php require_once('php/footer-social.php') ?>
		<?php require_once('php/footer.php') ?>
		<?php require_once('php/scrips.php') ?>

	</body>
	
</html>