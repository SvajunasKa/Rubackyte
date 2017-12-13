<?php ob_start(); ?>
<?php require_once("../../classes/config/init.php"); ?>
<?php
    if($session->is_signed_in()) {
        
    } else {
        redirect("/");
    }
?>
<?php
    if(isset($_POST['grafikas_submit'])) {
        $graf = new KoncertuGrafikas();
        $graf->data = $_POST['data'];
        $graf->pavadinimasLt = $_POST['pavadinimasLt'];
        $graf->pavadinimasEn = $_POST['pavadinimasEn'];
        $graf->pavadinimasFr = $_POST['pavadinimasFr'];
        $graf->metai = $_POST['metai'];
        if($graf->save()) {
            $session->message(1);
            redirect('koncertu_grafikas.php');
        }
    }

    if(isset($_GET['istrinti_grafikas'])) {
        $graft = KoncertuGrafikas::find($_GET['istrinti_grafikas']);
        if($graft->delete()) {
            $session->message(2);
            redirect('koncertu_grafikas.php');
        }
    }


    if(isset($_POST['metaiSubmit'])) {
        $newMetai = new GrafikasMetai();
        $newMetai->metai = $_POST['metai'];
        if($newMetai->save()) {
            $session->message(1);
            redirect('koncertu_grafikas.php');
        }
    }

    if(isset($_GET['istrinti_metus'])) {
        $Metai = GrafikasMetai::find($_GET['istrinti_metus']);

        if($Metai->delete()) {
            $session->message(2);
            redirect('koncertu_grafikas.php');
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
                    Puslapis - Grafikas
                </h3>
                <span class="sub-title">Pagrindinis / Grafikas</span>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <!--body wrapper start-->
            <div class="wrapper">

                <!--tab nav start-->
                <section class="panel">
                    <header class="panel-heading tab-dark ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#home2">Koncertų grafikas</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#home">Metai</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="home2" class="tab-pane active">
                               <section class="panel">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <header class="panel-heading head-border">
                                            Įdėti naują koncertų grafiką
                                        </header>
                                        <form class="form-horizontal tasi-form" method="post">
                                            <div class="form-group">
                                                <label class="col-sm-2 col-sm-2 control-label">Data</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="data">
                                                </div>
                                            </div>
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
                                                <label class="col-sm-2 col-sm-2 control-label">Metai</label>
                                                <div class="col-sm-10">
                                                    <select name="metai" id="" class="form-control">
                                                    <option value=""></option>
                                                    <?php $metai = GrafikasMetai::all(); ?>
                                                       
                                                    <?php foreach($metai as $met) { ?>
                                                        <option value="<?php echo $met->metai; ?>"><?php echo $met->metai; ?></option>
                                                    <?php } ?>
                                                    
                                                    </select>
                                                </div>
                                            </div>

                                            <button type="submit" name="grafikas_submit" class="btn btn-info">Įdėti</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 40px;">
                                    <div class="col-sm-12">
                                        <header class="panel-heading head-border">
                                            Koncertų grafikas
                                        </header>
                                        <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Data</th>
                                            <th>Aprašymas</th>
                                            <th>Metai</th>
                                            <th>Veiksmas</th>
                                        </tr>
                                        <?php $koncertai = KoncertuGrafikas::find_by_query('SELECT * FROM koncertu_grafikas ORDER BY data DESC'); ?>
                                        <?php foreach($koncertai as $vals) { ?>
                                        <tr>
                                            <td><?php echo $vals->id; ?></td>
                                            <td><?php echo $vals->data; ?></td>
                                            <td><?php echo $vals->pavadinimasLt; ?></td>
                                            <td><?php echo $vals->metai; ?></td>
                                            <td><a href="grafikas_redaguoti.php?redaguoti=<?php echo $vals->id; ?>" class="btn btn-sm btn-success">Redaguoti</a> <a href="?istrinti_grafikas=<?php echo $vals->id; ?>" class="btn btn-sm btn-danger">Ištrinti</a></td>
                                        </tr>
                                        <?php } ?>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </section>
                            </div>
                            <div id="home" class="tab-pane">
                               <section class="panel">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <?php $metai = GrafikasMetai::all(); ?>
                                        <header class="panel-heading head-border">
                                            Metai
                                        </header>
                                        <ul style="margin-top: 30px; font-size: 18px; list-style: none;">
                                            <?php foreach($metai as $metas) { ?>
                                            <li style="padding-right: 20px; display: inline-block;"><?php echo $metas->metai; ?> <a href="?istrinti_metus=<?php echo $metas->id; ?>" class="btn btn-xs btn-danger">X</a></li>
                                            <?php } ?>
                                        </ul>
                                        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal">Pridėti naujus metus</a> 
                                    </div>
                                </div>
                                </section>
                                <div id="myModal" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Pridėti metus</h4>
                                      </div>
                                      <form action="" method="post">
                                          <div class="modal-body">
                                           <label for="metai">Metai:</label>
                                           <input type="text" id="metai" name="metai" class="form-control">
                                           <br>
                                           <input type="submit" class="btn btn-md btn-success" name="metaiSubmit" value="Įrašyti">
                                          </div>
                                      </form>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Atšaukti</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>
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
        $(".calendar2").flatpickr();  
        
        <?php if(!empty($session->message) && $session->message == 1) { ?>
            toastr.success("Sėkmingai įkeltas.", "Grafikas");
        <?php } ?>
        <?php if(!empty($session->message) && $session->message == 2) { ?>
            toastr.success("Sėkmingai pašalintas", "Grafikas");
        <?php } ?>

    });
</script>

</body>
</html>
