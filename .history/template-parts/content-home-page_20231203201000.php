<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<script  type="module">

			import * as THREE from 'three';

			 import { EffectComposer } from 'three/addons/postprocessing/EffectComposer.js';
			 import { RenderPass } from 'three/addons/postprocessing/RenderPass.js';
			 import { BloomPass } from 'three/addons/postprocessing/BloomPass.js';
			 import { OutputPass } from 'three/addons/postprocessing/OutputPass.js';

			let container;

			let camera, scene, renderer;

			let video, texture, material, mesh;

			let composer;

			let mouseX = 0;
			let mouseY = 0;

			let windowHalfX = window.innerWidth / 2;
			let windowHalfY = window.innerHeight / 2;

			let cube_count;

			const meshes = [],
				materials = [],

				xgrid = 20,
				ygrid = 10;

			const startButton = document.getElementById( 'startButton' );
			startButton.addEventListener( 'click', function () {

				init();
				animate();

			} );

			function init() {

				const overlay = document.getElementById( 'overlay' );
				overlay.remove();

				container = document.createElement( 'div' );
				document.body.appendChild( container );

				camera = new THREE.PerspectiveCamera( 40, window.innerWidth / window.innerHeight, 1, 10000 );
				camera.position.z = 500;

				scene = new THREE.Scene();

				const light = new THREE.DirectionalLight( 0xffffff, 3 );
				light.position.set( 0.5, 1, 1 ).normalize();
				scene.add( light );

				renderer = new THREE.WebGLRenderer();
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );

				video = document.getElementById( 'video' );
				video.play();
				video.addEventListener( 'play', function () {

					this.currentTime = 3;

				} );

				texture = new THREE.VideoTexture( video );
				texture.colorSpace = THREE.SRGBColorSpace;

				//

				let i, j, ox, oy, geometry;

				const ux = 1 / xgrid;
				const uy = 1 / ygrid;

				const xsize = 480 / xgrid;
				const ysize = 204 / ygrid;

				const parameters = { color: 0xffffff, map: texture };

				cube_count = 0;

				for ( i = 0; i < xgrid; i ++ ) {

					for ( j = 0; j < ygrid; j ++ ) {

						ox = i;
						oy = j;

						geometry = new THREE.BoxGeometry( xsize, ysize, xsize );

						change_uvs( geometry, ux, uy, ox, oy );

						materials[ cube_count ] = new THREE.MeshLambertMaterial( parameters );

						material = materials[ cube_count ];

						material.hue = i / xgrid;
						material.saturation = 1 - j / ygrid;

						material.color.setHSL( material.hue, material.saturation, 0.5 );

						mesh = new THREE.Mesh( geometry, material );

						mesh.position.x = ( i - xgrid / 2 ) * xsize;
						mesh.position.y = ( j - ygrid / 2 ) * ysize;
						mesh.position.z = 0;

						mesh.scale.x = mesh.scale.y = mesh.scale.z = 1;

						scene.add( mesh );

						mesh.dx = 0.001 * ( 0.5 - Math.random() );
						mesh.dy = 0.001 * ( 0.5 - Math.random() );

						meshes[ cube_count ] = mesh;

						cube_count += 1;

					}

				}

				renderer.autoClear = false;

				document.addEventListener( 'mousemove', onDocumentMouseMove );

				// postprocessing

				const renderPass = new RenderPass( scene, camera );
				const bloomPass = new BloomPass( 1.3 );
				const outputPass = new OutputPass();

				composer = new EffectComposer( renderer );

				composer.addPass( renderPass );
				composer.addPass( bloomPass );
				composer.addPass( outputPass );

				//

				window.addEventListener( 'resize', onWindowResize );

			}

			function onWindowResize() {

				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );
				composer.setSize( window.innerWidth, window.innerHeight );

			}

			function change_uvs( geometry, unitx, unity, offsetx, offsety ) {

				const uvs = geometry.attributes.uv.array;

				for ( let i = 0; i < uvs.length; i += 2 ) {

					uvs[ i ] = ( uvs[ i ] + offsetx ) * unitx;
					uvs[ i + 1 ] = ( uvs[ i + 1 ] + offsety ) * unity;

				}

			}


			function onDocumentMouseMove( event ) {

				mouseX = ( event.clientX - windowHalfX );
				mouseY = ( event.clientY - windowHalfY ) * 0.3;

			}

			//

			function animate() {

				requestAnimationFrame( animate );

				render();

			}

			let h, counter = 1;

			function render() {

				const time = Date.now() * 0.00005;

				camera.position.x += ( mouseX - camera.position.x ) * 0.05;
				camera.position.y += ( - mouseY - camera.position.y ) * 0.05;

				camera.lookAt( scene.position );

				for ( let i = 0; i < cube_count; i ++ ) {

					material = materials[ i ];

					h = ( 360 * ( material.hue + time ) % 360 ) / 360;
					material.color.setHSL( h, material.saturation, 0.5 );

				}

				if ( counter % 1000 > 200 ) {

					for ( let i = 0; i < cube_count; i ++ ) {

						mesh = meshes[ i ];

						mesh.rotation.x += 10 * mesh.dx;
						mesh.rotation.y += 10 * mesh.dy;

						mesh.position.x -= 150 * mesh.dx;
						mesh.position.y += 150 * mesh.dy;
						mesh.position.z += 300 * mesh.dx;

					}

				}

				if ( counter % 1000 === 0 ) {

					for ( let i = 0; i < cube_count; i ++ ) {

						mesh = meshes[ i ];

						mesh.dx *= - 1;
						mesh.dy *= - 1;

					}

				}

				counter ++;

				renderer.clear();
				composer.render();

			}


		</script>

<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid p-0 m-0'); ?>>
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

</article><!-- #post-<?php the_ID(); ?> -->
