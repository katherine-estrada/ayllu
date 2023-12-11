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
	<div class="page">
		<nav class="fs-1 dock col-md-2 col-sm-4">
			<ul>
				<li>
					<a href=""><i class="fa-solid fa-archway"></i></a>
				</li>
				<li>
					<a href=""><i class="fa-sharp fa-solid fa-sun"></i></a>
				</li>
				<li>
					<a href=""><i class="fa-regular fa-star-half-stroke "></i></a>
				</li>
				<li>
					<a href=""><i class="fa-solid fa-puzzle-piece "></i></a>
				</li>
			</ul>
		</nav>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
