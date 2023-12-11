<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('container-fluid p-0 m-0');  ?>>
<article style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id ($post->ID));?>'); min-height: 100vh; background-position: center; background-size:cover;">


	<div class="text-end p-5 mt-5 lh-sm frase scroll">
		<p class="mt-5">Bienvenido a</p>
		<div class="d-flex align-items-center justify-content-end">
			<h1>Ayllu Dev</h1>
			<p class="ms-2">mi</p>
		</div>
		<span class="typed"></span><p>en Javascript avanzado</p>
	</div>
	<div class="page">
		<nav class="fs-1 dock col-md-2 col-sm-4">
			<ul class="ms-0">
				<li class="app ms-3">
					<a href=""><i class="fa-solid fa-archway "></i>
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
	</article>
</section><!-- #post-<?php the_ID(); ?> -->
