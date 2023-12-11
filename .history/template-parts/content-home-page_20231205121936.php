<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>
<!-- Video -->
<!-- <script  type="module">

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


		</script> -->
<!-- Video -->

<!-- Portada blanca -->
<script id="vertexShader" type="x-shader/x-vertex">
		precision highp float;

		uniform float sineTime;

		uniform mat4 modelViewMatrix;
		uniform mat4 projectionMatrix;

		attribute vec3 position;
		attribute vec3 offset;
		attribute vec4 color;
		attribute vec4 orientationStart;
		attribute vec4 orientationEnd;

		varying vec3 vPosition;
		varying vec4 vColor;

		void main(){

			vPosition = offset * max( abs( sineTime * 2.0 + 1.0 ), 0.5 ) + position;
			vec4 orientation = normalize( mix( orientationStart, orientationEnd, sineTime ) );
			vec3 vcV = cross( orientation.xyz, vPosition );
			vPosition = vcV * ( 2.0 * orientation.w ) + ( cross( orientation.xyz, vcV ) * 2.0 + vPosition );

			vColor = color;

			gl_Position = projectionMatrix * modelViewMatrix * vec4( vPosition, 1.0 );

		}

	</script>

	<script id="fragmentShader" type="x-shader/x-fragment">

		precision highp float;

		uniform float time;

		varying vec3 vPosition;
		varying vec4 vColor;

		void main() {

			vec4 color = vec4( vColor );
			color.r += sin( vPosition.x * 10.0 + time ) * 0.5;

			gl_FragColor = color;

		}

	</script>

	<script type="module">
		import * as THREE from 'three';

		import Stats from 'three/addons/libs/stats.module.js';
		import { GUI } from 'three/addons/libs/lil-gui.module.min.js';

		let container, stats;

		let camera, scene, renderer;

		init();
		animate();

		function init() {

			container = document.getElementById( 'container' );

			camera = new THREE.PerspectiveCamera( 50, window.innerWidth / window.innerHeight, 1, 10 );
			camera.position.z = 2;

			scene = new THREE.Scene();

			// geometry

			const vector = new THREE.Vector4();

			const instances = 50000;

			const positions = [];
			const offsets = [];
			const colors = [];
			const orientationsStart = [];
			const orientationsEnd = [];

			positions.push( 0.025, - 0.025, 0 );
			positions.push( - 0.025, 0.025, 0 );
			positions.push( 0, 0, 0.025 );

			// instanced attributes

			for ( let i = 0; i < instances; i ++ ) {

				// offsets

				offsets.push( Math.random() - 0.5, Math.random() - 0.5, Math.random() - 0.5 );

				// colors

				colors.push( Math.random(), Math.random(), Math.random(), Math.random() );

				// orientation start

				vector.set( Math.random() * 2 - 1, Math.random() * 2 - 1, Math.random() * 2 - 1, Math.random() * 2 - 1 );
				vector.normalize();

				orientationsStart.push( vector.x, vector.y, vector.z, vector.w );

				// orientation end

				vector.set( Math.random() * 2 - 1, Math.random() * 2 - 1, Math.random() * 2 - 1, Math.random() * 2 - 1 );
				vector.normalize();

				orientationsEnd.push( vector.x, vector.y, vector.z, vector.w );

			}

			const geometry = new THREE.InstancedBufferGeometry();
			geometry.instanceCount = instances; // set so its initalized for dat.GUI, will be set in first draw otherwise

			geometry.setAttribute( 'position', new THREE.Float32BufferAttribute( positions, 3 ) );

			geometry.setAttribute( 'offset', new THREE.InstancedBufferAttribute( new Float32Array( offsets ), 3 ) );
			geometry.setAttribute( 'color', new THREE.InstancedBufferAttribute( new Float32Array( colors ), 4 ) );
			geometry.setAttribute( 'orientationStart', new THREE.InstancedBufferAttribute( new Float32Array( orientationsStart ), 4 ) );
			geometry.setAttribute( 'orientationEnd', new THREE.InstancedBufferAttribute( new Float32Array( orientationsEnd ), 4 ) );

			// material

			const material = new THREE.RawShaderMaterial( {

				uniforms: {
					'time': { value: 1.0 },
					'sineTime': { value: 1.0 }
				},
				vertexShader: document.getElementById( 'vertexShader' ).textContent,
				fragmentShader: document.getElementById( 'fragmentShader' ).textContent,
				side: THREE.DoubleSide,
				forceSinglePass: true,
				transparent: true

			} );

			//

			const mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			//

			renderer = new THREE.WebGLRenderer();
			renderer.setPixelRatio( window.devicePixelRatio );
			renderer.setSize( window.innerWidth, window.innerHeight );
			container.appendChild( renderer.domElement );

			if ( renderer.capabilities.isWebGL2 === false && renderer.extensions.has( 'ANGLE_instanced_arrays' ) === false ) {

				document.getElementById( 'notSupported' ).style.display = '';
				return;

			}

			//

			const gui = new GUI( { width: 350 } );
			gui.add( geometry, 'instanceCount', 0, instances );

			//

			stats = new Stats();
			container.appendChild( stats.dom );

			//

			window.addEventListener( 'resize', onWindowResize );

		}

		function onWindowResize() {

			camera.aspect = window.innerWidth / window.innerHeight;
			camera.updateProjectionMatrix();

			renderer.setSize( window.innerWidth, window.innerHeight );

		}

		//

		function animate() {

			requestAnimationFrame( animate );

			render();
			stats.update();

		}

		function render() {

			const time = performance.now();

			const object = scene.children[ 0 ];

			object.rotation.y = time * 0.0005;
			object.material.uniforms[ 'time' ].value = time * 0.005;
			object.material.uniforms[ 'sineTime' ].value = Math.sin( object.material.uniforms[ 'time' ].value * 0.05 );

			renderer.render( scene, camera );

		}

	</script>
<!-- Portada blanca -->


<article id="post-<?php the_ID(); ?>" <?php post_class('container p-0 m-0'); ?>>
	<!-- <div id="overlay">
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
	</video> -->

	<!-- portadad blanca -->

	<div id="container">
		<h1>Ayluuuuu</h1>
	</div>
	<div id="info">
		<!-- <a href="https://threejs.org" target="_blank" rel="noopener">three.js</a> -->
		<div id="notSupported" style="display:none">Sorry your graphics card + browser does not support hardware instancing</div>
	</div>

	<!-- portadad blanca -->
</article><!-- #post-<?php the_ID(); ?> -->
