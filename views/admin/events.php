<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
    if($session->is_signed_in()) {
        
    } else {
        redirect("/");
    }
?>
<?php 
    if(isset($_POST['event_submit'])) {
        $pirmas = str_replace('<p>', '', $_POST['aprasymas_apLt']);
        $pirmas1 = str_replace('</p>', '', $pirmas);
        
        $antras = str_replace('<p>', '', $_POST['aprasymas_apEn']);
        $antras1 = str_replace('</p>', '', $antras);
        
        $trecias = str_replace('<p>', '', $_POST['aprasymas_apFr']);
        $trecias1 = str_replace('</p>', '', $trecias);
        
        $event = new Events();
        $event->data = $_POST['data'];
        $event->data_en = $_POST['data_en'];
        $event->data_fr = $_POST['data_fr'];
        $event->aprasymasLt = $pirmas1;
        $event->aprasymasEn = $antras1;
        $event->aprasymasFr = $trecias1;
        if($event->save()) {
            $session->message(1);
            redirect('events.php');
        }
    }

    if(isset($_POST['event2_submit'])) {
        $foto = EventsCd::find($_GET['id']);
        $foto->aprasymasLt = $_POST['aprasymas_apLt'];
        $foto->aprasymasEn = $_POST['aprasymas_apEn'];
        $foto->aprasymasFr = $_POST['aprasymas_apFr'];
        if($foto->save()) {
            $session->message(1);
            redirect('events.php');
        }
    }

    if(isset($_POST['event_submit_foto'])) {
        $foto = new EventsCd();
        $foto->nuotrauka = imageUpload($_FILES['fileToUpload'], 1);
        $foto->aprasymasLt = $_POST['lt_aprasymas'];
        $foto->aprasymasEn = $_POST['en_aprasymas'];
        $foto->aprasymasFr = $_POST['fr_aprasymas'];
        if($foto->save()) {
            $session->message(1);
            redirect('events.php');
        }
    }

    if(isset($_GET['istrinti_archyvas'])) {
        $istrinti = Events::find($_GET['istrinti_archyvas']);
        if($istrinti->delete()) {
            $session->message(2);
            redirect('events.php');
        }
    }

    if(isset($_GET['istrinti_cd'])) {
        $istrinti = EventsCd::find($_GET['istrinti_cd']);
        if($istrinti->delete()) {
            $session->message(2);
            redirect('events.php');
        }
    }

    if(isset($_POST['event_text'])) {
        $foundText = EventsText::find(1);
        $foundText->pavadinimas = $_POST['pavadinimas'];
        $foundText->pavadinimasEn = $_POST['pavadinimasEn'];
        $foundText->pavadinimasFr = $_POST['pavadinimasFr'];
        $foundText->pavadinimas2 = $_POST['pavadinimas2'];
        $foundText->pavadinimas2En = $_POST['pavadinimas2En'];
        $foundText->pavadinimas2Fr = $_POST['pavadinimas2Fr'];
        $foundText->pavadinimas3 = $_POST['pavadinimas3'];
        $foundText->pavadinimas3En = $_POST['pavadinimas3En'];
        $foundText->pavadinimas3Fr = $_POST['pavadinimas3Fr'];
        if($foundText->save()) {
            $session->message(3);
            redirect('events.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>BlackSpace TVS</title>

    <!--right slidebar-->
    <link href="css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/flatpickr.min.css" rel="stylesheet">

    <!--common style-->
    <link href="js/toastr-master/toastr.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea', entity_encoding : "raw" });</script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="index.html">
                    <img src="img/logo-icon.png" alt="">
                    <span class="brand-name">blackSPACE</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
<!--                    nav-active-->
                    <li>
                        <h3 class="navigation-title">Navigacija</h3>
                    </li>
                    <li class="menu-list">
                        <a href="index.html"><i class="fa fa-filter"></i> <span>Nustatymai</span></a>
                        <ul class="child-list">
                            <li><a href="profilis.php"> Profilio</a></li>
                            <li><a href="meniu.php"> Meniu</a></li>
                        </ul>
                    </li>
                    <li>
                        <h3 class="navigation-title">PUSLAPIAI</h3>
                    </li>
                    <li class="menu-list nav-active"><a href="#"><i class="fa fa-file"></i> <span>Puslapiai </span></a>
                        <ul class="child-list">
                            <li><a href="biografija.php"> Biografija</a></li>
                            <li><a href="diskografija.php"> Diskografija</a></li>
                            <li><a href="grafikas.php"> Repertuarai</a></li>
                            <li><a href="galerija.php"> Galerija</a></li>
                            <li><a href="kontaktai.php"> Kontaktai</a></li>
                            <li><a href="koncertu_grafikas.php"> Koncertų grafikas</a></li>
                            <li class="active"><a href="events.php"> Save The Date</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" style="min-height: 1200px;">

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.php">
                        <img src="img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">black<strong>SPACE</strong> TVS</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <img src="img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->


                <!--mega menu end-->
                <div class="notification-wrap">

                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">

                        <li>
                            <a href="javascript:;" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="img/avatar-mini.jpg" alt="">Admin
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Atsijungti</a></li>
                            </ul>
                        </li>
                        

                    </ul>
                </div>
                <!--right notification end-->
                </div>

            </div>
            <!-- header section end-->

            <!-- page head start-->
            <div class="page-head">
                <h3>
                    Puslapis - Save The Date
                </h3>
                <span class="sub-title">Pagrindinis / Save The Date</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <?php if(isset($_GET['id'])) { ?>
                <?php $findCd = EventsCd::find($_GET['id']); ?>
                <section class="panel">
                    <header class="panel-heading tab-dark ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#archyvas">CD</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="archyvas" class="tab-pane active">
                                <header class="panel-heading">
                                    Redaguoti CD Aprašymus
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="post">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas LT</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="aprasymas_apLt" class="form-control" value="<?php echo $findCd->aprasymasLt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas EN</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="aprasymas_apEn" class="form-control" value="<?php echo $findCd->aprasymasEn; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas FR</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="aprasymas_apFr" class="form-control" value="<?php echo $findCd->aprasymasFr; ?>">
                                            </div>
                                        </div>
                                        <input type="submit" name="event2_submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php } else { ?>
                <section class="panel">
                    <header class="panel-heading tab-dark ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#archyvas">Save The Date</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#naujas-irasas">Naujas Įrašas</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#naujas-cd">Naujas CD</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="archyvas" class="tab-pane active">
                                <header class="panel-heading">
                                    Tekstas
                                </header>
                                <?php $text = EventsText::find(1); ?>
                                <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Pavadinimas</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimas3" value="<?php echo $text->pavadinimas3; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Pavadinimas EN</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimas3En" value="<?php echo $text->pavadinimas3En; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Pavadinimas FR</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimas3Fr" value="<?php echo $text->pavadinimas3Fr; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Tekstas</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimas" value="<?php echo $text->pavadinimas; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Tekstas EN</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimasEn" value="<?php echo $text->pavadinimasEn; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Tekstas FR</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimasFr" value="<?php echo $text->pavadinimasFr; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Tekstas</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimas2" value="<?php echo $text->pavadinimas2; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Tekstas EN</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimas2En" value="<?php echo $text->pavadinimas2En; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-1 col-sm-2 control-label">Tekstas FR</label>
                                        <div class="col-sm-11">
                                            <input class="form-control" name="pavadinimas2Fr" value="<?php echo $text->pavadinimas2Fr; ?>">
                                        </div>
                                    </div>
                                    <input type="submit" name="event_text" value="Išsaugoti" class="btn btn-md btn-success">
                                </form>
                               
                                <header class="panel-heading">
                                        Save The Date Įrašai
                                </header>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Data</th>
                                        <th>Aprašymas</th>
                                        <th>Veiksmas</th>
                                    </tr>
                                    <?php $events = Events::all(); ?>
                                    <?php foreach($events as $event) { ?>
                                    <tr>
                                        <td><?php echo $event->id; ?></td>
                                        <td><?php echo $event->data; ?></td>
                                        <td><?php echo $event->aprasymasLt; ?></td>
                                        <td><a href="archyvas_redaguoti.php?redaguoti=<?php echo $event->id; ?>" class="btn btn-sm btn-success">Redaguoti</a> <a href="?istrinti_archyvas=<?php echo $event->id; ?>" class="btn btn-sm btn-danger">Ištrinti</a></td>
                                    </tr>
                                    <?php } ?>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                
                                <header class="panel-heading">
                                        Save The Date CD
                                </header>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Aprašymas</th>
                                        <th>Veiksmas</th>
                                    </tr>
                                    <?php $eventsCd = EventsCd::all('DESC'); ?>
                                    <?php foreach($eventsCd as $eventCd) { ?>
                                    <tr>
                                        <td><?php echo $eventCd->id; ?></td>
                                        <td><?php echo $eventCd->aprasymasLt; ?></td>
                                        <td><a href="?id=<?php echo $eventCd->id; ?>" class="btn btn-sm btn-success">Redaguoti</a> <a href="?istrinti_cd=<?php echo $eventCd->id; ?>" class="btn btn-sm btn-danger">Ištrinti</a></td>
                                    </tr>
                                    <?php } ?>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div id="naujas-irasas" class="tab-pane">
                                <header class="panel-heading">
                                    Naujas įrašas
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Data LT</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="data">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Data EN</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="data_en">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Data FR</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="data_fr">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas LT</label>
                                            <div class="col-sm-10">
                                                <textarea name="aprasymas_apLt" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas EN</label>
                                            <div class="col-sm-10">
                                                <textarea name="aprasymas_apEn" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas FR</label>
                                            <div class="col-sm-10">
                                                <textarea name="aprasymas_apFr" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" name="event_submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </div>
                            </div>
                            <div id="naujas-cd" class="tab-pane">
                                <header class="panel-heading">
                                    Naujas CD
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Nuotrauka</label>
                                            <div class="col-lg-10">
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas LT</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="lt_aprasymas" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas EN</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="en_aprasymas" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas FR</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="fr_aprasymas" class="form-control">
                                            </div>
                                        </div>
                                        <input type="submit" name="event_submit_foto" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php } ?>
            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2016 &copy;
            </footer>
            <!--footer section end-->


        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="css/flatpickr.min.js"></script>

<!--Nice Scroll-->
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!--right slidebar-->
<script src="js/slidebars.min.js"></script>

<!--switchery-->
<script src="js/switchery/switchery.min.js"></script>
<script src="js/switchery/switchery-init.js"></script>

<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>
<script src="js/toastr-master/toastr.js"></script>
<script src="js/toastr-init.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".calendar").flatpickr();  
        
        <?php if(!empty($session->message) && $session->message == 1) { ?>
            toastr.success("Naujas įrašas įkelas sėkmingai.", "Events");
        <?php } ?>
        
        <?php if(!empty($session->message) && $session->message == 2) { ?>
            toastr.success("Įrašas sėkmingai pašalintas", "Events");
        <?php } ?>
        
        <?php if(!empty($session->message) && $session->message == 3) { ?>
            toastr.success("Informacija atnaujinta", "Events");
        <?php } ?>

    });
</script>
</body>
</html>
