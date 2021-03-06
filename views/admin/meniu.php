<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
    if($session->is_signed_in()) {
        
    } else {
        redirect("/");
    }
?>
<?php
    if(isset($_POST['lietuviskai_submit'])) {
        $meniu = Meniu::find(1);
        $meniu->biografijaLt = $_POST['biografijaLt'];
        $meniu->diskografijaLt = $_POST['diskografijaLt'];
        $meniu->grafikasLt = $_POST['grafikasLt'];
        $meniu->archyvasLt = $_POST['archyvasLt'];
        $meniu->galerijaLt = $_POST['galerijaLt'];
        $meniu->kontaktaiLt = $_POST['kontaktaiLt'];
        $meniu->mediaLt = $_POST['mediaLt'];
        $meniu->subMenu1Lt = $_POST['subMenu1Lt'];
        $meniu->subMenu2Lt = $_POST['subMenu2Lt'];
        $meniu->subMenu3Lt = $_POST['subMenu3Lt'];
        $meniu->subMenu4Lt = $_POST['subMenu4Lt'];
        if($meniu->save()) {
            $session->message(1);
            redirect('meniu.php');
        }
    }

    if(isset($_POST['angliskai_submit'])) {
        $meniu = Meniu::find(1);
        $meniu->biografijaEn = $_POST['biografijaEn'];
        $meniu->diskografijaEn = $_POST['diskografijaEn'];
        $meniu->grafikasEn = $_POST['grafikasEn'];
        $meniu->archyvasEn = $_POST['archyvasEn'];
        $meniu->galerijaEn = $_POST['galerijaEn'];
        $meniu->kontaktaiEn = $_POST['kontaktaiEn'];
        $meniu->mediaEn = $_POST['mediaEn'];
        $meniu->subMenu1En = $_POST['subMenu1En'];
        $meniu->subMenu2En = $_POST['subMenu2En'];
        $meniu->subMenu3En = $_POST['subMenu3En'];
        $meniu->subMenu4En = $_POST['subMenu4En'];
        if($meniu->save()) {
            $session->message(2);
            redirect('meniu.php');
        }
    }

    if(isset($_POST['prancuziskai_submit'])) {
        $meniu = Meniu::find(1);
        $meniu->biografijaFr = $_POST['biografijaFr'];
        $meniu->diskografijaFr = $_POST['diskografijaFr'];
        $meniu->grafikasFr = $_POST['grafikasFr'];
        $meniu->archyvasFr = $_POST['archyvasFr'];
        $meniu->galerijaFr = $_POST['galerijaFr'];
        $meniu->kontaktaiFr = $_POST['kontaktaiFr'];
        $meniu->mediaFr = $_POST['mediaFr'];
        $meniu->subMenu1Fr = $_POST['subMenu1Fr'];
        $meniu->subMenu2Fr = $_POST['subMenu2Fr'];
        $meniu->subMenu3Fr = $_POST['subMenu3Fr'];
        $meniu->subMenu4Fr = $_POST['subMenu4Fr'];
        if($meniu->save()) {
            $session->message(3);
            redirect('meniu.php');
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
                    Puslapis - Meniu
                </h3>
                <span class="sub-title">Pagrindinis / Meniu</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

                <!--tab nav start-->
                <section class="panel">
                    <header class="panel-heading tab-dark ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#home">Lietuviškai</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#home5">Angliškai</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#home6">Prancūziškai</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home" class="tab-pane active">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Meniu Lietuviškai
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <?php $meniu = Meniu::find(1); ?>

                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="biografijaLt" value="<?php echo $meniu->biografijaLt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="diskografijaLt" value="<?php echo $meniu->diskografijaLt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="grafikasLt" value="<?php echo $meniu->grafikasLt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="archyvasLt" value="<?php echo $meniu->archyvasLt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="galerijaLt" value="<?php echo $meniu->galerijaLt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="kontaktaiLt" value="<?php echo $meniu->kontaktaiLt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="mediaLt" value="<?php echo $meniu->mediaLt; ?>">
                                            </div>
                                        </div>
                                            <p>sub meniu</p>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu1Lt" value="<?php echo $meniu->subMenu1Lt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu2Lt" value="<?php echo $meniu->subMenu2Lt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu3Lt" value="<?php echo $meniu->subMenu3Lt; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu4Lt" value="<?php echo $meniu->subMenu4Lt; ?>">
                                            </div>
                                        </div>
                                        <input type="submit" name="lietuviskai_submit" value="Atnaujinti" class="btn btn-md btn-success">
                                    </form>
                                </section>
                            </div>
                            <div id="home5" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Meniu Angliškai
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="biografijaEn" value="<?php echo $meniu->biografijaEn; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="diskografijaEn" value="<?php echo $meniu->diskografijaEn; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="grafikasEn" value="<?php echo $meniu->grafikasEn; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="archyvasEn" value="<?php echo $meniu->archyvasEn; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="galerijaEn" value="<?php echo $meniu->galerijaEn; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="kontaktaiEn" value="<?php echo $meniu->kontaktaiEn; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="mediaEn" value="<?php echo $meniu->mediaEn; ?>">
                                            </div>
                                        </div>
                                        <p>sub meniu</p>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu1En" value="<?php echo $meniu->subMenu1En; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu2En" value="<?php echo $meniu->subMenu2En; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu3En" value="<?php echo $meniu->subMenu3En; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu4En" value="<?php echo $meniu->subMenu4En; ?>">
                                            </div>
                                        </div>
                                        <input type="submit" name="angliskai_submit" value="Atnaujinti" class="btn btn-md btn-success">
                                    </form>
                                </section>
                            </div>
                            <div id="home6" class="tab-pane">
                                <section class="panel">
                                    <header class="panel-heading head-border">
                                        Meniu Prancūziškai
                                    </header>
                                    <form class="form-horizontal tasi-form" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="biografijaFr" value="<?php echo $meniu->biografijaFr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="diskografijaFr" value="<?php echo $meniu->diskografijaFr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="grafikasFr" value="<?php echo $meniu->grafikasFr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="archyvasFr" value="<?php echo $meniu->archyvasFr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="galerijaFr" value="<?php echo $meniu->galerijaFr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="kontaktaiFr" value="<?php echo $meniu->kontaktaiFr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="mediaFr" value="<?php echo $meniu->mediaFr; ?>">
                                            </div>
                                        </div>
                                        <p>sub meniu</p>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu1Fr" value="<?php echo $meniu->subMenu1Fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu2Fr" value="<?php echo $meniu->subMenu2Fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu3Fr" value="<?php echo $meniu->subMenu3Fr; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group sub-menu">
                                            <div class="col-sm-10">
                                                <input class="form-control calendar" name="subMenu4Fr" value="<?php echo $meniu->subMenu4Fr; ?>">
                                            </div>
                                        </div>
                                        <input type="submit" name="prancuziskai_submit" value="Atnaujinti" class="btn btn-md btn-success">
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
<script src="js/toastr-master/toastr.js"></script>
<script src="js/toastr-init.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        <?php if(!empty($session->message) && $session->message == 1) { ?>
            toastr.success("Lietuviškas menių atnaujintas.", "Meniu");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 2) { ?>
            toastr.success("Angliškas menių atnaujintas.", "Meniu");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 3) { ?>
            toastr.success("Prancūziškas menių atnaujintas.", "Meniu");
        <?php } ?>
    });
</script>

</body>
</html>
