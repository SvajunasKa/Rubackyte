<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
    if($session->is_signed_in()) {
        
    } else {
        redirect("/");
    }

    if(isset($_GET['redaguoti']) == '') {
        redirect('diskografija.php');
    }
?>
<?php
    if(isset($_POST['submit'])) {
        $pirmas = str_replace('<p>', '', $_POST['aprasymasLt']);
        $pirmas1 = str_replace('</p>', '', $pirmas);
        
        $antras = str_replace('<p>', '', $_POST['aprasymasEn']);
        $antras1 = str_replace('</p>', '', $antras);
        
        $trecias = str_replace('<p>', '', $_POST['aprasymasFr']);
        $trecias1 = str_replace('</p>', '', $trecias);
        
        $cd = Events::find($_GET['redaguoti']);
        $cd->data = $_POST['data2'];
        $cd->data_en = $_POST['data2_en'];
        $cd->data_fr = $_POST['data2_fr'];
        $cd->aprasymasLt = $pirmas1;
        $cd->aprasymasEn = $antras1;
        $cd->aprasymasFr = $trecias1;
        if($cd->save()) {
            $session->message(1);
            redirect('archyvas_redaguoti.php?redaguoti='.$_GET['redaguoti']);
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
    <link href="css/flatpickr.min.css" rel="stylesheet">
    
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

                <!--tab nav start-->
                <section class="panel">
                    <header class="panel-heading tab-dark ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#home-iso">Save The Date</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <?php $cd_vinilas = Events::where('id', $_GET['redaguoti']); ?>
                            <div id="home-iso" class="tab-pane active">
                                <section class="panel">
                                <header class="panel-heading">
                                    Redaguoti Archyva <a href="events.php" class="btn btn-sm btn-info pull-right">Grįžti atgal</a>
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Data: <b><?php echo $cd_vinilas[0]->data; ?></b></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Įrašykite Datą LT</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="data2" value="<?php echo $cd_vinilas[0]->data; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Įrašykite Datą EN</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="data2_en" value="<?php echo $cd_vinilas[0]->data_en; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Įrašykite Datą FR</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="data2_fr" value="<?php echo $cd_vinilas[0]->data_fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas LT</label>
                                            <div class="col-sm-10">
                                                <textarea name="aprasymasLt" id="" cols="30" rows="10">
                                                    <?php echo $cd_vinilas[0]->aprasymasLt; ?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas EN</label>
                                            <div class="col-sm-10">
                                                <textarea name="aprasymasEn" id="" cols="30" rows="10">
                                                    <?php echo $cd_vinilas[0]->aprasymasEn; ?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Aprašymas FR</label>
                                            <div class="col-sm-10">
                                                <textarea name="aprasymasFr" id="" cols="30" rows="10">
                                                    <?php echo $cd_vinilas[0]->aprasymasFr; ?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </div>
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
            toastr.success("Sėkmingai atnaujintas", "Archyvas");
        <?php } ?>

    });
</script>

</body>
</html>
