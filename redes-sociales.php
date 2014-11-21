<!DOCTYPE html>
<html lang="es">

<?php

	$title = "Redes Sociales";
	$description = "Únete y participa en las conversaciones de tus clientes";
	
	require_once('php/head.php');
?>

	<body>

		<?php require_once('php/menu.php');?>

		<section class="redes u-backgroundImage u-menuSeparation-desk">

			<div class="row">
				
				<div class="small-12 large-6 large-push-6 columns u-paddingNone u-menuSeparation-mobile">

					<figure id="redesMain-figure-mobile">
						<img src="img/redes/fondo.png" alt="">
					</figure>

					<figure id="redesMain-figure-tablet">
						<img src="img/redes/fondo.png" alt="">
					</figure>

				</div>
					
				<article class="small-12 large-6 large-pull-6 columns u-paddingNone">

					<div class="u-mainText">
						<h3>Tu empresa tiene vida social</h3>
						<h1>Únete y participa en las conversaciones</h1>
						
						<div class="row">
							<div class="small-12 columns">
								<ul class="u-listNoMargin">
									<li>Profesionaliza los perfiles sociales de tu empresa</li>
									<li>Aumenta la notoriedad y reputación de tu negocio</li>
									<li>Incrementa la efectividad de tu publicidad</li>
									<li>Genera nuevos contactos y añade seguidores con calidad</li>
									<li>Escucha la opinión tu público</li>
									<li>Disponible 24h y visible desde cualquier dispositivo</li>
								</ul>
							</div>
						
						<div class="small-12 columns">
								
							<a class="u-buttonStrong-main u-buttonMain-mobile" href="#" data-reveal-id="myModal">
								Crea tu perfil profesional <span class="icon-play"></span>
							</a>
							
						</div>
							
							<p class="u-textSmall u-condiciones-mobile" href="#">Condiciones de la oferta</p>

							<div id="myModal" class="reveal-modal large" data-reveal>
								<h2>Ponte en contacto con activatupyme</h2>
								<p>En menos de 24h definiremos tu nuevo perfil en redes sociales</p>
								<div class="center"></div>
									<?php require_once('php/forms/redesForm.php') ?>
								<a class="close-reveal-modal">&#215;</a>
							</div>

						</div>
					</div>

					<a class="u-buttonMain-desk" href="#" data-reveal-id="myModal">
						Crea tu perfil profesional <span class="icon-play"></span>
					</a>
					
					<p class="u-textSmall u-condiciones-desk" href="#">Condiciones de la oferta</p>

				</article>
			</div>

		</section>
		
		<a name="Features"></a>
			
			<?php 
				$conditions = "Los precios indicados no incluyen IVA y corresponden a la creación un perfil social 
				en una única red social. El servicio incluye alta, personalización y asesoría inicial, excluyendo 
				expresamente el mantenimiento periodico y cualquier servicio o responsabilidad asociada al posterior 
				mantenimiento de las mismas. La oferta no incluye adquisición de imágenes y, en caso de que el cliente 
				facilite sus propias imágenes, la responsabilidad sobre la calidad, procedencia legítima y vigencia 
				queda garantizada y toda responsabilidad al respecto será atribuida al cliente en exclusiva. Oferta 
				válida hasta 31/12/2014. Si tienes otros requerimientos o necesitas otro tipo de plan escribe a ";
				
				require('php/legal/offer-conditions.php') 
			?>

		<section class="mainFeature">

			<div class="row u-borderBottom u-separationBig">
				<div class="small-12 medium-7 columns">
					<h2>¡Se participe de la vida de tu publico!</h2>
					<p>¿Sabias qué más de un 80% de los españoles posee un perfil en las redes sociales?</p>

					<p>Crea el perfil social de tu empresa e incrementa su notoriedad y reputación, genera 
					nuevos contactos y comunica con tus seguidores <strong>desde 30€*</strong></p>

					
				</div>
				<div class="small-12 medium-5 columns text-center">
					<p class="mainFeature-data"><span>80</span>%</p>
				</div>
			</div>

		</section>

		<section>
				<article class="row u-fullWidth u-separationBig">
					<div class="small-12 medium-6 columns featureImage-mobile">

						<figure>
							<img src="img/redes/juega-mobile.png" alt="">
						</figure>

					</div>

					<div class="small-12 medium-6 columns">
						<div class="featureText-left">
							<h3 class="featureTitle-light">Tu Pyme también juega en las redes sociales</h3>
							<p>Si tu empresa todavía no dispone de una identidad social te ayudaremos a <strong>crear tus 
							perfiles en las redes afines a tu negocio</strong>, para que puedas generar nuevos contactos y 
							aumentar tu presencia en internet.</p>
							<p>Saca el máximo partido de tus perfiles en Twitter, Linkedin, Facebook, Pinterest o 
							Google+. Con la estrategia adecuada, podrás contar tu historia o promocionar tus productos 
							y servicios con esta potente herramienta de marketing <strong>sin costes añadidos.</strong></p>
							
							<a class="u-buttonLight" href="#" data-reveal-id="myModal">Únete al juego<span class="icon-play"></span></a>

						</div>					
					</div>

					<div class="small-12 medium-6 columns featureImage-desk u-paddingNone">
						<figure>
							<img class="featureImage right" src="img/redes/juega-desk.png" alt="">
						</figure>
					</div>

				</article>

				<article class="row u-separationBig redesComunicate-mobile">
					<div class="small-12 columns">
						<h2>Comunícate con las personas adecuadas</h2>
						<p>¡Hablar con alguien es más facil cuando tienes algo en común!</p>
						<figure class="u-separationBig">
							<img src="img/redes/comunicate-iphone-desk.png" alt="">
						</figure>
						<p>Haz que tus productos y servicios se promocionen en los perfiles de tus potenciales 
						clientes y genera nuevos contactos con una <strong>publicidad directa y personalizada</strong>. Rentabiliza 
						tu inversión publicitaria y obtén mejores resultados.</p>
						<a class="u-buttonLight" href="#" data-reveal-id="myModal">Rentabiliza tu inversión<span class="icon-play"></span></a>
					</div>
				</article>

				
				<article class="row u-fullWidth u-separationBig redesComunicate-desk">

					<div class="large-6 columns u-paddingNone">
						<figure class="featureImage left">
							<img src="img/redes/comunicate-desk.png" alt="">
						</figure>
						
					</div>

					<div class="large-6 columns">
						<figure class="redesComunicate-iphone-desk">
							<img src="img/redes/comunicate-iphone-desk.png" alt="">
						</figure>
						
					</div>

					<div class="redesComunicate-text-desk">
						<h2>Comunícate con las personas adecuadas</h2>
						<p>¡Hablar con alguien es más facil cuando tienes algo en común!</p>
						<p>Haz que tus productos y servicios se promocionen en los perfiles de tus potenciales 
						clientes y genera nuevos contactos con una <strong>publicidad directa y personalizada</strong>. Rentabiliza 
						tu inversión publicitaria y obtén mejores resultados.</p>
						<a class="u-buttonLight" href="#" data-reveal-id="myModal">Rentabiliza tu inversión<span class="icon-play"></span></a>
					</div>
				</article>

				<article class="row u-fullWidth u-separationBig">
					<div class="small-12 medium-6 columns featureImage-mobile">
						<figure>
							<img src="img/redes/escucha-mobile.png" alt="">
						</figure>
					</div>


					<div class="small-12 medium-6 columns">
						<div class="featureText-left">						
							<h3 class="featureTitle-light">Escuchar también es rentable</h3>
							<p>No hay mejor estudio de mercado que la opinión de un cliente.</p>
							<p>Los comentarios de tus seguidores y clientes te permiten medir su grado de satisfacción sobre 
							tus productos y servicios e identificar nuevas oportunidades de negocio. Escucha, aprende y 
							mantén al dia tu negocio.</p>
							
							<a class="u-buttonLight" href="#" data-reveal-id="myModal">¿Quieres saber que dicen de ti?<span class="icon-play"></span></a>
						</div>
					</div>

					<div class="small-12 medium-6 columns featureImage-desk u-paddingNone">
						<figure>
							<img class="featureImage right" src="img/redes/escucha-desk.png" alt="">
						</figure>
					</div>

				</article>

			</div>

		</section>

		<section class="crosseling u-borderTop u-separationBig">

			<div class="row">

				<?php require_once('php/crosseling/crosseling.php') ?>
			
				<?php require_once('php/crosseling/cross-emailing.php') ?>
				<?php require_once('php/crosseling/cross-pagina-promocional.php') ?>
				<?php require_once('php/crosseling/cross-publicidad.php') ?>

			</div>

		</section>

		<?php require_once('php/footer-social.php') ?>
		<?php require_once('php/footer.php') ?>
		<?php require_once('php/scrips.php') ?>

	</body>
	
</html>