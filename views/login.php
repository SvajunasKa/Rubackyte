<?php ob_start(); ?>
<?php require_once("../classes/config/init.php"); ?>
<?php
    $email = "";
    $password = "";

    if($session->is_signed_in()) {
        redirect("index.php");
    }

    if(isset($_POST['submit'])) {
        $email= trim($_POST['username']);
        $password = md5($_POST['password']);

        $user_found = Users::verify_user($email, $password);

        if(!$user_found) {
            echo "not found";
            $the_message = "Email or password is incorrect!";
        } elseif($user_found->access_level == 1) {
            $session->login($user_found);
            redirect("/admin/index.php");
        } elseif($user_found->access_level == 2) {
            $session->login($user_found);
            redirect("/admin/index.php");
        } else {
            echo "not found";
            $the_message = "Please check your email and activate account";
        }
    } else {
        $email = "";
        $password = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Template">
    <meta name="keywords" content="admin dashboard, admin, flat, flat ui, ui kit, app, web app, responsive">
    <link rel="shortcut icon" href="img/ico/favicon.png">
    <title>BlackSpace TVS - Prisijungimas</title>

    <!-- Base Styles -->
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

      <div class="login-logo">
          <img src="admin/img/pic.jpg" alt=""/>
      </div>

      <h2 class="form-heading">Prisijungti</h2>
      <div class="container log-row">
          <form class="form-signin" method="POST">
              <div class="login-wrap">
                  <input type="text" class="form-control" name="username" placeholder="El.paštas" autocomplete="off">
                  <input type="password" class="form-control" name="password"  placeholder="Slaptažodis" autocomplete="off">
                  <button class="btn btn-lg btn-success btn-block" type="submit" name="submit">PRISIJUNGTI</button>
              </div>
          </form>
      </div>

      <!--jquery-1.10.2.min-->
      <script src="admin/js/jquery-1.11.1.min.js"></script>
      <!--Bootstrap Js-->
      <script src="admin/js/bootstrap.min.js"></script>
      <script src="admin/js/jrespond..min.js"></script>

  </body>
</html>
