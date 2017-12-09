<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
    if($session->is_signed_in()) {
        
    } else {
        redirect("/");
    }
?>
<?php
    if(isset($_POST['kontaktai_submit'])) {
        $emails = Email::find(1);
        $emails->email = $_POST['email'];
        $emails->zinuteLt = $_POST['zinuteLt'];
        $emails->zinuteEn = $_POST['zinuteEn'];
        $emails->zinuteFr = $_POST['zinuteFr'];
        if($emails->save()) {
            $session->message(1);
            redirect('kontaktai.php');
        }
    }

    if(isset($_POST['europa_submit'])) {
        $europa = kontaktai::find(1);
        $europa->asmuo_eu = $_POST['kontaktinis_asmuo_eu'];
        $europa->email_eu = $_POST['elpastas_eu'];
        $europa->telefonas_eu = $_POST['telefonas_eu'];
        if($europa->save()) {
            $session->message(2);
            redirect('kontaktai.php');
        }
    }

    if(isset($_POST['jav_submit'])) {
        $jav = kontaktai::find(1);
        $jav->asmuo_jav = $_POST['kontaktinis_asmuo_jav'];
        $jav->email_jav = $_POST['elpastas_jav'];
        $jav->telefonas_jav = $_POST['telefonas_jav'];
        if($jav->save()) {
            $session->message(3);
            redirect('kontaktai.php');
        }
    }
if(isset($_POST['fr_submit'])) {
    $fr = kontaktai::find(1);
    $fr->asmuo_fr = $_POST['kontaktinis_asmuo_fr'];
    $fr->email_fr = $_POST['elpastas_fr'];
    $fr->telefonas_fr = $_POST['telefonas_fr'];
    if($fr->save()) {
        $session->message(4);
        redirect('kontaktai.php');
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

    <!--common style-->
    <link href="js/toastr-master/toastr.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

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
                            <li class="active"><a href="kontaktai.php"> Kontaktai</a></li>
                            <li><a href="koncertu_grafikas.php"> Koncertų grafikas</a></li>
                            <li><a href="events.php"> Save The Date</a></li>
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
                    Puslapis - Kontaktai
                </h3>
                <span class="sub-title">Pagrindinis / Kontaktai</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

                <!--tab nav start-->
                <section class="panel">
                    <header class="panel-heading tab-dark ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#home">Email nustatymai</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#europa">Eu kontaktai</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#jav">Jav kontaktai</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#jav">Fr kontaktai</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        El.pašto siuntimas
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <?php $email = Email::find(1); ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">El.paštas</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="email" value="<?php echo $email->email; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">El.pašto sėkmingas pranešimas LT</label>
                                            <div class="col-sm-10">
                                                <textarea name="zinuteLt" class="form-control" id="" cols="10" rows="10"><?php echo $email->zinuteLt; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">El.pašto sėkmingas pranešimas EN</label>
                                            <div class="col-sm-10">
                                                <textarea name="zinuteEn" class="form-control" id="" cols="10" rows="10"><?php echo $email->zinuteEn; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">El.pašto sėkmingas pranešimas FR</label>
                                            <div class="col-sm-10">
                                                <textarea name="zinuteFr" class="form-control" id="" cols="10" rows="10"><?php echo $email->zinuteFr; ?></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" name="kontaktai_submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </section>
                            </div>
                            <div id="europa" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Europos Kontaktai
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <?php $europa = kontaktai::find(1); ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kontaktinis asmuo</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="kontaktinis_asmuo_eu" value="<?php echo $europa->asmuo_eu; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">El.paštas</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="elpastas_eu" value="<?php echo $europa->email_eu; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Telefono numeris</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="telefonas_eu" value="<?php echo $europa->telefonas_eu; ?>">
                                            </div>
                                        </div>
                                        <input type="submit" name="europa_submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </section>
                            </div>
                            <div id="jav" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Jav Kontaktai
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <?php $jav = kontaktai::find(1); ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kontaktinis asmuo</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="kontaktinis_asmuo_jav" value="<?php echo $jav->asmuo_jav; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">El.paštas</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="elpastas_jav" value="<?php echo $jav->email_jav; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Telefono numeris</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="telefonas_jav" value="<?php echo $jav->telefonas_jav; ?>">
                                            </div>
                                        </div>
                                        <input type="submit" name="jav_submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </section>
                            </div>
                            <div id="jav" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Fr Kontaktai
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <?php $fr = kontaktai::find(1); ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kontaktinis asmuo</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="kontaktinis_asmuo_fr" value="<?php echo $fr->asmuo_fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">El.paštas</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="elpastas_fr" value="<?php echo $fr->email_fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Telefono numeris</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="telefonas_fr" value="<?php echo $fr->telefonas_fr; ?>">
                                            </div>
                                        </div>
                                        <input type="submit" name="fr_submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <!--tab nav start-->

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
<script src="js/toastr-master/toastr.js"></script>
<script src="js/toastr-init.js"></script>


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".calendar").flatpickr();  
        
        <?php if(!empty($session->message) && $session->message == 1) { ?>
            toastr.success("Sėkmingai atnaujintas.", "El.paštas");
        <?php } ?>
        
        <?php if(!empty($session->message) && $session->message == 2) { ?>
            toastr.success("Europos kontaktai atnaujinti sėkmingai", "Kontaktai");
        <?php } ?>
        
        <?php if(!empty($session->message) && $session->message == 3) { ?>
            toastr.success("JAV kontaktai atnaujinti sėkmingai", "Kontaktai");
        <?php } ?>

    });
</script>

</body>
</html>
