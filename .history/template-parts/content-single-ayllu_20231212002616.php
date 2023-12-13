<?php
/**
 * Template part for displaying posts
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

<!-- <p class="text-dark">Con estadisticas</p> -->
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




<section id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<div class="mt-5 mb-5">
		<nav class="miga" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			<ol class="breadcrumb ms-0">
				<li class="breadcrumb-item"><a href="http://localhost/ayllu/aylludev/">AylluDev</a></li>
				<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
			</ol>
		</nav>
	</div>
	<article class="row interior-card">
		<div class="col-12 col-md-8 content-card">
			<h1 class="text-title mt-5"><?php the_title(); ?></h1>
			<p><?php the_content();?></p>
		</div>
		<div class="col-12 col-md-3 ms-5 content-card">
			<div class="entry-meta mb-5">
				<?php
				aylludev_posted_on();
				aylludev_posted_by();
				?>
			</div>
			<p  class="text-dark">Visitas: <span id="visitas"></span> </p>
		</div>

	</article>
	
</section><!-- #post-<?php the_ID(); ?> -->
