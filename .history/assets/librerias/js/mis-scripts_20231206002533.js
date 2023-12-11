jQuery(document).ready(function ($) {
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


    ScrollReveal({ reset: true });
    ScrollReveal().reveal('.scroll', { delay: 300 });
})


