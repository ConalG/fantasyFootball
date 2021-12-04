<?php
  ob_start();
  session_start();
        if (isset($_SESSION['user']) != "") {
      header("Location: member.php");
  }
        include_once 'dbconnect.php';
        include_once '../func.php';
  
  $error = false;
  
        if (isset($_POST['btn-signup'])) {
  
  
      $name = trim($_POST['name']);
      $name = strip_tags($name);
      $name = htmlspecialchars($name);
  
      $email = trim($_POST['email']);
      $email = strip_tags($email);
      $email = htmlspecialchars($email);
  
      $pass = trim($_POST['pass']);
      $pass = strip_tags($pass);
      $pass = htmlspecialchars($pass);
  
        if (empty($name)) {
          $error = true;
          $nameError = "Please enter your full name.";
      } else if (strlen($name) < 3) {
          $error = true;
          $nameError = "Name must have atleat 3 characters.";
      } else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
          $error = true;
          $nameError = "Name must contain alphabets and space.";
      }
  
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $error = true;
          $emailError = "Please enter valid email address.";
      } else {
  
          $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
          $result = mysqli_query($conn, $query);
          $count = mysqli_num_rows($result);
          if ($count != 0) {
              $error = true;
              $emailError = "Provided Email is already in use.";
          }
      }
  
      if (empty($pass)) {
          $error = true;
          $passError = "Please enter password.";
      } else if (strlen($pass) < 6) {
          $error = true;
          $passError = "Password must have atleast 6 characters.";
      }
  
  
      $password = hash('sha256', $pass);
  
  
      if (!$error) {
  
          $query = "INSERT INTO users(userName,userEmail,userPass,score) VALUES('$name','$email','$password', '0')";
          $res = mysqli_query($conn, $query);
  
          if ($res) {
              $errTyp = "success";
              $errMSG = "Successfully registered, you may login now";
              unset($name);
              unset($email);
              unset($pass);
              
          } else {
              $errTyp = "danger";
              $errMSG = "Something went wrong, try again later...";
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
                            <div class="row centered-form">
                                <div class="col-xs-6 col-sm-8 col-md-10 col-sm-offset-2 col-md-offset-1">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="text-center panel-title">
                Register Now - Fantasy GAA League 
                <div><small>Start Enjoying Membership Today!</small></div>
              </h3> </div>
                                        <div class="panel-body">
                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <hr /> </div>
                                                    <?php
                    if (isset($errMSG)) {
                        ?>
                                                        <div class="form-group">
                                                            <div class="alert alert-<?php echo ($errTyp == " success ") ? "success " : $errTyp; ?>"> <span class="glyphicon glyphicon-info-sign"></span>
                                                                <?php echo $errMSG; ?>
                                                            </div>
                                                        </div>
                                                        <?php
                    }
                    ?>
                                                            <div class="form-group">
                                                                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" /> </div> <span class="text-danger"><?php echo $nameError; ?></span> </div>
                                                            <div class="form-group">
                                                                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" /> </div> <span class="text-danger"><?php echo $emailError; ?></span> </div>
                                                            <div class="form-group">
                                                                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                                    <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" /> </div> <span class="text-danger"><?php echo $passError; ?></span> </div>
                                                            <div class="form-group">
                                                                <hr /> </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
                                                            </div>
                                                            <div class="form-group">
                                                                <hr />
                                                                <div class="row">
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                                        <div class="btn btn-primary"> <a href="login.php" style="color:yellow;">Login Here!</a> </div>
                                                                    </div>
                                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                                        <div class="btn btn-primary pull-right"> <a href="../index.php?page=home" style="color:yellow;">HomeAA League</a> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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