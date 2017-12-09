<?php ob_start(); ?>
<?php require_once("../classes/config/init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mūza Rubackytė</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108550676-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-108550676-1');
    </script>

    <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.js"></script>
    <![endif]-->
</head>

<body>
    <!--  HEADER SECTION  -->
    <section id="header">

        <!--   TOP MENU   -->
        <nav class="navbar navbar-inverse mobile_top_menu">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand <?php if($_SESSION['lang'] == 'en') echo 'active_tops'; ?>" href="?lang=en">EN</a>
                    <a class="navbar-brand <?php if($_SESSION['lang'] == 'fr') echo 'active_tops'; ?>" href="?lang=fr">FR</a>
                    <a class="navbar-brand <?php if($_SESSION['lang'] == 'lt') echo 'active_tops'; ?>" href="?lang=lt">LT</a>
                </div>
                <div class="pull-right top_menu_mobile">
                    <ul class="nav navbar-nav">
                        <?php $tests = EventsText::find(1); ?>
                        <?php if($_SESSION['lang'] == 'en') { ?> <li><a href="events.php#muza"><span></span> <?php echo $tests->pavadinimas3En; ?></a></li> <?php } ?>
                        <?php if($_SESSION['lang'] == 'fr') { ?> <li><a href="events.php#muza"><span></span> <?php echo $tests->pavadinimas3Fr; ?></a></li> <?php } ?>
                        <?php if($_SESSION['lang'] == 'lt') { ?> <li><a href="events.php#muza"><span></span> <?php echo $tests->pavadinimas3; ?></a></li> <?php } ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>

        <?php
            $uri = $_SERVER['REQUEST_URI'];
            $kategorija = explode('/', $uri);
            $actual_link = 'http://'.$_SERVER['HTTP_HOST'].'/';
        ?>
        <!--    BOTTOM MENU    -->
        <nav  class="bottom-navbar navbar navbar-inverse">
            <div class="container on_mobile_100">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <?php $meniu = Meniu::find(1); ?>

                <div id="navbar" class="collapse navbar-collapse pull-center">
                    <?php if($_SESSION['lang'] == 'lt') { ?>
                    <div class="nav navbar-nav">
                        <div><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaLt; ?></a></div>
                        <div><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaLt; ?></a></div>>
                        <div><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasLt; ?></a></div>
                        <div><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasLt; ?></a></div>
                        <div><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaLt; ?></a></div>
                        <div><a <?php if(strpos($uri, 'media') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->mediaLt; ?></a></div>
                        <div><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiLt; ?></a></div>

                    </div>
                    <?php } ?>
                    <?php if($_SESSION['lang'] == 'en') { ?>
                    <ul class="nav navbar-nav">
                        <li><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'media') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->mediaEn; ?></a></li>

                        <li><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiEn; ?></a></li>

                    </ul>
                    <?php } ?>
                    <?php if($_SESSION['lang'] == 'fr') { ?>
                    <ul class="nav navbar-nav">
                        <li><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'media') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->mediaFr; ?></a></li>

                        <li><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiFr; ?></a></li>

                    </ul>
                    <?php } ?>
                </div>
                <div id="muza"></div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>