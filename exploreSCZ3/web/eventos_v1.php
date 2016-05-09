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
		
			<!----end-innerpage---->
		  </div>
   	<footer class="entry-meta">
					 <?php include('footer.php'); ?>
	</footer>

 
</body>
</html>
