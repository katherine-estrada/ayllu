<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>


<?php

 // Get the Client IP Address PHP Function
function get_ip_address() {
    $ip_address = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip_address = $_SERVER['HTTP_CLIENT_IP']; // Get the shared IP Address
    }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //Check if the proxy is used for IP/IPs
        // Split if multiple IP addresses exist and get the last IP address
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
            $multiple_ips = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ip_address = trim(current($multiple_ips));
        }else{
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }else if(!empty($_SERVER['HTTP_X_FORWARDED'])){
        $ip_address = $_SERVER['HTTP_X_FORWARDED'];
    }else if(!empty($_SERVER['HTTP_FORWARDED_FOR'])){
        $ip_address = $_SERVER['HTTP_FORWARDED_FOR'];
    }else if(!empty($_SERVER['HTTP_FORWARDED'])){
        $ip_address = $_SERVER['HTTP_FORWARDED'];
    }else{
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    return $ip_address;
}

?>

<h1 class="text-dark">Con estadisticas</h1>
<script>

jQuery(document).ready(function ($) {

	postId = <?php the_ID(); ?>;
    tema = "<?php echo get_ip_address(); ?>";
    // Envio los datos para que se guarde la información de la canción
    $.ajax({
        url: "/ayllu/wp-content/themes/aylludev/captura.php",
        type: "POST",
        dataType: "json",	
        data: JSON.stringify({ campoArtista: postId, campoTema: tema }),
        contentType: "application/json"
    });

	$.getJSON( "/ayllu/wp-content/themes/aylludev/post-estadisticas.php?postId=" + postId, function( data ) {

	var PostVisits = data.cantidad;
	console.log("visitas: "+PostVisits)
	$("#visitas").html(PostVisits);

	});

})

</script>

<h1  class="text-dark">Page View <span id="visitas"></span> </h1>

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
