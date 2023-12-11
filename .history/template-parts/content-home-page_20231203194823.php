<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>My first three.js app</title>
		<style>
			body { margin: 0; }
		</style>
	</head>
	<body>
	<script type="module">

//import * as THREE from 'three';

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );

const renderer = new THREE.WebGLRenderer();
renderer.setSize( window.innerWidth, window.innerHeight );
document.body.appendChild( renderer.domElement );

const geometry = new THREE.BoxGeometry( 1, 1, 1 );
const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
const cube = new THREE.Mesh( geometry, material );
scene.add( cube );

camera.position.z = 5;

function animate() {
	requestAnimationFrame( animate );

	cube.rotation.x += 0.01;
	cube.rotation.y += 0.01;

	renderer.render( scene, camera );
}

animate();

		</script>
	</body>
</html>



<!-- <article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid p-0 m-0'); ?>>
	<div id="overlay">
		<button id="startButton">Play</button>
	</div>
	<div id="container"></div>

	<div id="info">
		<a href="https://threejs.org" target="_blank" rel="noopener">three.js</a> - webgl video demo kto<br/>
			playing <a href="http://durian.blender.org/" target="_blank" rel="noopener">sintel</a> trailer
	</div>

	<video id="video" loop crossOrigin="anonymous" playsinline style="display:none">
		<source src="https://threejs.org/examples/textures/sintel.ogv" type='video/ogg; codecs="theora, vorbis"'>
		<source src="https://threejs.org/examples/textures/sintel.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
	</video>

</article> -->


<!-- #post-<?php the_ID(); ?> -->
