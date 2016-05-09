<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
 <title>ExploreSCZ::Lugares Turisticos</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="web/css/style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="web/css/carousel.css" media="screen" />
<link rel="stylesheet" type="text/css" href="web/css/slideshow.css" media="screen" />

  <script type="text/javascript" src="web/js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript" src="web/js/jquery.jcarousel.min.js"></script>
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
<body class="contBody">
 <?php include('header.php'); ?>

		<div id="main" role="main">
					<!----start-innerpage---->
			<div class="single-page">
				<div class="blog-content1">
				
		    		<div class="b-content-main">
                    	<h2 id="nombreLT">Catedral Metropolitana "Basílica Menor de San Lorenzo"</h2>

		    			 <div class="slider-wrapper">
					        <div id="slideshow" class="nivoSlider">
					         <img src="web/imagenes/catedral.jpg" > 
					         <img src="web/imagenes/catedral.jpg" > 
                            <img src="web/imagenes/catedral1.jpg" > </div>
					      </div>
					      <script type="text/javascript">
							$(document).ready(function() {
								$('#slideshow').nivoSlider();
							});
						   </script>
		    			

		    			<p>El edificio-monumento que caracteriza el paisaje cruceño, se divisa desde la lejanía con dos imponentes torres de ladrillo color tierra, resultado de una obra popular que motivó a toda la población de la Santa Cruz de antaño a construir su propia Catedral.</p>
                        <h3 id="subTitulo">Direccion</h3>
                        <p>Calle René Moreno, Esq. Sucre.</p>
		    			<script type="text/javascript" src="web/js/jquery.lightbox.js"></script>
					    <link rel="stylesheet" type="text/css" href="web/css/lightbox.css" media="screen" />
						  <script type="text/javascript">
						    $(function() {
						        $('.b-content-main a').lightBox();
						    });
						    </script>
		    		</div>
				</div>
			
		
				<div class="comments-area">
						<h3><img src="web/images/comment1.png" title="comment" />Deja un comentario</h3>
							<form>
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Email</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Subject</label>
									<span>*</span>
									<textarea></textarea>
								</p>
								<p>
									<input type="submit" value="Comentar">
								</p>
							</form>		
				</div>
					<div class="box comment">
					<ul class="list">
					<li>
						<div class="preview"><a><img src="web/images/g18.jpg" width="50" height="50"></a></div>
						<div class="data">
							<div class="title">Jake Sully <a> June 20, 2013</a></div>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						</div>
						<div class="clear"></div>
					</li>
					
				</ul>
			  <div class="clear"></div>
			</div>
		<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
			<!----end-innerpage---->
		    </div>
   	<footer class="entry-meta">
					 <?php include('footer.php'); ?>
				</footer>

 
</body>
</html>
