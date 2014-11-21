<!DOCTYPE html>
<html lang="es">

<?php

	$title = "Página promocional";
	$description = "Dale visibilidad a tus ofertas y productos con textos claros, imágenes de calidad y ofertas irresistibles desde 1€ al día*";

	require_once('php/head.php');
?>

	<body>

		<?php require_once('php/menu.php');?>

		<section class="paginaPromocional u-backgroundImage u-menuSeparation-desk">

			<div class="row">
				
				<div class="small-12 large-5 large-push-7 columns u-menuSeparation-mobile">
					<figure id="paginaPromocionalMain-figure">
						<img src="img/pagina-promocional/imagen.png" alt="">
					</figure>
				</div>
					
				<article class="small-12 large-7 large-pull-5 columns u-paddingNone">

					<div class="u-mainText">
						<h3>Rentabiliza tus campañas con una página promocional</h3>
						<h1>Tus clientes tienen poco tiempo para decidir.</br>¡Pónselo fácil!</h1>
						<p>Dale visibilidad a tus ofertas y productos con textos claros, imágenes de 
						calidad y ofertas irresistibles <strong>desde 1€ al día*</strong></p>
						
						<div class="row">
							<div class="small-12 medium-6 columns">
								<ul class="u-listNoMargin u-textSmall">
									<li>Diseño personalizado</li>
									<li>100% visible en todos los dispositivos</li>
									<li>Formularios integrados</li>
								</ul>
							</div>

							<div class="small-12 medium-6 columns">
								<ul class="u-listNoMargin u-textSmall">
									<li>Optimizada en SEO</li>
									<li>Consigue nuevos clientes</li>
									<li>Hosting y dominio incluido</li>
								</ul>
							
							</div>

							<div class="small-12 columns">
								
								<a class="u-buttonStrong-main u-buttonMain-mobile" href="#" data-reveal-id="myModal">
									Lanza tu nueva web <span class="icon-play"></span>
								</a>
								
							</div>
							
							<p class="u-textSmall u-condiciones-mobile" href="#">Condiciones de la oferta</p>
							
								
							<div id="myModal" class="reveal-modal large" data-reveal>
								<div class="center"></div>
									<h2>Ponte en contacto con activatupyme</h2>
									<p>En menos de 24h empezaremos a prepararemos juntos una propuesta para tu página web</p>
									<?php require_once('php/forms/form-landing-promocional-test.php') ?>
								<a class="close-reveal-modal">&#215;</a>
							</div>

						</div>
					</div>

					<a class="u-buttonMain-desk" href="#" data-reveal-id="myModal">
						Lanza tu nueva web <span class="icon-play"></span>
					</a>
					
					<p class="u-textSmall u-condiciones-desk" href="#">Condiciones de la oferta</p>

				</article>
			</div>

		</section>
		
		<a name="Features"></a>
			
			<?php 
				$conditions = "La oferta de 1€ al día supone un precio final del servicio de 365€ + IVA, 
				que deberá abonarse en dos pagos, 50% al inicio del servicio y 50% a la entrega del proyecto, 
				en los plazos acordados con el cliente. El site estará vigente 12 meses aunque su publicación 
				pueda interrumpirse según necesidad o cuando el cliente lo desee. El precio final incluye la 
				creación de un site estático con contenido libre de derechos de autor y/o de reprodución, o 
				facilitado por el usuario y un pack de hosting y dominio básico, que puede variar por requisitos 
				del site, tráfico esperado o a petición del cliente. En ningún caso incluye mantenimiento posterior 
				a la entrega, que podrá negociarse con condiciones ajustadas a cada cliente según necesidad. 
				Oferta válida hasta 31/12/2014. Si tienes otros requerimientos o necesitas otro tipo de plan 
				escribe a";
				
				require('php/legal/offer-conditions.php') 
			?>

		<section class="mainFeature">

			<div class="row u-borderBottom u-separationBig">
				<div class="small-12 medium-7 columns">
					<h2>Apuesta sobre seguro</h2>
					<p>¿Sabías que puedes perder más del 80% de tus visitas si no escoges la página de destino 
					adecuada para tus campañas? </p>
					<p>Dales a tus visitantes lo que buscan con una <strong>página a medida, visible en todos los 
					dispositivos</strong> y que contenga una oferta clara con la que destacar de tu competencia.</p>
				</div>
				<div class="small-12 medium-5 columns text-center">
					<p class="mainFeature-data"><span>80</span>%</p>
				</div>
				<div class="small-12 columns">					
					<a class="u-buttonLight" href="#" data-reveal-id="myModal">Empezar ahora <span class="icon-play"></a>
				</div>
			</div>

		</section>

		<section>
			<article class="row u-fullWidth u-separationBig">
				<div class="small-12 medium-6 columns featureImage-mobile">

					<figure>
						<img src="img/pagina-promocional/landing-mobile.png" alt="">
					</figure>

				</div>

				<div class="small-12 medium-6 columns featureImage-desk u-paddingNone">
					<figure>
						<img class="featureImage left" src="img/pagina-promocional/landing-desk.png" alt="">
					</figure>
				</div>

				<div class="small-12 medium-6 columns">
					<div class="featureText-right">
						<h3 class="featureTitle-light">Escoge tus productos o servicios estrella y haz que destaquen</h3>
						<p>Tanto si ya tienes una página web como si empiezas de cero, una página promocional es una forma
							<strong>fácil y asequible </strong>de dar a conocer tus ofertas a tus futuros clientes.</p>
							<p>Sólo cuéntanos con tus palabras cuál es tu idea y juntos decidiremos el diseño, los contenidos 
							y las ofertas. ¡Nosotros nos ocuparemos del resto!</p>
						<a class="u-buttonLight" href="#" data-reveal-id="myModal">Hablemos de tu nueva página <span class="icon-play"></span></a>
					</div>					
				</div>


			</article>

			<article class="row u-separationBig paginaPromocionalCaptation-mobile">
				<div class="small-12 columns">
					<h2>Consigue nuevos clientes y fideliza a tu público</h2>
					<p>Como sabes en internet cada visita cuenta para generar nuevas oportunidades.</p>
					<figure class="u-separationBig">
						<img src="img/pagina-promocional/form-mobile.png" alt="">
					</figure>
					<p>Por eso, <strong>integraremos sin coste adicional formularios personalizados</strong> para que crees una 
					base de contactos a los que después poder ofrecer tus servicios, enviar un <strong>emailing promocional</strong> 
					 o simplemente informarles de las novedades en tu negocio.</p>
					<a class="u-buttonLight" href="#" data-reveal-id="myModal">Aumenta tus contactos <span class="icon-play"></span></a>
				</div>
			</article>

			
			<article class="row u-fullWidth u-separationBig paginaPromocionalCaptation-desk">
				<div class="large-6 columns">
					<figure>
						<img src="img/pagina-promocional/form-iphone.png" alt="">
					</figure>
					
				</div>

				<div class="large-6 columns u-paddingNone">
					<figure class="featureImage right">
						<img src="img/pagina-promocional/form-users.png" alt="">
					</figure>
					
				</div>

				<div class="pagianPromocional-textTop">
					<h2>Consigue nuevos clientes y fideliza a tu público</h2>
					<p>Como sabes en internet cada visita cuenta para generar nuevas oportunidades. 
					Por eso, <strong>integraremos sin coste adicional formularios personalizados</strong> para que crees una 
					base de contactos</p>
				</div>
				
				<div id="lineArrow">
					<div id="line"></div>
					<div id="arrow"></div>
				</div>
				

				<div class="pagianPromocional-textBottom">
					<p>Después podrás ofrecerles tus servicios, enviar un <strong>emailing promocional</strong> 
					 o simplemente informarles de las novedades en tu negocio.</p>
					<a class="u-buttonLight" href="#" data-reveal-id="myModal">Aumenta tus contactos <span class="icon-play"></span></a>
				</div>
			</article>

			<article class="row u-fullWidth u-separationBig">
				<div class="small-12 medium-6 columns featureImage-mobile">

					<figure>
						<img src="img/pagina-promocional/mide-mobile.png" alt="">
					</figure>

				</div>

				<div class="small-12 medium-6 columns featureImage-desk u-paddingNone">
					<figure>
						<img class="featureImage left" src="img/pagina-promocional/mide-desk.png" alt="">
					</figure>
				</div>

				<div class="small-12 medium-6 columns">
					<div class="featureText-right">
						<h3 class="featureTitle-light">Define tus objetivos y mide tus resultados</h3>
						<p>Todas las páginas que creemos juntos tienen incoporados informes que te permitirán 
						saber qué funciona y qué debes cambiar. Lanza una propuesta comercial, testéala y 
						modificala tantas veces como quieras.</p>
						<p>La mejor forma de saber si algo funciona es probarlo 
						asi que ¿a qué esperas para hacer tu primer lanzamiento? Nosotros estamos preparados 
						para darte un informe detallado que sirva para lanzar tus ventas.</p>
						
						<a class="u-buttonLight" href="#" data-reveal-id="myModal">Apuesta sobre seguro <span class="icon-play"></span></a>
					</div>
				</div>
			</article>

			<article class="row paginaPromocionalPlanes-mobile">
				<div class="small-12 medium-6 columns u-paddingNone">
					
					<h2>Un mantenimiento económico y flexible</h2>

					<figure>
						<img src="img/pagina-promocional/mantenimiento.png" alt="">
					</figure>

					<p>Escoge tu plan y edita tu página tantas veces como necesites en tiempo récord.
					Tanto si necesitas actualización diaria o mensual como si vas a hacer cambios 
					sólo de vez en cuando, tenemos un plan económico que te dará la libertad y autonomía 
					que buscas para tu página.</p>	

				</div>

			</article>

			<article class="row u-fullWidth paginaPromocionalPlanes-desk u-backgroundImage">
				<div class="small-12 medium-6 columns">
					<div class="featureText-left">
						<h2>Un mantenimiento económico y flexible</h2>
						<p>Escoge tu plan y edita tu página tantas veces como necesites en tiempo récord.
						Tanto si necesitas actualización diaria o mensual como si vas a hacer cambios 
						sólo de vez en cuando, tenemos un plan económico que te dará la libertad y autonomía 
						que buscas para tu página.</p>						
					</div>
				</div>
				<div class="medium-6 columns">
					
				</div>

			</article>

			</div>

		</section>

		<section>
			<?php require_once('php/pricing-tables/pricing-pagina-promocional.php') ?>
		</section>

		<section class="crosseling u-borderTop u-separationBig">

			<div class="row">

				<?php require_once('php/crosseling/crosseling.php') ?>

				<?php require_once('php/crosseling/cross-emailing.php') ?>
				<?php require_once('php/crosseling/cross-redes.php') ?>
				<?php require_once('php/crosseling/cross-publicidad.php') ?>

			</div>

		</section>
		
		<?php require_once('php/footer-social.php') ?>
		<?php require_once('php/footer.php') ?>
		<?php require_once('php/scrips.php') ?>

	</body>
	
</html>