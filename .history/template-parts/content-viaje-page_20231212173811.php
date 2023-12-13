<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aylludev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<h1>Desafíos</h1>
	<p>En esta sección, resalto dos valiosas lecciones aprendidas en cada desafío. </p>
	<div class="imagenes-promocionales row mt-4">
            <figure class="col-md-6">
				<img class="w-100" ssrc="<?php bloginfo('template_url'); ?>/assets/img/img-promocional-1.png" alt="Varios frascos de aceites esenciales" usemap="#mapa-img">
				
                <figcaption>
                    <map name="mapa-img" id="mapa-img">
                        <area target="_self" alt="dulce-naranja" title="dulce-naranja" href="ficha.php?id=2" coords="541,24,554,11,576,11,582,25,584,41,584,56,589,68,600,76,625,81,662,83,695,85,729,87,747,91,746,108,726,115,680,113,620,112,598,116,602,139,610,164,608,193,606,213,600,233,575,239,539,239,526,213,526,192,526,165,530,107,534,67" shape="poly">
                        <area target="_self" alt="lavanda" title="lavanda" href="ficha.php?id=6" coords="327,171,350,171,400,172,429,179,428,195,424,212,418,226,413,253,415,279,440,300,451,330,457,359,458,382,458,409,460,436,459,470,455,490,425,507,416,529,416,564,412,585,384,593,346,586,317,561,310,509,312,423,311,324,338,291" shape="poly">
                        <area target="_self" alt="romero" title="romero" href="ficha.php?id=12" coords="533,264,669,264,670,290,672,316,673,353,689,365,772,374,765,399,719,404,657,409,583,406,532,388" shape="poly">
                        <area target="_self" alt="vetiver" title="vetiver" href="ficha.php?id=16" coords="47,490,51,475,103,473,149,488,157,501,196,500,260,500,294,521,295,554,292,571,234,578,163,567,137,570,109,568,89,560,53,557,48,526" shape="poly">
                        <area target="_self" alt="ylang" title="ylang" href="ficha.php?id=9" coords="444,510,496,508,573,516,579,543,580,581,599,590,656,591,721,597,719,624,605,625,567,636,479,636,429,626,431,581,432,541" shape="poly">
                    </map>
                </figcaption>
            </figure>
            <figure class="col-md-6">
                <img  class="w-100" src="assets/img/img-promocional-2.png" alt="frasco de aceites esenciales sobre tres rocas apiladas" usemap="#mapa-image">
                <figcaption>
                    <map name="mapa-image" id="mapa-image">
                        <area target="_self" alt="dulce-naranja" title="dulce-naranja" href="ficha.php?id=2" coords="375,42,390,27,425,30,435,52,438,88,441,118,477,112,517,104,579,109,652,113,710,115,724,140,694,156,574,163,492,167,454,183,448,245,452,293,427,335,346,315,358,189,354,135" shape="poly">
                    </map>
                </figcaption>
            </figure>
        </div>

	<div class="page">
			<nav class="fs-1 dock col-md-2 col-sm-4">
				<ul class="ms-0">
					<li class="app ms-3">
						<a href="http://localhost/ayllu/"><i class="fa-solid fa-archway "></i>
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
						<a href="http://localhost/ayllu/viaje-del-chasqui/"><i class="fa-solid fa-puzzle-piece "></i><span class="tooltip">Viaje del Chasqui</span></a>
					</li>
				</ul>
			</nav>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
