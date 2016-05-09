<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
 <title>ExploreSCZ| Contacto</title>
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
<body class="contBody">
  
  	<!---start-wrap---->
<?php include('header.php'); ?>

	<div class="clear"> </div>
					<div class="contact">
						<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d486365.2030038508!2d-63.29183545251847!3d-17.757443890966766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e81ca7c01a63%3A0x5c8b0a53a467611b!2sSanta+Cruz+de+la+Sierra%2C+Bolivia!5e0!3m2!1ses!2sus!4v1462707677665" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					
					<div class="contact-info">
						<div class="contact-address">
							
						</div>
						<div class="contact-form">
							<h3 id="subTitulo">Contactanos:</h3>
							<form>
								<span>Name</span>
								<span><input type="text"></span>
								<span>Email</span>
								<span><input type="text"></span>
								<span>Fax</span>
								<span><input type="text"></span>
								<span>Subject</span>
								<span><textarea> </textarea></span>
								<span><input type="submit" /></span>
							</form>
						</div>
						<div class="clear"> </div>
					</div><br /><br />
 </div>
</body>
<footer>
	<?php include('footer.php'); ?>
</footer>>
</html>
