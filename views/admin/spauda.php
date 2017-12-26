<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
if ($session->is_signed_in()) {

} else {
    redirect("/");
}
?>
<?php
if (isset($_GET['istrinti_straipsni'])) {
    $straipsnis = Press::find($_GET['istrinti_straipsni']);

    if ($straipsnis->delete()) {
        $session->message(6);
        redirect('spauda.php');
    }
}

if (isset($_POST['straipsnis'])) {
    $straipsnis = new Press();
    $straipsnis->straipsnisLt = $_POST['straipsnisLt'];
    $straipsnis->nuoroda = $_POST['nuoroda'];
    if (!empty($_FILES['fileToUpload']["tmp_name"])) {
        $straipsnis->nuotrauka = imageUpload($_FILES['fileToUpload'], 1);
    }
    if ($straipsnis->save()) {
        $session->message(3);
        redirect('spauda.php');
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
    <link href="css/slidebars.css" rel="stylesheet">
    <link href="js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="js/toastr-master/toastr.css" rel="stylesheet" type="text/css"/>
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
    <div class="sidebar-left">
        <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
            <a href="index.html">
                <img src="img/logo-icon.png" alt="">
                <span class="brand-name">blackSPACE</span>
            </a>
        </div>
        <?php require_once('admin-menu.php'); ?>
    </div>
    <div class="body-content" style="min-height: 1200px;">
        <div class="header-section"><!--logo and logo icon start-->
            <div class="logo dark-logo-bg hidden-xs hidden-sm">
                <a href="index.php">
                    <img src="img/logo-icon.png" alt="">
                    <span class="brand-name">black<strong>SPACE</strong> TVS</span>
                </a>
            </div>
            <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                <a href="index.html">
                    <img src="img/logo-icon.png" alt="">
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
                Puslapis - Zinasklaida
            </h3>
            <span class="sub-title">Pagrindinis / Ziniasklaida</span>
        </div>
        <div class="panel-body">
            <div class="tab-content">


                <div id="profile" class="tab-pane">
                    <section class="panel">
                        <?php $konc = Press::all(); ?>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Straipsnis</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($konc as $kon) { ?>
                                <tr>
                                    <td><?php echo $kon->id; ?></td>
                                    <td><?php echo $kon->straipsnisLt; ?><?php echo $kon->nuoroda; ?> </td>
                                    <td><?php echo $kon->nuotrauka; ?> </td>
                                    <td><a href="?istrinti_straipsni=<?php echo $kon->id; ?>"
                                           class="btn btn-sm btn-danger">Ištrinti</a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        <div class="panel-body">
                            <form class="form-horizontal tasi-form" method="post">
                                <div class="form-group">
                                    <label class="col-sm-12  control-label">Straipsnis</label>
                                    <div class="col-sm-12 straipsnis">
                                        <textarea name="straipsnisLt" class="form-control"></textarea>
                                        <label>nuoroda</label>
                                        <input type="text" name="nuoroda">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Nuotrauka</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                </div>
                                <button type="submit" name="straipsnis"  class="btn btn-success btn-md">Išsaugoti</button>
                            </form>
                        </div>
                    </section>
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
    $(document).ready(function () {
        tinymce.init({
            selector: 'textarea',
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

