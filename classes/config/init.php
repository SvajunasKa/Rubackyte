<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS);
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'classes' . DS . 'config');

require_once("functions.php");
require_once("database.php");
require_once("session.php");
require_once("Menu.php");
require_once("Data.php");
require_once("Models/DbOptions.php");
require_once("Models/Users.php");
require_once("Models/Biografija.php");
require_once("Models/DiskografijaCd.php");
require_once("Models/DiskografijaDvd.php");
require_once("Models/DiskografijaKoncertai.php");
require_once("Models/Archyvas.php");
require_once("Models/Email.php");
require_once("Models/Kontaktai.php");
require_once("Models/Galerija.php");
require_once("Models/Events.php");
require_once("Models/EventsCd.php");
require_once("Models/Repertuaras.php");
require_once("Models/GrafikasKategorija.php");
require_once("Models/GrafikasMetai.php");
require_once("Models/KoncertuGrafikas.php");
require_once("Models/Meniu.php");
require_once("Models/EventsText.php");
require_once("Models/Settings.php");
require_once("Models/Informacija.php");
require_once("Models/Press.php");
require_once("Models/Audio.php");
require_once("Models/Interview.php");
require_once ("Models/IntroPopUp.php");
require_once("paginate.php");


header('Cache-control: private'); // IE 6 FIX

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    // register the session and set the cookie
    $_SESSION['lang'] = $lang;
    setcookie("lang", $lang, time() + (3600 * 24 * 30));
    header('Location: /index.php ');
} else if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $settings = Settings::find(1);
    $_SESSION['lang'] = $settings->language;
}

//    switch ($lang) {
//          case 'en':
//          $lang_file = 'lang.en.php';
//          break;
//
//          case 'lt':
//          $lang_file = 'lang.lt.php';
//          break;
//
//          case 'fr':
//          $lang_file = 'lang.fr.php';
//          break;
//
//          default:
//          $lang_file = 'lang.en.php';
//    }
//
//    require_once('languages/'.$lang_file);

?>