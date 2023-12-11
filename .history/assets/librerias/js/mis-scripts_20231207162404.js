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

// Plugin scroll
    ScrollReveal({ reset: true });
    ScrollReveal().reveal('.scroll', { delay: 500 });


    // $(".").removeClass("menu-toggle")

// Carousel
(function ($) {
    $(function () {
      var slider = $(".slider").flickity({
        imagesLoaded: true,
        percentPosition: false,
        prevNextButtons: false, //true = enable on-screen arrows
        initialIndex: 3,
        pageDots: false, //true = enable on-screen dots
        groupCells: 1,
        selectedAttraction: 0.2,
        friction: 0.8,
        draggable: true //false = disable dragging
      });
  
      //this enables clicking on cards
      slider.on(
        "staticClick.flickity",
        function (event, pointer, cellElement, cellIndex) {
          if (typeof cellIndex == "number") {
            slider.flickity("selectCell", cellIndex);
          }
        }
      );
  
      //this resizes the cards and centers the carousel; the latter tends to move a few pixels to the right if .resize() and .reposition() aren't used
      var flkty = slider.data("flickity");
      flkty.selectedElement.classList.add("is-custom-selected");
      flkty.resize();
      flkty.reposition();
      let time = 0;
      function reposition() {
        flkty.reposition();
        if (time++ < 10) {
          requestAnimationFrame(reposition);
        } else {
          $(".flickity-prev-next-button").css("pointer-events", "auto");
        }
      }
      requestAnimationFrame(reposition);
  
      //this expands the cards when in focus
      flkty.on("settle", () => {
        $(".card").removeClass("is-custom-selected");
        $(".flickity-prev-next-button").css("pointer-events", "none");
        flkty.selectedElement.classList.add("is-custom-selected");
  
        let time = 0;
        function reposition() {
          flkty.reposition();
          if (time++ < 10) {
            requestAnimationFrame(reposition);
          } else {
            $(".flickity-prev-next-button").css("pointer-events", "auto");
          }
        }
        requestAnimationFrame(reposition);
      });
  
      //this reveals the carousel when the user loads / reloads the page
      $(".carousel").addClass("animation-reveal");
      $(".carousel").css("opacity", "0");
      flkty.resize();
      flkty.reposition();
      setTimeout(() => {
        $(".carousel").removeClass("animation-reveal");
        $(".carousel").css("opacity", "1");
        flkty.resize();
        flkty.reposition();
        let time = 0;
        function reposition() {
          flkty.reposition();
          if (time++ < 10) {
            requestAnimationFrame(reposition);
          }
        }
        requestAnimationFrame(reposition);
      }, 1000);
    });
  })(jQuery);

})


