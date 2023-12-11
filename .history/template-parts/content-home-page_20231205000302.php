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
<script type="module">

			import * as THREE from 'three';

			import Stats from 'three/addons/libs/stats.module.js';

			import { OBJLoader } from 'three/addons/loaders/OBJLoader.js';
			import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
			import { GodRaysFakeSunShader, GodRaysDepthMaskShader, GodRaysCombineShader, GodRaysGenerateShader } from 'three/addons/shaders/GodRaysShader.js';

			let container, stats;
			let camera, scene, renderer, materialDepth;

			let sphereMesh;

			const sunPosition = new THREE.Vector3( 0, 1000, - 1000 );
			const clipPosition = new THREE.Vector4();
			const screenSpacePosition = new THREE.Vector3();

			const postprocessing = { enabled: true };

			const orbitRadius = 200;

			const bgColor = 0x000511;
			const sunColor = 0xffee00;

			// Use a smaller size for some of the god-ray render targets for better performance.
			const godrayRenderTargetResolutionMultiplier = 1.0 / 4.0;

			init();
			animate();

			function init() {

				container = document.createElement( 'div' );
				document.body.appendChild( container );

				//

				camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 1, 3000 );
				camera.position.z = 200;

				scene = new THREE.Scene();

				//

				materialDepth = new THREE.MeshDepthMaterial();

				// tree

				const loader = new OBJLoader();
				loader.load( 'models/obj/tree.obj', function ( object ) {

					object.position.set( 0, - 150, - 150 );
					object.scale.multiplyScalar( 400 );
					scene.add( object );

				} );

				// sphere

				const geo = new THREE.SphereGeometry( 1, 20, 10 );
				sphereMesh = new THREE.Mesh( geo, new THREE.MeshBasicMaterial( { color: 0x000000 } ) );
				sphereMesh.scale.multiplyScalar( 20 );
				scene.add( sphereMesh );

				//

				renderer = new THREE.WebGLRenderer();
				renderer.setClearColor( 0xffffff );
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );

				renderer.autoClear = false;

				const controls = new OrbitControls( camera, renderer.domElement );
				controls.minDistance = 50;
				controls.maxDistance = 500;

				//

				stats = new Stats();
				container.appendChild( stats.dom );

				//

				window.addEventListener( 'resize', onWindowResize );

				//

				initPostprocessing( window.innerWidth, window.innerHeight );

			}

			//

			function onWindowResize() {

				const renderTargetWidth = window.innerWidth;
				const renderTargetHeight = window.innerHeight;

				camera.aspect = renderTargetWidth / renderTargetHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( renderTargetWidth, renderTargetHeight );
				postprocessing.rtTextureColors.setSize( renderTargetWidth, renderTargetHeight );
				postprocessing.rtTextureDepth.setSize( renderTargetWidth, renderTargetHeight );
				postprocessing.rtTextureDepthMask.setSize( renderTargetWidth, renderTargetHeight );

				const adjustedWidth = renderTargetWidth * godrayRenderTargetResolutionMultiplier;
				const adjustedHeight = renderTargetHeight * godrayRenderTargetResolutionMultiplier;
				postprocessing.rtTextureGodRays1.setSize( adjustedWidth, adjustedHeight );
				postprocessing.rtTextureGodRays2.setSize( adjustedWidth, adjustedHeight );

			}

			function initPostprocessing( renderTargetWidth, renderTargetHeight ) {

				postprocessing.scene = new THREE.Scene();

				postprocessing.camera = new THREE.OrthographicCamera( - 0.5, 0.5, 0.5, - 0.5, - 10000, 10000 );
				postprocessing.camera.position.z = 100;

				postprocessing.scene.add( postprocessing.camera );

				postprocessing.rtTextureColors = new THREE.WebGLRenderTarget( renderTargetWidth, renderTargetHeight, { type: THREE.HalfFloatType } );

				// Switching the depth formats to luminance from rgb doesn't seem to work. I didn't
				// investigate further for now.
				// pars.format = LuminanceFormat;

				// I would have this quarter size and use it as one of the ping-pong render
				// targets but the aliasing causes some temporal flickering

				postprocessing.rtTextureDepth = new THREE.WebGLRenderTarget( renderTargetWidth, renderTargetHeight, { type: THREE.HalfFloatType } );
				postprocessing.rtTextureDepthMask = new THREE.WebGLRenderTarget( renderTargetWidth, renderTargetHeight, { type: THREE.HalfFloatType } );

				// The ping-pong render targets can use an adjusted resolution to minimize cost

				const adjustedWidth = renderTargetWidth * godrayRenderTargetResolutionMultiplier;
				const adjustedHeight = renderTargetHeight * godrayRenderTargetResolutionMultiplier;
				postprocessing.rtTextureGodRays1 = new THREE.WebGLRenderTarget( adjustedWidth, adjustedHeight, { type: THREE.HalfFloatType } );
				postprocessing.rtTextureGodRays2 = new THREE.WebGLRenderTarget( adjustedWidth, adjustedHeight, { type: THREE.HalfFloatType } );

				// god-ray shaders

				const godraysMaskShader = GodRaysDepthMaskShader;
				postprocessing.godrayMaskUniforms = THREE.UniformsUtils.clone( godraysMaskShader.uniforms );
				postprocessing.materialGodraysDepthMask = new THREE.ShaderMaterial( {

					uniforms: postprocessing.godrayMaskUniforms,
					vertexShader: godraysMaskShader.vertexShader,
					fragmentShader: godraysMaskShader.fragmentShader

				} );

				const godraysGenShader = GodRaysGenerateShader;
				postprocessing.godrayGenUniforms = THREE.UniformsUtils.clone( godraysGenShader.uniforms );
				postprocessing.materialGodraysGenerate = new THREE.ShaderMaterial( {

					uniforms: postprocessing.godrayGenUniforms,
					vertexShader: godraysGenShader.vertexShader,
					fragmentShader: godraysGenShader.fragmentShader

				} );

				const godraysCombineShader = GodRaysCombineShader;
				postprocessing.godrayCombineUniforms = THREE.UniformsUtils.clone( godraysCombineShader.uniforms );
				postprocessing.materialGodraysCombine = new THREE.ShaderMaterial( {

					uniforms: postprocessing.godrayCombineUniforms,
					vertexShader: godraysCombineShader.vertexShader,
					fragmentShader: godraysCombineShader.fragmentShader

				} );

				const godraysFakeSunShader = GodRaysFakeSunShader;
				postprocessing.godraysFakeSunUniforms = THREE.UniformsUtils.clone( godraysFakeSunShader.uniforms );
				postprocessing.materialGodraysFakeSun = new THREE.ShaderMaterial( {

					uniforms: postprocessing.godraysFakeSunUniforms,
					vertexShader: godraysFakeSunShader.vertexShader,
					fragmentShader: godraysFakeSunShader.fragmentShader

				} );

				postprocessing.godraysFakeSunUniforms.bgColor.value.setHex( bgColor );
				postprocessing.godraysFakeSunUniforms.sunColor.value.setHex( sunColor );

				postprocessing.godrayCombineUniforms.fGodRayIntensity.value = 0.75;

				postprocessing.quad = new THREE.Mesh(
					new THREE.PlaneGeometry( 1.0, 1.0 ),
					postprocessing.materialGodraysGenerate
				);
				postprocessing.quad.position.z = - 9900;
				postprocessing.scene.add( postprocessing.quad );

			}

			function animate() {

				requestAnimationFrame( animate );

				stats.begin();
				render();
				stats.end();

			}

			function getStepSize( filterLen, tapsPerPass, pass ) {

				return filterLen * Math.pow( tapsPerPass, - pass );

			}

			function filterGodRays( inputTex, renderTarget, stepSize ) {

				postprocessing.scene.overrideMaterial = postprocessing.materialGodraysGenerate;

				postprocessing.godrayGenUniforms[ 'fStepSize' ].value = stepSize;
				postprocessing.godrayGenUniforms[ 'tInput' ].value = inputTex;

				renderer.setRenderTarget( renderTarget );
				renderer.render( postprocessing.scene, postprocessing.camera );
				postprocessing.scene.overrideMaterial = null;

			}

			function render() {

				const time = Date.now() / 4000;

				sphereMesh.position.x = orbitRadius * Math.cos( time );
				sphereMesh.position.z = orbitRadius * Math.sin( time ) - 100;

				if ( postprocessing.enabled ) {

					clipPosition.x = sunPosition.x;
					clipPosition.y = sunPosition.y;
					clipPosition.z = sunPosition.z;
					clipPosition.w = 1;

					clipPosition.applyMatrix4( camera.matrixWorldInverse ).applyMatrix4( camera.projectionMatrix );

					// perspective divide (produce NDC space)

					clipPosition.x /= clipPosition.w;
					clipPosition.y /= clipPosition.w;

					screenSpacePosition.x = ( clipPosition.x + 1 ) / 2; // transform from [-1,1] to [0,1]
					screenSpacePosition.y = ( clipPosition.y + 1 ) / 2; // transform from [-1,1] to [0,1]
					screenSpacePosition.z = clipPosition.z; // needs to stay in clip space for visibilty checks

					// Give it to the god-ray and sun shaders

					postprocessing.godrayGenUniforms[ 'vSunPositionScreenSpace' ].value.copy( screenSpacePosition );
					postprocessing.godraysFakeSunUniforms[ 'vSunPositionScreenSpace' ].value.copy( screenSpacePosition );

					// -- Draw sky and sun --

					// Clear colors and depths, will clear to sky color

					renderer.setRenderTarget( postprocessing.rtTextureColors );
					renderer.clear( true, true, false );

					// Sun render. Runs a shader that gives a brightness based on the screen
					// space distance to the sun. Not very efficient, so i make a scissor
					// rectangle around the suns position to avoid rendering surrounding pixels.

					const sunsqH = 0.74 * window.innerHeight; // 0.74 depends on extent of sun from shader
					const sunsqW = 0.74 * window.innerHeight; // both depend on height because sun is aspect-corrected

					screenSpacePosition.x *= window.innerWidth;
					screenSpacePosition.y *= window.innerHeight;

					renderer.setScissor( screenSpacePosition.x - sunsqW / 2, screenSpacePosition.y - sunsqH / 2, sunsqW, sunsqH );
					renderer.setScissorTest( true );

					postprocessing.godraysFakeSunUniforms[ 'fAspect' ].value = window.innerWidth / window.innerHeight;

					postprocessing.scene.overrideMaterial = postprocessing.materialGodraysFakeSun;
					renderer.setRenderTarget( postprocessing.rtTextureColors );
					renderer.render( postprocessing.scene, postprocessing.camera );

					renderer.setScissorTest( false );

					// -- Draw scene objects --

					// Colors

					scene.overrideMaterial = null;
					renderer.setRenderTarget( postprocessing.rtTextureColors );
					renderer.render( scene, camera );

					// Depth

					scene.overrideMaterial = materialDepth;
					renderer.setRenderTarget( postprocessing.rtTextureDepth );
					renderer.clear();
					renderer.render( scene, camera );

					//

					postprocessing.godrayMaskUniforms[ 'tInput' ].value = postprocessing.rtTextureDepth.texture;

					postprocessing.scene.overrideMaterial = postprocessing.materialGodraysDepthMask;
					renderer.setRenderTarget( postprocessing.rtTextureDepthMask );
					renderer.render( postprocessing.scene, postprocessing.camera );

					// -- Render god-rays --

					// Maximum length of god-rays (in texture space [0,1]X[0,1])

					const filterLen = 1.0;

					// Samples taken by filter

					const TAPS_PER_PASS = 6.0;

					// Pass order could equivalently be 3,2,1 (instead of 1,2,3), which
					// would start with a small filter support and grow to large. however
					// the large-to-small order produces less objectionable aliasing artifacts that
					// appear as a glimmer along the length of the beams

					// pass 1 - render into first ping-pong target
					filterGodRays( postprocessing.rtTextureDepthMask.texture, postprocessing.rtTextureGodRays2, getStepSize( filterLen, TAPS_PER_PASS, 1.0 ) );

					// pass 2 - render into second ping-pong target
					filterGodRays( postprocessing.rtTextureGodRays2.texture, postprocessing.rtTextureGodRays1, getStepSize( filterLen, TAPS_PER_PASS, 2.0 ) );

					// pass 3 - 1st RT
					filterGodRays( postprocessing.rtTextureGodRays1.texture, postprocessing.rtTextureGodRays2, getStepSize( filterLen, TAPS_PER_PASS, 3.0 ) );

					// final pass - composite god-rays onto colors

					postprocessing.godrayCombineUniforms[ 'tColors' ].value = postprocessing.rtTextureColors.texture;
					postprocessing.godrayCombineUniforms[ 'tGodRays' ].value = postprocessing.rtTextureGodRays2.texture;

					postprocessing.scene.overrideMaterial = postprocessing.materialGodraysCombine;

					renderer.setRenderTarget( null );
					renderer.render( postprocessing.scene, postprocessing.camera );
					postprocessing.scene.overrideMaterial = null;

				} else {

					renderer.setRenderTarget( null );
					renderer.clear();
					renderer.render( scene, camera );

				}

			}

		</script>
<!-- Portada blanca -->


<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid p-0 m-0'); ?>>
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

	<div id="info">
			<a href="https://threejs.org" target="_blank" rel="noopener">three.js</a> - webgl god-rays example - tree by <a href="http://www.turbosquid.com/3d-models/free-tree-3d-model/592617" target="_blank" rel="noopener">stanloshka</a>
	</div>

	<!-- portadad blanca -->
</article><!-- #post-<?php the_ID(); ?> -->
