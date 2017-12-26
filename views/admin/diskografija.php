<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
if ($session->is_signed_in()) {

} else {
    redirect("/");
}
?>
<?php
if (isset($_POST['submit'])) {
    $cd = new DiskografijaCd();
    $cd->pavadinimasLt = $_POST['pavadinimasLt'];
    $cd->pavadinimasEn = $_POST['pavadinimasEn'];
    $cd->pavadinimasFr = $_POST['pavadinimasFr'];
    $cd->nuotrauka = imageUpload($_FILES['fileToUpload'], 1);
    $cd->aprasymasLt = $_POST['aprasymasLt'];
    $cd->aprasymasEn = $_POST['aprasymasEn'];
    $cd->aprasymasFr = $_POST['aprasymasFr'];
    if ($cd->save()) {
        $session->message(1);
        redirect('diskografija.php');
    }
}
if (isset($_POST['submit1'])) {
    $cd = new DiskografijaCd();
    $cd->nuotrauka1 = imageUpload($_FILES['fileToUpload'], 1);
    if ($cd->save()) {
        $session->message(1);
        redirect('diskografija.php');
    }
}

if (isset($_POST['submit2'])) {
    $cd2 = new DiskografijaDvd();
    $cd2->pavadinimasLt = $_POST['pavadinimas_dvdLt'];
    $cd2->pavadinimasEn = $_POST['pavadinimas_dvdEn'];
    $cd2->pavadinimasFr = $_POST['pavadinimas_dvdFr'];
    $cd2->nuotrauka = imageUpload($_FILES['fileToUpload'], 1);
    $cd2->nuotrauka1 = imageUpload($_FILES['fileToUpload1'], 1);
    $cd2->aprasymasLt = $_POST['aprasymas_dvdLt'];
    $cd2->aprasymasEn = $_POST['aprasymas_dvdEn'];
    $cd2->aprasymasFr = $_POST['aprasymas_dvdFr'];
    if ($cd2->save()) {
        $session->message(2);
        redirect('diskografija.php');
    }
}

if (isset($_GET['istrinti_koncerta'])) {
    $koncertas = DiskografijaKoncertai::find($_GET['istrinti_koncerta']);

    if ($koncertas->delete()) {
        $session->message(6);
        redirect('diskografija.php');
    }
}

if (isset($_POST['koncertai'])) {
    $koncertas = new DiskografijaKoncertai();
    $koncertas->koncertas = $_POST['koncertas'];
    $koncertas->pavadinimas = $_POST['pavadinimas'];

    if ($koncertas->save()) {
        $session->message(3);
        redirect('diskografija.php');
    }
}

if (isset($_GET['istrinti'])) {
    $istrinti = DiskografijaCd::find($_GET['istrinti']);
    if ($istrinti->delete()) {
        $session->message(4);
        redirect('diskografija.php');
    }
}

