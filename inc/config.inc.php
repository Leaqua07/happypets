<?php
	define("MYSQLHOST", "localhost");
	define("MYSQLUSER", "root");
	define("MYSQLPWD", "root");
	define("MYSQLDB", "happypets");
	
	define("DEBUG", False);
	define("DL_INFO", "info");
	define("DL_ALARM", "alarm");
	
	$dirs = explode("/", substr($_SERVER['PHP_SELF'], 1));
	$path['rel'] = "";
	for ($i=0 ; $i<count($dirs)-1 ; $i++) {
		$path['rel'] .= "../";
	}
	
	$path['server'] = $_SERVER['DOCUMENT_ROOT'];
	
	$path['inc'] 				= $path['rel'] . "inc";
	$path['js'] 				= $path['rel'] . "js";
	$path['css'] 				= $path['rel'] . "css";
	$path['src'] 				= $path['rel'] . "src";
	$path['mail'] 				= $path['rel'] . "mail";
	$path['vendor'] 			= $path['rel'] . "vendor";
	
	$path['img'] 				= $path['rel'] . "img";
	$path['img_about'] 			= $path['img'] . "/about";
	$path['img_logos'] 			= $path['img'] . "/logos";
	$path['img_neuzugaenge'] 	= $path['img'] . "/neuzugaenge";
	$path['img_portfolio'] 		= $path['img'] . "/portfolio";
	$path['img_team'] 			= $path['img'] . "/team";
	$path['img_test'] 			= $path['img'] . "/test";
	$path['img_tiere'] 			= $path['img'] . "/tiere";
	
?>