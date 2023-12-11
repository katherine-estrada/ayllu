<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('container flex-cards mt-5'); ?>>
	<article class="options">
		<figure class="option active">
			<div style="--optionBackground:url(http://localhost/ayllu/wp-content/uploads/2023/12/inicio.jpeg);">
				<div class="shadow"></div>
				<div class="label">
					<div class="icon">
						<i class="fa-sharp fa-solid fa-laptop-code"></i>
					</div>
					<div class="info">
						<h2 class="main text-dark"><?php the_title();?></h2>
						<div class="sub"><?php aylludev_posted_on();?></div>
					</div>
				</div>
			</div>
		</figure>
	</article>
	



   <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-snowflake"></i>
         </div>
         <div class="info">
            <div class="main">Oretemauw</div>
            <div class="sub">Omuke trughte a otufta</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/5af3f8303456e376ceda1517553ba786/tumblr_o4986gakjh1qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-tree"></i>
         </div>
         <div class="info">
            <div class="main">Iteresuselle</div>
            <div class="sub">Omuke trughte a otufta</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/5516a22e0cdacaa85311ec3f8fd1e9ef/tumblr_o45jwvdsL11qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-tint"></i>
         </div>
         <div class="info">
            <div class="main">Idiefe</div>
            <div class="sub">Omuke trughte a otufta</div>
         </div>
      </div>
   </div>
   <div class="option" style="--optionBackground:url(https://66.media.tumblr.com/f19901f50b79604839ca761cd6d74748/tumblr_o65rohhkQL1qho82wo1_1280.jpg);">
      <div class="shadow"></div>
      <div class="label">
         <div class="icon">
            <i class="fas fa-sun"></i>
         </div>
         <div class="info">
            <div class="main">Inatethi</div>
            <div class="sub">Omuke trughte a otufta</div>
         </div>
      </div>
   </div>


<a href="http://victorofvalencia-blog.tumblr.com" target="_blank" class="credit">Photos from Victor of Valencia on tumblr</a>
</section><!-- #post-<?php the_ID(); ?> -->
