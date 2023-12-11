<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid p-0 m-0'); ?>>
	<div class="text-end p-5 mt-5 lh-sm frase">
		<p class="mt-5">Bienvenido a</p>
		<div class="d-flex align-items-center justify-content-end">
			<h1>Ayllu Dev</h1>
			<p class="ms-2">mi</p>
		</div>
		<span class="typed"></span><p>en Javascript avanzado</p>
	</div>
	<div class="d-flex justify-content-center text-white fs-1">
	<i class="fa-sharp fa-solid fa-sun"></i>
	<i class="fa-regular fa-star-half-stroke"></i>
	<i class="fa-solid fa-puzzle-piece"></i>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
