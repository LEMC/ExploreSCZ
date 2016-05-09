<?php require_once('Connections/cnx.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_cnx, $cnx);
$query_list_bancos = "select empresa_servicio.nombre, empresa_servicio.direccion, empresa_servicio.ubicacion     from empresa_servicio, rubro where empresa_servicio.id_rubro_fk=rubro.id and rubro.nombre='Bancario'";
$list_bancos = mysql_query($query_list_bancos, $cnx) or die(mysql_error());
$row_list_bancos = mysql_fetch_assoc($list_bancos);
$totalRows_list_bancos = mysql_num_rows($list_bancos);

mysql_select_db($database_cnx, $cnx);
$query_list_cajeros = "select empresa_servicio.nombre, empresa_servicio.direccion, empresa_servicio.ubicacion    from empresa_servicio, rubro where empresa_servicio.id_rubro_fk=rubro.id and rubro.nombre='Cajero'";
$list_cajeros = mysql_query($query_list_cajeros, $cnx) or die(mysql_error());
$row_list_cajeros = mysql_fetch_assoc($list_cajeros);
$totalRows_list_cajeros = mysql_num_rows($list_cajeros);

mysql_select_db($database_cnx, $cnx);
$query_list_hospital = "select empresa_servicio.nombre, empresa_servicio.direccion, empresa_servicio.ubicacion from empresa_servicio, rubro where empresa_servicio.id_rubro_fk=rubro.id and rubro.nombre='Hospitales'";
$list_hospital = mysql_query($query_list_hospital, $cnx) or die(mysql_error());
$row_list_hospital = mysql_fetch_assoc($list_hospital);
$totalRows_list_hospital = mysql_num_rows($list_hospital);
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
 <title>ExploreSCZ| Mapa</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="web/css/style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>                        
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0qFfwRvJdVMuYl49NEDPOomhcrwr0uj0&callback=initMap" async defer></script>
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

 	<div id="map" style="width: 100%; height: 500px;">    </div>
 	<button id="agregar_marcadores" >Mostrar Bancos</button>
    <button id="agregar_cajeros" >Mostrar Cajeros</button>
        <button id="agregar_hospitales" >Mostrar Hospitales</button>
 	 <script>
            var inicio = {lat: -17.7834679, lng: -63.1841837};
            var map;
           
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: inicio,
                    scrollwhee: false,
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROOTMAP
                });
            }


            $("#agregar_marcadores").click(function() {
                <?php while ($row_list_bancos = mysql_fetch_assoc($list_bancos)){
					
					$ubicacion  =$row_list_bancos['ubicacion'];
					$porciones = explode(";", $ubicacion);	
					?> 
					
				var banco ={lat: <?php echo $porciones[0]?>, lng:<?php echo $porciones[1]?>};
                var infowindow_banco =new google.maps.InfoWindow({
                   content:'<h2><?php echo $row_list_bancos['direccion']; ?></h2>'
                 });
                   
            

                var marker = new google.maps.Marker({
                    map: map,
                    position: banco,
                    animation: google.maps.Animation.DROP,
                    title: '<?php echo $row_list_bancos['nombre']; ?>'
                });
                
              
                
                marker.addListener('click', function(){
                    infowindow_banco.open(map,marker);
                });
				<?php }?>
            }
			 
			);
			
			$("#agregar_cajeros").click(function() {
                <?php while ($row_list_cajeros = mysql_fetch_assoc($list_cajeros)){
					
					$ubicacion  =$row_list_cajeros['ubicacion'];
					$porciones = explode(";", $ubicacion);	
					?> 
					
				var cajero ={lat: <?php echo $porciones[0]?>, lng:<?php echo $porciones[1]?>};
                var infowindow_cajero =new google.maps.InfoWindow({
                   content:'<h2><?php echo $row_list_cajeros['direccion']; ?></h2>'
                 });
                   
                var marker = new google.maps.Marker({
                    map: map,
                    position: cajero,
                    animation: google.maps.Animation.DROP,
                    title: '<?php echo $row_list_cajeros['nombre']; ?>'
                });
                
                marker.addListener('click', function(){
                    infowindow_cajero.open(map,marker);
                });
				<?php }?>
            });
			
			$("#agregar_hospitales").click(function() {
                <?php while ($row_list_hospital = mysql_fetch_assoc($list_hospital )){
					
					$ubicacion  =$row_list_hospital['ubicacion']; ;
					$porciones = explode(";", $ubicacion);	
					?> 
					
				var hospital ={lat: <?php echo $porciones[0]?>, lng:<?php echo $porciones[1]?>};
                var infowindow_hospital =new google.maps.InfoWindow({
                   content:'<h2><?php echo $row_list_hospital['direccion']; ?></h2>'
                 });
                   
                var marker = new google.maps.Marker({
                    map: map,
                    position: hospital,
                    animation: google.maps.Animation.DROP,
                    title: '<?php echo $row_list_hospital['nombre']; ?>'
                });
                
                marker.addListener('click', function(){
                    infowindow_hospital.open(map,marker);
                });
				<?php }?>
            });
            
        </script>
					
</body>
<footer>
	<?php include('footer.php'); ?>
</footer>>
</html>
<?php
mysql_free_result($list_bancos);

mysql_free_result($list_cajeros);

mysql_free_result($list_hospital);
?>
