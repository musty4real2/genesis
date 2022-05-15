<?php include('logmein.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Template">
    <meta name="keywords" content="admin dashboard, admin, flat, flat ui, ui kit, app, web app, responsive">
    title>Registration</title>

    <!-- Base Styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

      <div class="login-logo">
          <img src="img/11.jpg" alt=""/>
      </div>

      <h2 class="form-heading">registration</h2>
      <div class="container log-row">
          <form class="form-signin" action="login.php" method="POST">
              <p> Enter your account details below</p>
              <input type="text" class="form-control" name="username" placeholder="User Name" autofocus>
              <input type="password" class="form-control" name="password" placeholder="Password">
              <input type="password" class="form-control" name="password" placeholder="Re-type Password">
              <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Roles
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="admin"><a role="menuitem" href="login.php">Admin</a></li>
                    <li role="maintanance"><a role="menuitem" href="login.php">Maitenance</a></li>
                    <li role="welfare"><a role="menuitem" href="login.php">Welfare</a></li>
                    <li role="finance"><a role="menuitem" href="login.php">Finance</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="Prayer"><a role="menuitem" href="login.php">Prayer</a></li>
                  </ul>
                </div>
              <div class="radio-custom radio-success">
                  <input type="radio" value="yes" checked="checked" name="option-yes" id="male">
                  <label for="male">Male</label>
                  <input type="radio"  value="no" name="option-yes" id="female">
                  <label for="female">Female</label>
              </div>
              <label class="checkbox-custom check-success">
                  <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
              </label>


              <button class="btn btn-lg btn-success btn-block" type="submit">Submit</button>

              <div class="registration m-t-20 m-b-20">
                  Already Registered.
                  <a class="" href="login.php">
                      Login
                  </a>
              </div>
          </form>
      </div>

    <!--jquery-1.10.2.min-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--Bootstrap Js-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jrespond..min.js"></script>



  </body>
</html>
