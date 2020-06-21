<?php

    define("MYSQLHOST", "localhost");
    define("MYSQLUSER", "root");
    define("MYSQLPWD", "root");
    define("MYSQLDB", "happypets");
    
    // Debugmeldungen ein- / ausschalten
    define("DEBUG", False);
    define("DL_INFO", "info");
    define("DL_ALARM", "alarm");
    
    $dirs = explode("/", substr($_SERVER['PHP_SELF'], 1));
    $path['rel'] = "/formular/happypets/";
    //for ($i=0 ; $i<count($dirs)-1 ; $i++) {
    //    $path['rel'] .= "/";
    //}
    
    $path['server'] = $_SERVER['DOCUMENT_ROOT'];
    
    // Verzeichnisse
    $path['inc'] = $path['rel'] . "inc";
    $path['js'] = $path['rel'] . "js";
    $path['css'] = $path['rel'] . "css";
    $path['src'] = $path['rel'] . "src";
    $path['mail'] = $path['rel'] . "mail";
    $path['vendor'] = $path['rel'] . "vendor";

    $path['test'] = $path['rel'] . "";
    
    // Bilderverzeichnisse
    $path['img'] = $path['rel'] . "/img";
    $path['about'] = $path['img'] . "/about";
    $path['profilbilder'] = $path['img'] . "/profilbilder";
    $path['tiere'] = $path['img'] . "/tiere";
    
    //Tierbilderverzeichnisse
    $path['Fische'] = $path['tiere'] . "/Fische";
    $path['Hamster'] = $path['tiere'] . "/Hamster";
    $path['Hunde'] = $path['tiere'] . "/Hunde";
    $path['Katze'] = $path['tiere'] . "/Katze";
    
?>