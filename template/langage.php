<?php
    session_start();
    header('Cache-control: private'); // IE 6 FIX
    /*------------------------------------------------------ 
    Define lang switch define methode.
    ------------------------------------------------------*/
    if(isSet($_GET['lang']))                                #Methode Get
    {
        $lang = $_GET['lang'];
        // register the session and set the cookie
        $_SESSION['lang'] = $lang;
        setcookie("lang", $lang, time() + (3600 * 24 * 30));
    }
    else if(isSet($_SESSION['lang']))                       #Methode Session
    {
        $lang = $_SESSION['lang'];
    }
    else if(isSet($_COOKIE['lang']))                        #Methode Cookie
    {
        $lang = $_COOKIE['lang'];
    }
    else                                                    #Defaut Value french
    {
        $lang = 'fr';
    }


    /*------------------------------------------------------
    Define Lang file switch lang select.
    ------------------------------------------------------*/
    switch ($lang) {
        /* English case TODO UnComment when Write*/
        /* case 'en':
        $lang_file = 'lang.en.php';
        break; */
        
        /* Deutsch Case  TODO UnComment when Write*/
        /* case 'de':
        $lang_file = 'lang.de.php';
        break; */

        /* Spanish Case  TODO UnComment when Write*/
        /* case 'es':
        $lang_file = 'lang.es.php';
        break; */
        
        /* Japan Case  TODO UnComment when Write*/
        /* case 'jp':
        $lang_file = 'lang.jp.php';
        break; */
        
        /* French Case*/
        case 'fr':
        $lang_file = 'lang.fr.php';
        break;

        /* Default Case French version*/
        default:
        $lang_file = 'lang.fr.php';
    }
    include_once 'Languages/'.$lang_file;
?>