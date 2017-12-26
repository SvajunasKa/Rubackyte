<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
if ($session->is_signed_in()) {

} else {
    redirect("/");
}
?>
<?php
if (isset($_POST['galerija_submit'])) {
    $galerija = new Galerija();
    $galerija->pavadinimas = $_POST['pavadinimas'];
    $galerija->aprasymas = $_POST['aprasymas'];
    $galerija->aprasymasEn = $_POST['aprasymasEn'];
    $galerija->aprasymasFr = $_POST['aprasymasFr'];
    $galerija->autorius = $_POST['autorius'];
    $galerija->nuotrauka = imageUpload($_FILES['fileToUpload'], 1);
    if ($galerija->save()) {
        $session->message(1);
        redirect('galerija.php');
    }
}

if (isset($_POST['galerija2_submit'])) {
    $galerija = Galerija::find($_GET['id']);
    $galerija->pavadinimas = $_POST['pavadinimas'];
    $galerija->aprasymas = $_POST['aprasymas'];
    $galerija->aprasymasEn = $_POST['aprasymasEn'];
    $galerija->aprasymasFr = $_POST['aprasymasFr'];
    $galerija->autorius = $_POST['autorius'];
    if ($galerija->save()) {
        $session->message(1);
        redirect('galerija.php');
    }
}

if (isset($_GET['istrinti'])) {
    $picture = Galerija::find($_GET['istrinti']);
    if ($picture->delete()) {
        $session->message(2);
        redirect('galerija.php');
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
                Puslapis - Galerija
            </h3>
            <span class="sub-title">Pagrindinis / Galerija</span>
        </div>
        <!-- page head end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <?php if (isset($_GET['id'])) { ?>
                <?php $finds = Galerija::find($_GET['id']); ?>
                <form role="form" method="post">
                    <div class="title">
                        <h1>Redaguoti aprašymą</h1>
                    </div>

                    <div class="form-group">
                        <label for="g-title">Pavadinimas LT</label>
                        <input type="text" class="form-control" name="pavadinimas" id="g-title" placeholder=" "
                               value="<?php echo $finds->pavadinimas; ?>">
                    </div>
                    <div class="form-group">
                        <label for="g-desk">Trumpas aprašymas LT (iki 6 žodžių)</label>
                        <div class="">
                            <textarea name="aprasymas" class="form-control" id="g-desk" cols="30"
                                      rows="3"><?php echo $finds->aprasymas; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="g-desk">Trumpas aprašymas EN (iki 6 žodžių)</label>
                        <div class="">
                            <textarea name="aprasymasEn" class="form-control" id="g-desk" cols="30"
                                      rows="3"><?php echo $finds->aprasymasEn; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="g-desk">Trumpas aprašymas FR (iki 6 žodžių)</label>
                        <div class="">
                            <textarea name="aprasymasFr" class="form-control" id="g-desk" cols="30"
                                      rows="3"><?php echo $finds->aprasymasFr; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="g-title">Nuotraukos autorius</label>
                        <input type="text" class="form-control" name="autorius" id="g-title" placeholder=" "
                               value="<?php echo $finds->autorius; ?>">
                    </div>


                    <button type="submit" name="galerija2_submit" class="btn btn-info">Išsaugoti</button>

                </form>
                <br><br>
            <?php } ?>
            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Galerija
                </h3>
                <!--<span class="sub-title">Welcome to Static Table</span>-->
                <div class="state-information">
                    <div class="gal-tools">
                        <a href="galerija.php">
                            <i class="fa fa-repeat"></i>
                            Atnaujinti
                        </a>
                    </div>
                </div>

            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper no-pad">

                <div class="profile-desk">
                    <aside class="p-aside">
                        <?php $nuotraukos = Galerija::all(); ?>
                        <ul class="gallery">
                            <?php foreach ($nuotraukos as $nuotrauka) { ?>
                                <li>
                                    <a href="#">
                                        <img src="/assets/images/<?php echo $nuotrauka->nuotrauka; ?>" alt=""/>
                                    </a>
                                    <div class="btn-class">
                                        <a href="?istrinti=<?php echo $nuotrauka->id; ?>" class="btn btn-sm btn-danger">Ištrinti</a>
                                        <a href="?id=<?php echo $nuotrauka->id; ?>" class="btn btn-sm btn-info">Redaguoti</a>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>

                    </aside>
                    <aside class="p-short-info">
                        <div class="widget">
                            <form role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group row gal-upload">
                                    <label class="col-lg-12 control-label">Pasirinkite nuotrauką</label>
                                    <div class="col-lg-12">
                                        <input class="file" type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                </div>
                                <br/>

                                <div class="title">
                                    <h1>Informacija</h1>
                                </div>

                                <div class="form-group">
                                    <label for="g-title">Pavadinimas LT</label>
                                    <input type="text" class="form-control" name="pavadinimas" id="g-title"
                                           placeholder=" ">
                                </div>
                                <div class="form-group">
                                    <label for="g-desk">Trumpas aprašymas (iki 6 žodžių)</label>
                                    <div class="">
                                        <textarea name="aprasymas" class="form-control" id="g-desk" cols="30"
                                                  rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="g-desk">Trumpas aprašymas EN (iki 6 žodžių)</label>
                                    <div class="">
                                        <textarea name="aprasymasEn" class="form-control" id="g-desk" cols="30"
                                                  rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="g-desk">Trumpas aprašymas FR (iki 6 žodžių)</label>
                                    <div class="">
                                        <textarea name="aprasymasFr" class="form-control" id="g-desk" cols="30"
                                                  rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="g-title">Nuotraukos autorius</label>
                                    <input type="text" class="form-control" name="autorius" id="g-title"
                                           placeholder=" ">
                                </div>


                                <button type="submit" name="galerija_submit" class="btn btn-info">Įkelti nuotrauką
                                </button>
                            </form>

                        </div>

                    </aside>
                </div>

            </div>
        </div>
        <footer>
            2016 &copy;
        </footer>
    </div>
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
    $(document).ready(function () {
        $(".calendar").flatpickr();

        <?php if(!empty($session->message) && $session->message == 1) { ?>
        toastr.success("Nuotrauka įkelta sėkmingai", "Galerija");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 2) { ?>
        toastr.error("Nuotrauka pašalinta", "Galerija");
        <?php } ?>

    });
</script>

</body>
</html>
