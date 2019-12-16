<?php require_once "langage.php";?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR" xml:lang="fr-FR">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
	<meta http-equiv="content-language" content="fr-FR" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link -->
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="img/icon.png">
    <link rel="shortcut icon" type="image/png" href="img/favicon.ico">

    <!-- StyleSheet -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Script -->
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>   <!-- Linkedin Card Script -->
    <script src="https://kit.fontawesome.com/102e53bfd3.js" crossorigin="anonymous"></script>
    <script>    
        (function() {
            var script   = document.createElement('script');
            script.src   = '//api.codeur.com/widgets/profile.js?k=1Z6j8MHlVQe3s4pm';
            script.async = true;
            var entry = document.getElementsByTagName('script')[0];
            entry.parentNode.insertBefore(script, entry);
        })();
    </script> <!-- Codeur.com Cards -->

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  <!-- Jquery -->
    <script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js" async></script>    <!-- slider -->
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script async>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    <script src="js/main.js" async></script>

    
    
    <!-- Title -->
    <title><?php echo $lang['Site-Title'];?> </title>
</head>

