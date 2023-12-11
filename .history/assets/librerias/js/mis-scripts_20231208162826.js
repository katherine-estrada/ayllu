jQuery(document).ready(function ($) {


// Carousel

$(".option").click(function(){
    $(".option").removeClass("active");
    $(this).addClass("active");
    
 });


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

// Plugin scroll
    ScrollReveal({ reset: true });
    ScrollReveal().reveal('.scroll', { delay: 500 });


    // $(".").removeClass("menu-toggle")


 $.get('/ayllu/wp-json/wp/v2/posts').done(function (song, status) {
    $.each(song, function (songsKey, songsValue) {
        // Condicional que selecciona las dos canciones aleatorias
      
            // Construir el HTML de la canción
            var cancion = '<div class="col-12 relacionadas mt-5 mb-3"><div class="row p-3 d-flex align-items-center rounded"><p class="col-2 col-sm-1 text-center reproducir"><i class="fa-solid fa-play"></i></p><div class="d-none id-cancion">' + songsValue.id + '</div><div class="col-10 col-sm-7 col-md-4 d-flex align-items-center"><img src="' + songsValue.better_featured_image['source_url'] + '" class="img-fluid img-cancion" alt="' + songsValue.title['rendered'] + '"><div class="ms-3 col-8"><p class="p-c_a ellipsis">' + songsValue.acf['autor'] + '</p><a href="' + songsValue.link + '" class="p-tema"><p class="ellipsis">' + songsValue.title['rendered'] + '</p></a></div></div><div class="d-none d-sm-flex col-4 info-cancion"><p class="p-c_a nombre-genero">' + catValue.name + '</p><p class="p-c_a">' + songsValue.acf['duracion'] + '</p></div><div class="d-none d-md-flex col-3 icons-cancion"><button class="btn btn-star"><i class="fa-regular fa-star"></i></button></div></div></div>';

            $('#relacionadas' + idCollapse + '').append(cancion);
       
    });
    
});

 
})


