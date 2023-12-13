<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('container-fluid my-5 py-5'); ?>>
	<!-- Sección Cards con Api rest -->
	<section class="flex-cards my-5 py-5">
		<article id="relacionadas" class="options">
		</article>
	</section>
	<div class="d-flex justify-content-center">
		<button id="botoncillo" type="button" class="btn btn-warning mx-auto">Ver más</button>
	</div>
	
	<section class="mx-auto">
		<article id="contenedor-tarjetas" class="options mx-auto my-5">
		</article>
	</section>
		
	<!-- Sección panel de controles-->
	
		<div class="page">
			<nav class="fs-1 dock col-md-2 col-sm-4">
				<ul class="ms-0">
					<li class="app ms-3">
						<a href="http://localhost/ayllu/"><i class="fa-solid fa-archway "></i>
						<span class="tooltip">Inicio</span></a>
					</li>
					<li class="app">
						<a href="http://localhost/ayllu/aylludev/"><i class="fa-sharp fa-solid fa-sun"></i>
						<span class="tooltip">AylluDev</span></a>
					</li>
					<li class="app">
						<a href=""><i class="fa-regular fa-star-half-stroke "></i><span class="tooltip">Yapa</span></a>
					</li>
					<li class="app">
						<a href=""><i class="fa-solid fa-puzzle-piece "></i><span class="tooltip">Viaje del Chasqui</span></a>
					</li>
				</ul>
			</nav>
		</div>
		
	
		
</section><!-- #post-<?php the_ID(); ?> -->
