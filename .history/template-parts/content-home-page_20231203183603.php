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
	<div id="overlay">
		<button id="startButton">Play</button>
	</div>
	<div id="container"></div>

	<div id="info">
		<a href="https://threejs.org" target="_blank" rel="noopener">three.js</a> - webgl video demo<br/>
			playing <a href="http://durian.blender.org/" target="_blank" rel="noopener">sintel</a> trailer
	</div>

	<video id="video" loop crossOrigin="anonymous" playsinline style="display:none">
		<source src="https://threejs.org/examples/textures/sintel.ogv" type='video/ogg; codecs="theora, vorbis"'>
		<source src="https://threejs.org/examples/textures/sintel.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
	</video>

</article><!-- #post-<?php the_ID(); ?> -->
