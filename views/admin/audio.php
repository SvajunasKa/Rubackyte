<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
if($session->is_signed_in()) {

} else {
    redirect("/");
}
?>
<?php
if(isset($_GET['istrinti_koncerta'])) {
    $koncertas = Audio::find($_GET['istrinti_koncerta']);

    if($koncertas->delete()) {
        $session->message(6);
        redirect('audio.php');
    }
}

if(isset($_POST['koncertai'])) {
    $koncertas = new Audio();
    $koncertas->koncertas = $_POST['koncertas'];
    $koncertas->pavadinimas = $_POST['pavadinimas'];
    $koncertas->nuotrauka = imageUpload($_FILES['fileToUpload'], 1);

    if($koncertas->save()) {
        $session->message(3);
        redirect('audio.php');
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

    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/css/froala_style.min.css' rel='stylesheet' type='text/css' />
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
            </a></div>
        <?php require_once('admin-menu.php'); ?>
    </div>
    <div class="body-content" style="min-height: 1200px;">
        <div class="header-section">
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
            <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
            <div class="notification-wrap">
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
            </div>
        </div>
        <div class="page-head">
            <h3>
                Puslapis - Audio
            </h3>
            <span class="sub-title">Pagrindinis / Audio</span>
        </div>
        <div class="wrapper">
            <section class="panel">
                <header class="panel-heading tab-dark ">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#profile">Koncertiniai Įrašai</a>
                        </li>
                    </ul>
                </header>
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="profile" class="tab-pane">
                            <section class="panel">
                                <header class="panel-heading">
                                    Koncertų youtube linkai
                                </header>
                                <?php $konc = Audio::all(); ?>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Koncertas</th>
                                        <th>Pavadinimas</th>
                                    </tr>
                                    <?php foreach($konc as $kon) { ?>
                                        <tr>
                                            <td><?php echo $kon->id; ?></td>
                                            <td><?php echo $kon->koncertas; ?></td>
                                            <td><?php echo $kon->pavadinimas; ?></td>
                                            <td>
                                                <img style="width: 100px; height: 50px"
                                                     src="/assets/images/<?php echo $kon->nuotrauka; ?>" alt=""/>

                                            </td>
                                            <td><a href="?istrinti_koncerta=<?php echo $kon->id; ?>" class="btn btn-sm btn-danger">Ištrinti</a></td>
                                        </tr>
                                    <?php } ?>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">

                                            <div class="col-sm-10">
                                                <label class="col-sm-2 col-sm-2 control-label">Koncertas (nuoroda)</label>
                                                <input type="text" name="koncertas" class="form-control">
                                            </div>

                                            <div class="col-sm-10">
                                                <label class="col-sm-2 col-sm-2 control-label"> Pavadinimas</label>
                                                <input type="text" name="pavadinimas" class="form-control">
                                            </div>
                                            <div class="col-sm-10">
                                                <label class="col-lg-2 control-label">Pasirinkite nuotrauką</label>
                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                            </div>
                                        </div>
                                        <input type="submit" name="koncertai" value="Išsaugoti" class="btn btn-success btn-md">
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
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
<script src="js/slidebars.min.js"></script>
<script src="js/switchery/switchery.min.js"></script>
<script src="js/switchery/switchery-init.js"></script>
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>
<script src="js/toastr-master/toastr.js"></script>
<script src="js/toastr-init.js"></script>
<!-- Include JS file. -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/js/froala_editor.min.js'></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
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
