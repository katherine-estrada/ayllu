jQuery(document).ready(function ($) {

     // Conectarse al Api rest
     $.get('/ayllu/wp-json/wp/v2/posts?per_page=6').done(function (post, status) {

        var contador = 0;
    
        $.each(post, function (postKey, postValue) {
            var primero = "";

            console.log("contador: "+contador);
            
            if(contador==0){
                primero = 'active';

            }
            console.log("primeroCSS: "+primero);
           
            $.get('/ayllu/wp-json/wp/v2/media/' + postValue.featured_media).done(function (media, status) {
                var img = media.guid['rendered'];
                //console.log(img);
                // Construir el cards
                var cards = '<div class="option ' + primero + '" style="--optionBackground:url(' + img + ');"><div class="shadow"></div><div class="label"><div class="icon"><i class="fa-solid fa-laptop-code"></i></div><div class="info"><div class="main">' + postValue.title['rendered'] + '</div><div class="sub">' + postValue.date + '</div></div></div></div>';
    
                $('#relacionadas').appendChild(cards);
            });
            contador=contador+1;
            });
    
        });

// Carousel card 
    $("#relacionadas").on("click", ".option", function () {
   
    $(".option").removeClass("active");
    $(this).addClass("active");
    
    });
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