if (isset($_GET['istrinti_dvd'])) {
    $istrinti = DiskografijaDvd::find($_GET['istrinti_dvd']);
    if ($istrinti->delete()) {
        $session->message(5);
        redirect('diskografija.php');
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
    <link href="js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen"/>

    <!--common style-->
    <link href="js/toastr-master/toastr.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!--
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea', entity_encoding : "raw" });</script>
    -->

    <!-- Include Editor style. -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/css/froala_editor.min.css' rel='stylesheet'
          type='text/css'/>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/css/froala_style.min.css' rel='stylesheet'
          type='text/css'/>


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
                Puslapis - Diskografija
            </h3>
            <span class="sub-title">Pagrindinis / Diskografija</span>
        </div>
        <!-- page head end-->

        <!--body wrapper start-->
        <div class="wrapper">

            <section class="panel">
                <header class="panel-heading tab-dark ">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home">CD / Vinilas</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#about">DVD</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#profile">Koncertiniai Įrašai</a>
                        </li>
                    </ul>
                </header>
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="home" class="tab-pane active">
                            <section class="panel">
                                <header class="panel-heading head-border">
                                    Visi CD / Vinilai
                                </header>
                                <?php $csvinilai = DiskografijaCd::all(); ?>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pavadinimas</th>
                                        <th>Veiksmas</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($csvinilai as $value) { ?>
                                        <tr>
                                            <td><?php echo $value->id; ?></td>
                                            <td><?php echo $value->pavadinimasLt; ?></td>
                                            <td><a href="diskografija_redaguoti.php?redaguoti=<?php echo $value->id; ?>"
                                                   class="btn btn-sm btn-success">Redaguoti</a> <a
                                                        href="?istrinti=<?php echo $value->id; ?>"
                                                        class="btn btn-sm btn-danger">Ištrinti</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </section>
                            <section class="panel">
                                <header class="panel-heading">
                                    Įdėti naują CD / Vinilą
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Pavadinimas LT</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pavadinimasLt" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Pavadinimas EN</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pavadinimasEn" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Pavadinimas FR</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pavadinimasFr" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Nuotrauka</label>
                                            <div class="col-lg-10">
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Aprašymas LT</label>
                                            <div class="col-lg-10">
                                                <textarea id="aprasymasLT" name="aprasymasLt" class="form-control" id=""
                                                          cols="30" rows="10"></textarea>
                                            </div>
                                            <label class="col-lg-2 col-sm-2 control-label">Aprašymas EN</label>
                                            <div class="col-lg-10">
                                                <textarea id="aprasymasEN" name="aprasymasEn" class="form-control" id=""
                                                          cols="30" rows="10"></textarea>
                                            </div>
                                            <label class="col-lg-2 col-sm-2 control-label">Aprašymas FR</label>
                                            <div class="col-lg-10">
                                                <textarea id="aprasymasFR" name="aprasymasFr" class="form-control" id=""
                                                          cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" value="Išsaugoti"
                                               class="btn btn-md btn-success">
                                    </form>
                                </div>
                                <div class="panel-body">
                                    <h3>Antros nuotraukos įkėlimui</h3>
                                    <form class="form-horizontal tasi-form" method="post"
                                          enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Nuotrauka 2</label>
                                            <div class="col-lg-10">
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                            </div>
                                        </div>
                                        <input type="submit" name="submit1" value="Išsaugoti"
                                               class="btn btn-md btn-success">
                                    </form>
                                </div>
                            </section>
                        </div>
                        <div id="about" class="tab-pane">
                            <section class="panel">
                                <header class="panel-heading head-border">
                                    DVD
                                </header>
                                <?php $dvdE = DiskografijaDvd::all(); ?>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pavadinimas</th>
                                        <th>Veiksmas</th>
                                    </tr>
                                    <?php foreach ($dvdE as $value_dvd) { ?>
                                        <tr>
                                            <td><?php echo $value_dvd->id; ?></td>
                                            <td><?php echo $value_dvd->pavadinimasLt; ?></td>
                                            <td>
                                                <a href="diskografija_redaguoti_dvd.php?redaguoti=<?php echo $value_dvd->id; ?>"
                                                   class="btn btn-sm btn-success">Redaguoti</a> <a
                                                        href="?istrinti_dvd=<?php echo $value_dvd->id; ?>"
                                                        class="btn btn-sm btn-danger">Ištrinti</a></td>
                                        </tr>
                                    <?php } ?>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </section>
                            <section class="panel">
                                <header class="panel-heading">
                                    Įdėti naują DVD
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Pavadinimas LT</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pavadinimas_dvdLt" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Pavadinimas EN</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pavadinimas_dvdEn" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Pavadinimas FR</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pavadinimas_dvdFr" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Nuotrauka</label>
                                            <div class="col-lg-10">
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Aprašymas LT</label>
                                            <div class="col-lg-10">
                                                <textarea id="aprasymasLT" name="aprasymas_dvdLt" class="form-control"
                                                          id="" cols="30" rows="10"></textarea>
                                            </div>
                                            <label class="col-lg-2 col-sm-2 control-label">Aprašymas EN</label>
                                            <div class="col-lg-10">
                                                <textarea id="aprasymasEN" name="aprasymas_dvdEn" class="form-control"
                                                          id="" cols="30" rows="10"></textarea>
                                            </div>
                                            <label class="col-lg-2 col-sm-2 control-label">Aprašymas FR</label>
                                            <div class="col-lg-10">
                                                <textarea id="aprasymasFR" name="aprasymas_dvdFr" class="form-control"
                                                          id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" name="submit2" value="Išsaugoti"
                                               class="btn btn-md btn-success">
                                    </form>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </section>

            <!--tab nav start-->

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
<!-- Include JS file. -->
<script type='text/javascript'
        src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/js/froala_editor.min.js'></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
//        tinymce.init({ 
//            selector:'textarea',
//            imageupload_url: '/my/uploader/path', // PHP (or other server side script)
//            // imageupload_rel: 'http://cdn.somewhere.com/media/tinymce-plugin/imageupload', // use if not installed in plugin folder.
//            plugins: 'imageupload', // and your other plugins
//            toolbar1: 'imageupload' // and your others
//        
//        });

        //$('textarea').froalaEditor();

        <?php if(!empty($session->message) && $session->message == 1) { ?>
        toastr.success("Įkeltas sėkmingai.", "CD / VINILAS");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 2) { ?>
        toastr.success("Įkeltas sėkmingai.", "DVD");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 3) { ?>
        toastr.success("Informacija atnaujinta sėkmingai", "Koncertai");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 4) { ?>
        toastr.success("Sėkmingai pašalintas", "CD / VINILAS");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 5) { ?>
        toastr.success("Sėkmingai pašalintas", "DVD");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 6) { ?>
        toastr.success("Sėkmingai pašalintas", "Koncertas");
        <?php } ?>
    });
</script>

</body>
</html>
