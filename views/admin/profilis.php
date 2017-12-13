<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
    if($session->is_signed_in()) {
        
    } else {
        redirect("/");
    }
?>
<?php
    if(isset($_POST['profilis_submit'])) {
        $user = Users::find(3);

        if($user->slaptazodis == md5($_POST['pass'])) {
            if($_POST['new_pass'] == $_POST['new_pass2']) {
                $user->slaptazodis = md5($_POST['new_pass']);
                $user->pastas = $_POST['email'];
                if($user->save()) {
                    $session->message(1);
                    redirect('profilis.php');
                }
            } else {
                $session->message(2);
                redirect('profilis.php');
            }
        } else {
           $session->message(3);
           redirect('profilis.php'); 
        }
        
//        $session->message(1);
//        redirect('profilis.php');

    }

    if(isset($_POST['visosKalbos_submit'])) {
        $settings = Settings::find(1);
        $settings->language = $_POST['kalbosVisos'];
        
        if($settings->save()) {
            $session->message(4);
            redirect('profilis.php'); 
        }
    }

    if(isset($_POST['visosKalbos2_submit'])) {
        $web = Informacija::find(1);
        $web->cd_lt = $_POST['cd_lt'];
        $web->cd_en = $_POST['cd_en'];
        $web->cd_fr = $_POST['cd_fr'];
        $web->dvd_lt = $_POST['dvd_lt'];
        $web->dvd_en = $_POST['dvd_en'];
        $web->dvd_fr = $_POST['dvd_fr'];
        $web->nuotrauka_lt = $_POST['nuotrauka_lt'];
        $web->nuotrauka_en = $_POST['nuotrauka_en'];
        $web->nuotrauka_fr = $_POST['nuotrauka_fr'];
        $web->archyvas_lt = $_POST['archyvas_lt'];
        $web->archyvas_en = $_POST['archyvas_en'];
        $web->archyvas_fr = $_POST['archyvas_fr'];
        $web->organizavimas_lt = $_POST['organizavimas_lt'];
        $web->organizavimas_en = $_POST['organizavimas_en'];
        $web->organizavimas_fr = $_POST['organizavimas_fr'];
        $web->europa_lt = $_POST['europa_lt'];
        $web->europa_en = $_POST['europa_en'];
        $web->europa_fr = $_POST['europa_fr'];
        $web->jav_lt = $_POST['jav_lt'];
        $web->jav_en = $_POST['jav_en'];
        $web->jav_fr = $_POST['jav_fr'];
        $web->klausimai_lt = $_POST['klausimai_lt'];
        $web->klausimai_en = $_POST['klausimai_en'];
        $web->klausimai_fr = $_POST['klausimai_fr'];
        $web->save();
        
        $grafikai = GrafikasKategorija::find(1);
        $grafikai->kategorijaLt = $_POST['koncertai_lt'];
        $grafikai->kategorijaEn = $_POST['koncertai_en'];
        $grafikai->kategorijaFr = $_POST['koncertai_fr'];
        $grafikai->save();
        
        $grafikai2 = GrafikasKategorija::find(2);
        $grafikai2->kategorijaLt = $_POST['recitaliai_lt'];
        $grafikai2->kategorijaEn = $_POST['recitaliai_en'];
        $grafikai2->kategorijaFr = $_POST['recitaliai_fr'];
        $grafikai2->save();
        
        $grafikai3 = GrafikasKategorija::find(3);
        $grafikai3->kategorijaLt = $_POST['kamerine_lt'];
        $grafikai3->kategorijaEn = $_POST['kamerine_en'];
        $grafikai3->kategorijaFr = $_POST['kamerine_fr'];
        $grafikai3->save();
        
        redirect('profilis.php'); 

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

            <?php require_once('admin-menu.php'); ?>
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
                    Puslapis - Profilis
                </h3>
                <span class="sub-title">Pagrindinis / Profilis</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

                <!--tab nav start-->
                <section class="panel">
                    <header class="panel-heading tab-dark ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#home">Profilis</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#kalba">Kalbos nustatymas</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#svetaine">Svetainės nustatymas</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Profilio nustatymai
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <?php $users = Users::find(3); ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">El.paštas</label>
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="email" value="<?php echo $users->pastas; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Dabartinis slaptažodis</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control calendar" name="pass">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Naujas slaptažodis</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control calendar" name="new_pass">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Pakartokite slaptažodį</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control calendar" name="new_pass2">
                                            </div>
                                        </div>
                                        <input type="submit" name="profilis_submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </section>
                            </div>
                            <div id="kalba" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Pagrindinė kalba
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <?php $language = Settings::find(1); ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Pagrindinė kalba</label>
                                            <div class="col-sm-10">
                                                <select name="kalbosVisos" id="" class="form-control">
                                                    <?php if($language->language == 'EN') { ?>
                                                        <option value="en" selected>English</option>
                                                    <?php } else { ?>
                                                        <option value="en">English</option>
                                                    <?php } ?>
                                                    
                                                    <?php if($language->language == 'FR') { ?>
                                                        <option value="fr" selected>France</option>
                                                    <?php } else { ?>
                                                        <option value="fr">France</option>
                                                    <?php } ?>
                                                    
                                                    <?php if($language->language == 'LT') { ?>
                                                        <option value="lt" selected>Lietuvių</option>
                                                    <?php } else { ?>
                                                        <option value="lt">Lietuvių</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="submit" name="visosKalbos_submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </section>
                            </div>
                            
                            <div id="svetaine" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Žodžiai
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <?php $web = Informacija::find(1); ?>
                                        <?php 
                                            $grafikai = GrafikasKategorija::find(1); 
                                        ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">KONCERTAI</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="koncertai_lt" value="<?php echo $grafikai->kategorijaLt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="koncertai_en" value="<?php echo $grafikai->kategorijaEn; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="koncertai_fr" value="<?php echo $grafikai->kategorijaFr; ?>">
                                            </div>
                                        </div>
                                        <?php $grafikai2 = GrafikasKategorija::find(2); ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">REČITALIAI</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="recitaliai_lt" value="<?php echo $grafikai2->kategorijaLt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="recitaliai_en" value="<?php echo $grafikai2->kategorijaEn; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="recitaliai_fr" value="<?php echo $grafikai2->kategorijaFr; ?>">
                                            </div>
                                        </div>
                                        <?php $grafikai3 = GrafikasKategorija::find(3); ?>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">KAMERINE MUZIKA</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="kamerine_lt" value="<?php echo $grafikai3->kategorijaLt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="kamerine_en" value="<?php echo $grafikai3->kategorijaEn; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="kamerine_fr" value="<?php echo $grafikai3->kategorijaFr; ?>">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">CD/VINILAS</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="cd_lt" value="<?php echo $web->cd_lt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="cd_en" value="<?php echo $web->cd_en; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="cd_fr" value="<?php echo $web->cd_fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">DVD</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="dvd_lt" value="<?php echo $web->dvd_lt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="dvd_en" value="<?php echo $web->dvd_en; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="dvd_fr" value="<?php echo $web->dvd_fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Nuotrauka</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="nuotrauka_lt" value="<?php echo $web->nuotrauka_lt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="nuotrauka_en" value="<?php echo $web->nuotrauka_en; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="nuotrauka_fr" value="<?php echo $web->nuotrauka_fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Archyvas</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="archyvas_lt" value="<?php echo $web->archyvas_lt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="archyvas_en" value="<?php echo $web->archyvas_en; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="archyvas_fr" value="<?php echo $web->archyvas_fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12 col-sm-2 control-label">Kontaktai</label>
                                            <div class="clearfix"></div>
                                            <label class="col-sm-2 col-sm-2 control-label">Koncertu organizavimas</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="organizavimas_lt" value="<?php echo $web->organizavimas_lt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="organizavimas_en" value="<?php echo $web->organizavimas_en; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="organizavimas_fr" value="<?php echo $web->organizavimas_fr; ?>">
                                            </div>
                                            <div class="clearfix"></div>
                                            <label class="col-sm-2 col-sm-2 control-label">EUROPA</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="europa_lt" value="<?php echo $web->europa_lt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="europa_en" value="<?php echo $web->europa_en; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="europa_fr" value="<?php echo $web->europa_fr; ?>">
                                            </div>
                                            <div class="clearfix"></div>
                                            <label class="col-sm-2 col-sm-2 control-label">JAV</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="jav_lt" value="<?php echo $web->jav_lt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="jav_en" value="<?php echo $web->jav_en; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="jav_fr" value="<?php echo $web->jav_fr; ?>">
                                            </div>
                                            <div class="clearfix"></div>
                                            <label class="col-sm-2 col-sm-2 control-label">Kiti klausimai</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="klausimai_lt" value="<?php echo $web->klausimai_lt; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="klausimai_en" value="<?php echo $web->klausimai_en; ?>">
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" name="klausimai_fr" value="<?php echo $web->klausimai_fr; ?>">
                                            </div>
                                        </div>
                                        <input type="submit" name="visosKalbos2_submit" value="Išsaugoti" class="btn btn-md btn-success">
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
<script src="js/jquery.iframe-post-form.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>
<script src="js/toastr-master/toastr.js"></script>
<script src="js/toastr-init.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        
        
        
        <?php if(!empty($session->message) && $session->message == 1) { ?>
            toastr.success("Jusu profilis atnaujintas.", "Asmeninė informacija");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 2) { ?>
            toastr.error("Neteisingas naujas slaptažodis", "Klaida");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 3) { ?>
            toastr.error("Neteisingas slaptažodis", "Klaida");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 4) { ?>
            toastr.error("Informacija Atnaujinta", "Kalbos");
        <?php } ?>
        
        <?php if(!empty($session->message) && $session->message == 5) { ?>
            toastr.success("Informacija Atnaujinta", "Svetainės kalbos");
        <?php } ?>
    });
</script>

</body>
</html>
