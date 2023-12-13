jQuery(document).ready(function ($) {

   

    var cards="";

     // Conectarse al Api rest
     var getPosts = $.get('/ayllu/wp-json/wp/v2/posts?per_page=5').done(function (post, status) {

        var contador = 0;

        
    
        $.each(post, function (postKey, postValue) {
            var primero = "";

           

           

              
            // console.log("primeroCSS: "+primero);
           
            var medias = $.get('/ayllu/wp-json/wp/v2/media/' + postValue.featured_media).done(function (media, status) {
                var img = media.guid['rendered'];
                //console.log(img);
                // Construir el cards
                var card = '<div class="option' + primero + '" style="--optionBackground:url(' + img + ');"><div class="shadow"></div><div class="label"><div class="icon"><i class="fa-solid fa-laptop-code"></i></div><div class="info"><div class="main"><a href="' + postValue.link + '">' + postValue.title['rendered'] + '</a></div><div class="d-flex"><p class="sub me-4 fw-bolder">' + postValue.date + '</p><p>Vistas: <span class="fw-bolder" id="visit' + postValue.id + '"></span></p></div> </div></div></div>';

                cards=cards+card;
                $('#relacionadas').append(card);
                
                //console.log("Card "+contador + " -> "+card);
    
                //contador=contador+1;
                
            });

            $.when( medias ).done(function ( v1, v2 ) {
                
                        //$('#relacionadas').append(cards);
            //              console.log("when medias: "+cards);

            //              var primero = $(".option");

            //    console.log(primero);
                $(".option").removeClass("active");
                $(".option").first().addClass("active");

            //Vistas                
                $.getJSON( "/ayllu/wp-content/themes/aylludev/post-estadisticas.php?postId=" + postValue.id, function( data ) {

                    var PostVisits = data.cantidad;
                    console.log(PostVisits)
                    $('#visit'+ postValue.id).html(PostVisits).show();
                   
                  });

                });

            });
        });

        

    // Carousel card 
    $("#relacionadas").on("click", ".option", function () {
   
    $(".option").removeClass("active");
    $(this).addClass("active");
    
    });

// Botón
    $('#botoncillo').on('click', function(){ // boton que se diagrama en HTML.

        var boton = $.get('/ayllu/wp-json/wp/v2/posts?per_page=5', function(data, status){
            console.log(data);
            var contenedorTarjetas = $("#contenedor-tarjetas"); // contenedor donde apareceran las tarjetas.

            $.each(data, function(key, value){
                var primero = "";
                var imagenes = value._links['wp:featuredmedia'][0].href;
                $.get(imagenes, function (datosImagen) {
                    var imageSrc = datosImagen.source_url;

                    var tarjeta = '<div class="option' + primero + '" style="--optionBackground:url(' + imageSrc + ');"><div class="shadow"></div><div class="label"><div class="icon"><i class="fa-solid fa-laptop-code"></i></div><div class="info"><div class="main"><a href="' + value.link + '">' + value.title['rendered'] + '</a></div><div class="d-flex"><p class="sub me-4 fw-bolder">' + value.date + '</p><p>Vistas: <span class="fw-bolder" id="visit' + value.id + '"></span></p></div> </div></div></div>';
                contenedorTarjetas.append(tarjeta);
                });

            });
            $.when( boton ).done(function () {
                
                $(".option").removeClass("active");
                $(".option").first().addClass("active");
            
                });
        });

    });
// Botón

    

    

    // /Ultimos Lanzamientos/
      $.get('http://localhost/horizon/wp-json/wp/v2/posts?orderby=date&order=desc&per_page=3', function (data, stage) {
        //console.log(data);

        var $contenedorLanzamientos = $('#contenedor_lanzamientos');
        $.each(data, function (key, value) {
            if (value._links['wp:featuredmedia']) {
            var imagenes = value._links['wp:featuredmedia'][0].href;

                $.get(imagenes, function (datosImagen) {
                    var imageSrc = datosImagen.source_url;

                    var card = '<div class="d-flex flex-wrap mb-5"><img class="col-lg-3 col-md-4 col-12 img-fluid" src="'+ imageSrc +'" alt=""><div class="col-lg-9 col-md-8 col-12 ps-md-5 ps-0"><h3>'+ value.title.rendered +'</h3><span>'+ value.acf.nombre_deartista +'</span><br><span>'+ value.acf.genero +'</span><p>'+ value.content.rendered +'</p><a class="boton-lanzamientos" href="'+ value.link +'">Ver Más</a></div></div>';
                    $contenedorLanzamientos.append(card);
                });
            }
        });
        });
    //   /Ultimos Lanzamientos/

    // $.when( getPosts ).done(function ( v1, v2 ) {
    //    // $(".option").removeClass("active");
       
    //    var primero = $(".option");

    //    console.log(primero);

    //     $(".option").first().addClass("active");
    //     console.log("ha terminado, agrego cards");
    //    // $('#relacionadas').append(cards);

    //     console.log("when getPosts: "+cards);
    // });
    

    
    // Carousel card 

    //Plugin Typed

    const typed = new Typed('.typed', {
    strings:[
        '<i class="word-type">Viaje</i>',
        '<i class="word-type">Experiencia</i>',
        '<i class="word-type">Travesía</i>',
        '<i class="word-type">Aventura</i>',
        '<i class="word-type">Recorrido</i>',
        '<i class="word-type">Exploración</i>',
        '<i class="word-type">Trayecto</i>',
        '<i class="word-type">Paseo</i>',
        '<i class="word-type">Pesadilla</i>',
        '<i class="word-type">Descubrimiento</i>',
        '<i class="word-type">Desarrollo</i>',
        '<i class="word-type">Avance</i>',
        '<i class="word-type">Trabajo</i>',
        '<i class="word-type">Jornada</i>',
        '<i class="word-type">Aprendizaje</i>',
        '<i class="word-type">Inmersión</i>',
        '<i class="word-type">Proyecto</i>'
    ],
	//stringsElement: '#cadenas-texto', // ID d el elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
	startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '|', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
    });
    //Plugin Typed

    // Plugin scroll
    ScrollReveal({ reset: true });
    ScrollReveal().reveal('.scroll', { delay: 500 });
    // Plugin scroll    

   

})


