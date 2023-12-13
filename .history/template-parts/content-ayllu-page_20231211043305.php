<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

'<div class="option' + primero + '" style="--optionBackground:url(' + img + ');">
	<div class="shadow"></div>
	<div class="label">
		<div class="icon">
			<i class="fa-solid fa-laptop-code"></i>
		</div>
		<div class="info">
			<div class="main">
				<a href="' + postValue.link + '">' + postValue.title['rendered'] + '</a>
			</div>
			<div class="d-flex justify-content-center">
				<p class="sub">' + postValue.date + '</p>
				<div class=""ms-2>Vistas: <p id="visit' + postValue.id + '"></p>
				</div>
			</div> 
		</div>
	</div>
</div>'


<!-- '<div class="option' + primero + '" style="--optionBackground:url(' + img + ');">
	<div class="shadow"></div>
	<div class="label">
		<div class="icon">
			<i class="fa-solid fa-laptop-code"></i>
		</div>
		<div class="info bg-body-tertiary">
			<div class="main">
				<h2><a href="' + postValue.link + '">' + postValue.title['rendered'] + '</a></h2>
			</div>
			<div class="d-flex justify-content-center">
				<p class="sub">' + postValue.date + '</p> 
				<h3 class="ms-2" id="visit' + postValue.id + '">Vistas </h3>
			</div> 
		</div>
	</div>
</div>'

'<div class="option' + primero + '" style="--optionBackground:url(' + img + ');">
	<div class="shadow"></div>
	<div class="label">
		<div class="icon">
			<i class="fa-solid fa-laptop-code"></i>
		</div>
		<div class="info ">
			<div class="main">
				<h2><a href="' + postValue.link + '">' + postValue.title['rendered'] + '</a></h2>
			</div>
			<div class="d-flex justify-content-center">
				<div class="sub">' + postValue.date + '</div> 
			<div><h3 id="visit' + postValue.id + '"></h3></div> 
			</div>
		</div>
	</div>
</div>' -->


<section id="post-<?php the_ID(); ?>" <?php post_class('container-fluid my-5 py-5'); ?>>
	<!-- Sección Cards con Api rest -->
	<section class="flex-cards my-5 py-5">
		<article id="relacionadas" class="options my-5">
		</article>
		<!-- <button type="button" class="btn btn-light">Light</button> -->
	</section>
	<!-- Sección panel de controles-->
	<section class="container-fluid p-0 m-0">
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
		
	</section>
		
</section><!-- #post-<?php the_ID(); ?> -->
