<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
 <title>ExploreSCZ::Eventos</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="web/css/style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="web/js/mobile.js"></script>
		<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</head>
<body  class="contBody">
<?php include('header.php'); ?>
    <div id="main" role="main">

      <ul id="tiles">
        <!-- These are our grid blocks -->
     <li>

        <a href="singlepage.html"><img src="web/Eventos/misiones.JPG" width="100%"></a>
         <h3 class="tituloSec">Tour: Misiones Jesuiticas (4 dias, desde Santa Cruz)</h3>
        <p class="contDescp">The package includes
- Private transport
- Local guide (Spanish)
- Optional: Guide in English/German (Price on request!)
- Three nights accommodation in double rooms with private bathroom
- Full boared (without breakfast the 1st day, and dinner the fourth day.
- Entrance fees
        
         </p>
          <span><a href="singlepage.html"><img src="web/images/like.png" title="like" /></a> 165</span>
         </li>
       
               <li>

        <a href="singlepage.html"><img src="web/Eventos/incachaca.jpg" width="100%"></a>
         <h3 class="tituloSec">RAPPEL, TREKKING Y CANOPY EN INCACHACA - DOMINGO 15 DE MAYO - SANTA CRUZ.</h3>
        <p class="contDescp">Disfruta un DOMINGO diferente en pleno encuentro con la naturaleza, nos trasladamos a INCACHACA para hacer RAPPEL, TREKKING Y CANOPY.TREKKING, recorre los diversos lugares que ofrece incachaca: ✔ Velo de la novia ✔ La garganta del Diablo ✔ Baño de las Ñustas ✔ Puente del Inca ✔ Laguna Incachaca --> RAPPEL, disfruta del descenso a través de cuerdas desde el puente colgante (60 metros). El paquete de 1 día INCLUYE: ✔ Transporte privado ida, vuelta y rutas internas (Santa Cruz-Cbba - INCACHACA- Santa Cruz). ✔ Alimentación completa. - Desayuno Continental - Almuerzo (Trucha) - Dos refrigerios ✔ Guías especializados en TURISMO AVENTURA. ✔ Ingreso al área ✔ Rappel (descenso 60 metros) con el equipo completo. ✔ Canopy equipo completo ✔ Registro fotográfico GOPRO. ✔ Souvenir - mochila ecológica
        
         </p>
          <span><a href="singlepage.html"><img src="web/images/like.png" title="like" /></a> 200</span>
         </li>

        <li>

        <a href="singlepage.html"><img src="web/Eventos/lasDelicias.JPG" width="100%"></a>
         <h3 class="tituloSec">Tour: Jardin de las Delicias, P.N. Amboro (2 dias, desde Santa Cruz)
</h3>
        <p class="contDescp">Programa:- Recojo y traslado a “El Jardín de las Delicias” en la mañana. - Paseo guiado por Senderos Ecológicos de las Caídas de Agua de las Liras. - Visita al Sendero de Interpretación (Observación de: Árboles Gigantes, Árboles de fruto para la alimentación, Patujusales, etc.) . - Observación de Aves, ardillas, monos entre otros. - Vista panorámica desde El mirador. - Posibilidad de bañarse en una piscina natural de aguas cristalinas. - El segundo día después de medio día retorno a Santa Cruz. El paquete incluye:- Transporte privado 4x4 . - Guía Local (español) .- Alojamiento en cabañas con baños y duchas. - Alimentación completa (no incluye la cena del segundo día), refrigerios durante los recorridos

        
         </p>
          <span><a href="singlepage.html"><img src="web/images/like.png" title="like" /></a>400</span>
         </li>

         <li>

        <a href="singlepage.html"><img src="web/Eventos/copacabana.JPG" width="100%"></a>
         <h3 class="tituloSec">COPACABANA Y TIWANAKU - FERIADO DE SEMANA SANTA - 3 DÍAS Y 2 NOCHES (VIERNES 25, SÁBADO 26 Y DOMINGO 27 DE MARZO)

</h3>
        <p class="contDescp">La aventura en este histórico destino te llevará a conocer: * Ruinas de Tiwanaku * Puerta del Sol * Pumapunku * Pirámide de Akapana * Templo de Kalasasaya * Copacabana¨ * Monolitos * Isla del Sol * Islas Flotantes * Horca del Inca * Calvario * Santuario de Copacabana El paquete de 3 días y 2 noches INCLUYE: ✔ Transporte privado ida y vuelta Cochabamba/El Alto-La Paz/Cochabamba. ✔ Transporte privado ruta interna El Alto-La Paz/Tiahuanaco/El Alto-La Paz ✔ Transporte privado ruta interna El Alto-La Paz/Copacabana/El Alto-La Paz ✔ Alimentación COMPLETA en todo el viaje (desayuno, almuerzo y cena). ✔ Hospedaje 2 noches (Habitaciones con baño privado y desayuno buffet) ✔ Ingreso a los Atractivos ✔ Paseo en Lancha ✔ Guías locales. ✔ Guías desde Cochabamba ✔ Souvenir ✔ Registro Fotográfico. ✔ Botiquín y guías capacitados en primeros auxilios!!!


        
         </p>
          <span><a href="singlepage.html"><img src="web/images/like.png" title="like" /></a>250</span>
         </li>



 <li>


        
        <!-- End of grid blocks -->
      </ul>

    </div>
   </div>
    <footer>
    <?php include('footer.php'); ?>
    </footer>
  </div>
		
  <!-- include jQuery -->
  <script src="web/js/jquery.min.js"></script>

  <!-- Include the imagesLoaded plug-in -->
  <script src="web/js/jquery.imagesloaded.js"></script>

  <!-- Include the plug-in -->
  <script src="web/js/jquery.wookmark.js"></script>

  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
        var handler = null;

        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#main'), // Optional, used for some extra CSS styling
          offset: 20, // Optional, the distance between grid items
          itemWidth: 275 // Optional, the width of a grid item
        };

        /**
         * When scrolled all the way to the bottom, add more tiles.
         */
        function onScroll(event) {
          // Check if we're within 100 pixels of the bottom edge of the broser window.
          var winHeight = window.innerHeight ? window.innerHeight : $(window).height(); // iphone fix
          var closeToBottom = ($(window).scrollTop() + winHeight > $(document).height() - 100);

          if (closeToBottom) {
            // Get the first then items from the grid, clone them, and add them to the bottom of the grid.
            var items = $('#tiles li'),
                firstTen = items.slice(0, 10);
            $('#tiles').append(firstTen.clone());

            // Destroy the old handler
            if (handler.wookmarkInstance) {
              handler.wookmarkInstance.clear();
            }

            // Create a new layout handler.
            handler = $('#tiles li');
            handler.wookmark(options);
          }
        };

        // Capture scroll event.
        $(window).bind('scroll', onScroll);

        // Call the layout function.
        handler = $('#tiles li');
        handler.wookmark(options);
      });
    })(jQuery);
  </script>
</div>
</body>
</html>
