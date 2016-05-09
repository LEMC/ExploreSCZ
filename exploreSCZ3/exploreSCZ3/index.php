<?php 
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='index.php') {
	include $browser_t.'/index.php';
	}
elseif ($page_name=='LugarTuristico.php') {
	include $browser_t.'/LugarTuristico.php';
	}
elseif ($page_name=='Eventos.php') {
	include $browser_t.'/eventos.php';
	}
elseif ($page_name=='mapa.php') {
	include $browser_t.'/mapa.php';
	}
elseif ($page_name=='contact.php') {
	//include 'app/contact.php';
	include $browser_t.'/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>
