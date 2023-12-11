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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				aylludev_posted_on();
				aylludev_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php aylludev_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'aylludev' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aylludev' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php aylludev_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
