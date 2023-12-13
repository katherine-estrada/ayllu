<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container my-5'); ?>>
	<div class="my-5">
		<h1 class="text-title">Desafíos</h1>
		<p class="mb-5">En esta sección, resalto dos valiosas lecciones aprendidas en cada desafío. </p>
	</div>
	
	<div class="row">
		<div class="col-12 col-md-7 me-3">
			<?php 
				$image = get_field('mapeo');
				if( !empty( $image ) ): ?>
				<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		
		</div>
		<div class="col-12 col-md-4 px-3 pt-3">
			<p><?php the_field('texto_mapeo');?></p>
			<?php 
				$image = get_field('ejemplo_mapeo');
				if( !empty( $image ) ): ?>
				<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</div>

	</div>
	<div class="row">
		<div class="col-12 col-md-7 me-3">
			<?php 
				$image = get_field('estadistica');
				if( !empty( $image ) ): ?>
				<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		
		</div>
		<div class="col-12 col-md-4 px-3 pt-3">
			<p><?php the_field('texto_estadistica');?></p>
			
		</div>

	</div>

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
						<a href="http://localhost/ayllu/viaje-del-chasqui/"><i class="fa-solid fa-puzzle-piece "></i><span class="tooltip">Viaje del Chasqui</span></a>
					</li>
				</ul>
			</nav>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
