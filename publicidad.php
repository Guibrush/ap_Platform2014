<!DOCTYPE html>
<html lang="es">

<?php

	$title = "Publicidad";
	$description = "Aparece en las mejores posiciones justo cuando se busque el producto o servicio que ofreces.";

	require_once('php/head.php');
?>

	<body>

		<?php require_once('php/menu.php');?>

		<section class="publicidad u-backgroundImage u-menuSeparation-desk">
			
			<div class="row">
				
				<div class="small-12 large-5 large-push-7 columns text-center u-menuSeparation-mobile">
					<figure id="publicidadMain-figure">
						<img src="img/publicidad/publicidad.png" alt="">
					</figure>
				</div>

				<article class="small-12 large-7 large-pull-5 columns u-paddingNone">
					<div class="u-mainText">
						<h3>Publica tu anuncio profesional hoy mismo</h3>
						<h1>Tus clientes te buscan en Google</br> ¡Deja que te encuentren!</h1>
						<p><?= $description; ?></p>
						
						<div class="row">
							<div class="small-12 medium-6 columns">
								<ul class="u-listNoMargin u-textSmall">
									<li>Promociona tus productos y servicios</li>
									<li>Disponible 24h y visible desde cualquier dispositivo</li>
									<li>Date a conocer en tu ciudad</li>
								</ul>
							</div>

							<div class="small-12 medium-6 columns">
								<ul class="u-listNoMargin u-textSmall">
									<li>Controla tu inversión y comprueba los resultados</li>
									<li>Consigue nuevos clientes</li>
									<li>Con total seguridad y sin compromiso</li>
								</ul>
							</div>
							
							<div class="small-12 columns">
								
								<a class="u-buttonStrong-main u-buttonMain-mobile" href="#" data-reveal-id="myModal">
									Consigue la primera posición <span class="icon-play"></span>
								</a>
								
							</div>
							
							<p class="u-textSmall u-condiciones-mobile" href="#">Condiciones de la oferta</p>

							<div id="myModal" class="reveal-modal large" data-reveal>
								<h2>Ponte en contacto con activatupyme</h2>
								<p>En menos de 24h prepararemos juntos una campaña desde sólo 5€ al día</p>
								<div class="center"></div>
									<?php require_once('php/forms/publiForm.php') ?>
								<a class="close-reveal-modal">&#215;</a>
							</div>

						</div>
					</div>

					<a class="u-buttonMain-desk" href="#" data-reveal-id="myModal">
						Consigue la primera posición <span class="icon-play"></span>
					</a>
					
					<p class="u-textSmall u-condiciones-desk" href="#">Condiciones de la oferta</p>

				</article>
			</div>

		</section>
		
		<a name="Features"></a>
			
			<?php 
				$conditions = "Los precios mostrados en la página son representativos de una actividad mínina y 
				deberán acordarse con cada cliente y baremarse según los costes reales que cada puja específica 
				requiera en Google. En cualquier caso, los costes directos de inversión se cargarán al cliente 
				sin ningún tipo de recargo y con total transparencia según las políticas de Google Adwords. El 
				coste mínimo de activacion y optimización del primer mes de servicio desde 90€ +IVA en concepto 
				de estudio y partura de cuenta y podrá variarse en acuerdo con el cliente dependiendo de la 
				complejidad de la cuenta. Oferta válida hasta 31/12/2014. Para cualquier duda sobre las condiciones 
				escribe a";
				
				require('php/legal/offer-conditions.php') 
			?>

		<section class="mainFeature">

			<article class="row u-borderBottom u-separationBig">
				<div class="small-12 medium-7 columns">
					<h2>Paga únicamente por los resultados</h2>
					<p>Las <strong>campañas de Google Adwords</strong> no tienen ningún compromiso ni permanencia. 
					Puedes iniciarlas y pararlas instantáneamente según te convenga. Además, muchas pymes 
					como la tuya tienen campañas exitosas con presupuestos <strong>desde tan sólo 5€ diarios</strong>.</p>				
				</div>
				<div class="small-12 medium-5 columns text-center">
					<p class="mainFeature-data">desde <span>5</span>€</p>
				</div>
				<div class="small-12 columns">					
					<a class="u-buttonLight" href="#" data-reveal-id="myModal">Empezar ahora <span class="icon-play"></a>
				</div>
			</article>

		</section>

		<section>
				<article class="row u-fullWidth u-separationBig">
					<div class="small-12 medium-6 columns featureImage-mobile">
						<figure>
							<img src="img/publicidad/busquedas.png" alt="">
						</figure>
					</div>

					<div class="small-12 medium-6 columns">
						<div class="featureText-left">
							<h3 class="featureTitle-light">Aparece en las búsquedas de tus clientes</h3>
							<p><strong>Los anuncios en Google son más eficaces</strong> porque aparecen cuando un usuario está
							 buscando en Google palabras relacionadas con tus productos o servicios.
							<p>Por ejemplo, si tienes una tienda especializada en vinos en  Madrid configuraremos 
						 	tu cuenta para que tus anuncios se muestren cuando alguien busque "recomendaciones 
						 	vino", "regalar vino" o "vinoteca Madrid"... Además, una vez configurada tu cuenta, 
						 	<strong>sólo pagarás cuando alguien haga clic en tu anuncio.</strong></p>
							<a class="u-buttonLight" href="#" data-reveal-id="myModal">Empezar ahora <span class="icon-play"></a>
						</div>					
					</div>

					<div class="small-12 medium-6 columns featureImage-desk u-paddingNone">
						<figure>
							<img class="featureImage right" src="img/publicidad/busquedas-desk.png" alt="">
						</figure>
					</div>

				</article>

				<article class="row publicidadFeatureBackground-mobile">
					
					<h2>Tu decides cuánto inviertes</h2>
					
					<div class="small-12 columns u-paddingNone">

						<figure>
							<img src="img/publicidad/decide.png" alt="">
						</figure>						

					</div>

					<div class="small-12 columns u-separationMedium">
						
						<p>Recuerda <strong>sólo pagarás por los clics en tus anuncios</strong>. Empieza con un presupuesto 
						diario mínimo que sirva para probar, por ejemplo <strong>5€ al día</strong>, y si es necesario, 
						ajústalo en un par de semanas.</p>
						<p>Tras conseguir las primeras visitas, desde activatupyme te recomendaremos una inversión 
						adecuada para tu negocio, siempre con los límites máximos que nos indiques.</p>

						<a class="u-buttonLight" href="#" data-reveal-id="myModal">Pruébalo desde 5€ al día <span class="icon-play"></a>

					</div>
				</article>
				
				<article class="u-backgroundImage u-separationBig publicidadFeatureBackground-desk">
					
					<div class="row">
						<div class="medium-6 columns"></div>
						<div class="medium-6 columns">
							<h2>Tu decides cuánto inviertes</h2>
							<p>Recuerda <strong>sólo pagarás por los clics en tus anuncios</strong>. Empieza con un presupuesto 
							diario mínimo que sirva para probar, por ejemplo <strong>5€ al día</strong>, y si es necesario, 
							ajústalo en un par de semanas.</p>
							<p>Tras conseguir las primeras visitas, desde activatupyme te recomendaremos una inversión 
							adecuada para tu negocio, siempre con los límites máximos que nos indiques.</p>
						</div>
						<div class="medium-12 columns">
							<a class="u-buttonStrong right" href="#" data-reveal-id="myModal">Pruébalo desde 5€ al día <span class="icon-play"></a>
						</div>
						
					</div>
				</article>

				<article class="row u-fullWidth u-separationBig">
					<div class="small-12 medium-6 columns featureImage-mobile">
						<figure>
							<img src="img/publicidad/mide-mobile.png" alt="">
						</figure>
					</div>

					<div class="small-12 medium-6 columns">
						<div class="featureText-left">						
							<h3 class="featureTitle-light">Mide tus resultados</h3>
							<p>La publicidad en Google sólo funciona si <strong>un profesional hace un seguimiento de los resultados.</strong></p>
							<p>Tanto si es tu primer anuncio, como si tienes una cuenta y quieres mejorar sus resultados, 
							nuestros servicios de mantenimiento <strong>multiplicaran los clics hacia tu página</strong> y rentabilizarán al 
							máximo la inversión de tus campañas.</p>
							
							<a class="u-buttonLight" href="#" data-reveal-id="myModal">Rentabiliza tu inversión <span class="icon-play"></a>
						</div>
					</div>

					<div class="small-12 medium-6 columns featureImage-desk u-paddingNone">
						<figure>
							<img class="featureImage right" src="img/publicidad/mide-desk.png" alt="">
						</figure>
					</div>
				</article>

				<article class="row u-separationBig">
					<div class="small-12 columns">
						<figure>
							<img src="img/publicidad/imagen-vinos.png" alt="">
						</figure>
					</div>

					<div class="small-12 columns publicidadFeature-banner">
						<h2 class>Tus anuncios de texto convertidos en banners con imágenes y animaciones</h2>
						<p>¿Sabías que por el mismo coste, además de aparecer en las búsquedas de Google <strong>tus anuncios se pueden convertir en banners </strong>?</p>
						<p>Así, mientras tus potenciales clientes navegan por su página favorita, tus productos y servicios se publcitarán con imágenes, 
						vídeos o incluso carruseles de ofertas.</p>
						<p>Ya puedes darte a conocer en miles de páginas web <strong>con el mismo control sobre tu presupuesto</strong> y con todas las opciones de 
						segmentación: escoge los intereses de tu público, las páginas más afines o incluso el momento y el lugar en el que quieres que tu empresa destaque.</p>
						
						<a class="u-buttonLight" href="#" data-reveal-id="myModal">Destaca tu anuncio <span class="icon-play"></a>
		
					</div>
				</article>
			</div>
		</section>
		
		<section class="crosseling u-borderTop u-separationBig">

			<div class="row">

				<?php require_once('php/crosseling/crosseling.php') ?>

				<?php require_once('php/crosseling/cross-pagina-promocional.php') ?>
				<?php require_once('php/crosseling/cross-emailing.php') ?>
				<?php require_once('php/crosseling/cross-redes.php') ?>

			</div>

		</section>

		<?php require_once('php/footer-social.php') ?>
		<?php require_once('php/footer.php') ?>
		<?php require_once('php/scrips.php') ?>

	</body>
	
</html>