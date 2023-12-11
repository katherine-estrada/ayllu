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
	<div class="text-end p-5 mt-5 lh-sm frase scroll">
		<p class="mt-5">Bienvenido a</p>
		<div class="d-flex align-items-center justify-content-end">
			<h1>Ayllu Dev</h1>
			<p class="ms-2">mi</p>
		</div>
		<span class="typed"></span><p>en Javascript avanzado</p>
	</div>
	<div>
		<nav class=" text-white fs-1 panel">
			<ul class="d-flex">
				<li>
					<a href=""><i class="fa-solid fa-archway my-3 ms-4 me-3"></i></a>
				</li>
				<li>
					<a href=""><i class="fa-sharp fa-solid fa-sun m-3"></i></a>
				</li>
				<li>
					<a href=""><i class="fa-regular fa-star-half-stroke m-3"></i></a>
				</li>
				<li>
					<a href=""><i class="fa-solid fa-puzzle-piece m-3"></i></a>
				</li>
			</ul>
		</nav>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
