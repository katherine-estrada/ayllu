<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="mt-5 mb-5 container">
		<nav class="mt-5 mb-5 miga" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
			<ol class="breadcrumb ms-0">
				<li class="breadcrumb-item"><a href="#"></a>Inicio</li>
				<li class="breadcrumb-item active name-comunicado" aria-current="page"><?php the_title(); ?></li>
			</ol>
		</nav>
	</div>
	<article class="row interior-card" id="contenido-dinamico">
<a href=""></a>
		<div class="col-12 col-md-8">
		<div class="col-lg-8 col-md-12 pe-lg-5 pe-md-0 pe-0">
				<h2 class="comunicados-single mb-5"><?php the_title();?></h2>
				<?php the_content();?>
			</div>
		</div>
		<div class="col-12 col-md-4">

		</div>

	</article>
	
</section><!-- #post-<?php the_ID(); ?> -->
