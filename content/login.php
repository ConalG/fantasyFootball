<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
    include_once 'dbconnect.php';
    include_once '../func.php';
  
  if (isset($_SESSION['user']) != "") {
      header("Location: ./content/login");
      exit;
  }
  
  $error = false;
  
  if (isset($_POST['btn-login'])) {
  
      $email = trim($_POST['email']);
      $email = strip_tags($email);
      $email = htmlspecialchars($email);
  
      $pass = trim($_POST['pass']);
      $pass = strip_tags($pass);
      $pass = htmlspecialchars($pass);
  
      if (empty($email)) {
          $error = true;
          $emailError = "Please enter your email address.";
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $error = true;
          $emailError = "Please enter valid email address.";
      }
  
      if (empty($pass)) {
          $error = true;
          $passError = "Please enter your password.";
      }
  
     
      if (!$error) {
  
          $password = hash('sha256', $pass); 
  
          $res = mysqli_query($conn, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
          $row = mysqli_fetch_array($res);
          $count = mysqli_num_rows($res); 
  
          if ($count == 1 && $row['userPass'] == $password) {
              $_SESSION['user'] = $row['userId'];
              header("Location: ../index.php?page=teamManager");
          } else {
              $errMSG = "Incorrect Credentials, Try again...";
          }
      }
  }
  ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>
            <?php echo titulos(); ?>
        </title>
        <link rel="shortcut icon" href="../favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/icomoon.css">
        <link rel="stylesheet" href="../css/simple-line-icons.css">
        <link rel="stylesheet" href="../css/magnific-popup.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" id="theme-switch" href="../css/style.css"> </head>

    <body>
        <section id="fh5co-home" data-section="home" style=background-image: url( "images/homeImgDub.jpg") !important; data-stellar-background-ratio="0.5">
            <div class="gradient"></div>
            <div class="container">
                <div class="text-wrap">
                    <div class="text-inner">
                        <div class="container">
                            <div class="login-form">
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="login-header">
                                                <h2><b>Login</b></h2> </div>
                                            <div class="form-group">
                                                <hr /> </div>
                                            <?php
              if (isset($errMSG)) {
                  ?>
                                                <div class="form-group">
                                                    <div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>
                                                        <?php echo $errMSG; ?>
                                                    </div>
                                                </div>
                                                <?php
              }
              ?>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                                <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" /> </div> <span class="text-danger"><?php echo $emailError; ?></span> </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                                <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" /> </div> <span class="text-danger"><?php echo $passError; ?></span> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <hr /> </div>
                                                    <div class="col-md-12">
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-primary" name="btn-login">Login</button>
                                                        </div>
                                                        <hr/>
                                                        <hr/>
                                                        <div class="col-md-4"> <a href="register.php" class="btn btn-primary" style="color:white;">Sign Up Here!</a></div>
                                                        <div class="col-md-4">
                                                            <input class="btn btn-primary" type="reset" /> </div>
                                                        <div class="col-md-4"> <a href="../index.php" class="btn btn-primary" style="color:white;">Home Fantasy GAA</a></div>
                                                        <hr>
                                                        <hr> </div>
                                        </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer" role="contentinfo"> <a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
            <div class="container">
                <div class="">
                    <div class="col-md-12 text-center">
                        <p>&copy; Powered Elate Free Bootstrap. All Rights Reserved.</p>
                        <p>Fantasy GAA 2017 x NCI group project.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="../js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="../js/jquery.waypoints.min.js"></script>
        <!-- Stellar Parallax -->
        <script src="../js/jquery.stellar.min.js"></script>
        <!-- Counter -->
        <script src="../js/jquery.countTo.js"></script>
        <!-- Magnific Popup -->
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/magnific-popup-options.js"></script>
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
        <script src="../js/google_map.js"></script>
        <script src="../js/jqBootstrapValidation.js"></script>
        <script src="../js/validate_email.js"></script>
        <!-- Main JS (Do not remove) -->
        <script src="../js/main.js"></script>
    </body>

    </html>
    <?php ob_end_flush(); ?>