<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
    if($session->is_signed_in()) {
        
    } else {
        redirect("/");
    }
?>
<?php
    if(isset($_POST['submit'])) {
        $bio = Biografija::find(1);
        $bio->aprasymasLt = $_POST['aprasymasLt'];
        $bio->aprasymasLt2 = $_POST['aprasymasLt2'];
        $bio->aprasymasLt3 = $_POST['aprasymasLt3'];
        if($bio->save()) {
            $session->message(1);
            redirect('biografija.php');
        }
    }

    if(isset($_POST['submit2'])) {
        $bio = Biografija::find(1);
        $bio->aprasymasEn = $_POST['aprasymasEn'];
        $bio->aprasymasEn2 = $_POST['aprasymasEn2'];
        $bio->aprasymasEn3 = $_POST['aprasymasEn3'];
        if($bio->save()) {
            $session->message(1);
            redirect('biografija.php');
        }
    }

    if(isset($_POST['submit3'])) {
        $bio = Biografija::find(1);
        $bio->aprasymasFr = $_POST['aprasymasFr'];
        $bio->aprasymasFr2 = $_POST['aprasymasFr2'];
        $bio->aprasymasFr3 = $_POST['aprasymasFr3'];
        if($bio->save()) {
            $session->message(1);
            redirect('biografija.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    
    <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
    
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

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
                    Puslapis - Biografija
                </h3>
                <span class="sub-title">Pagrindinis / Biografija</span>
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
                            <li class="">
                                <a data-toggle="tab" href="#per">Angliškai</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#tas">Prancūziškai</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <?php $biografija = Biografija::find(1); ?>
                                <div id="home" class="tab-pane active">
                                    <form action="" method="POST">
                                        <h4>Biografija</h4>
                                        <textarea name="aprasymasLt" id="editor1" rows="10" cols="80"><?php echo $biografija->aprasymasLt; ?></textarea>

                                        <h4>Pagrindinis aprašymas kairėje</h4>
                                        <textarea name="aprasymasLt2" id="editor2" rows="10" cols="80"><?php echo $biografija->aprasymasLt2; ?></textarea>

                                        <h4>Pagrindinis aprašymas dešinėje</h4>
                                        <textarea name="aprasymasLt3" id="editor3" rows="10" cols="80"><?php echo $biografija->aprasymasLt3; ?></textarea>
                                        <br>
                                        <input type="submit" name="submit" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </div>
                                <div id="per" class="tab-pane">
                                    <form action="" method="POST">
                                        <h4>Biografija</h4>
                                        <textarea name="aprasymasEn" id="editor4" rows="10" cols="80"><?php echo $biografija->aprasymasEn; ?></textarea>

                                        <h4>Pagrindinis aprašymas kairėje</h4>
                                        <textarea name="aprasymasEn2" id="editor5" rows="10" cols="80"><?php echo $biografija->aprasymasEn2; ?></textarea>

                                        <h4>Pagrindinis aprašymas dešinėje</h4>
                                        <textarea name="aprasymasEn3" id="editor6" rows="10" cols="80"><?php echo $biografija->aprasymasEn3; ?></textarea>
                                        <br>
                                        <input type="submit" name="submit2" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </div>
                                <div id="tas" class="tab-pane">
                                    <form action="" method="POST">
                                        <h4>Biografija</h4>
                                        <textarea name="aprasymasFr" id="editor7" rows="10" cols="80"><?php echo $biografija->aprasymasFr; ?></textarea>

                                        <h4>Pagrindinis aprašymas kairėje</h4>
                                        <textarea name="aprasymasFr2" id="editor8" rows="10" cols="80"><?php echo $biografija->aprasymasFr2; ?></textarea>
                                        
                                        

                                        <h4>Pagrindinis aprašymas dešinėje</h4>
                                        <textarea name="aprasymasFr3" id="editor9" rows="10" cols="80"><?php echo $biografija->aprasymasFr3; ?></textarea>
                                        <br>
                                        <input type="submit" name="submit3" value="Išsaugoti" class="btn btn-md btn-success">
                                    </form>
                                </div>
                        </div>
                    </div>
                </section>
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

<script type="text/javascript">
    $(document).ready(function() {
        tinymce.init({ 
            selector:'textarea',
            imageupload_url: '/my/uploader/path', // PHP (or other server side script)
            imageupload_rel: 'http://cdn.somewhere.com/media/tinymce-plugin/imageupload', // use if not installed in plugin folder.
//            plugins: 'imageupload', // and your other plugins
//            toolbar1: '/imageupload' // and your others
        
        });
        
        <?php if(!empty($session->message) && $session->message == 1) { ?>
            toastr.success("Informacija atnaujinta", "Sėkmingai");
        <?php } ?>
    });
</script>

</body>
</html>
