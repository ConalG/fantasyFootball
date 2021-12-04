<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  if (!isset($_SESSION['user'])) {
      header("Location: ./content/login.php");
      exit;
  }
  $res = mysqli_query($conn, "SELECT * FROM users WHERE userId=" . $_SESSION['user']);
  $userRow = mysqli_fetch_array($res);
  ?>
    <!DOCTYPE html>
    <section id="fh5co-home" data-section="home" style=background-image: url( "images/homeImgDub.jpg") !important; data-stellar-background-ratio="0.5">
        <div class="gradient"></div>
        <div class="container">
            <div class="text-wrap">
                <div class="text-inner">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="to-animate">Create your team to win the All-Ireland! </h1> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slant"></div>
    </section>
    <section id="fh5co-intro">
        <div class="container">
            <div class="row row-bottom-padded-lg">
                <div class="fh5co-block to-animate" style="background-image: url(images/img_7.jpg);">
                    <div class="overlay-darker"></div>
                    <div class="overlay"></div>
                    <div class="fh5co-text"> <i class="fh5co-intro-icon icon-soccer-ball-o"></i>
                        <h2>Start a Tournament</h2>
                        <p>Compete against other teams for the Sam Maguire Cup!</p>
                        <p><a href="#" class="btn btn-primary">Get Started</a></p>
                    </div>
                </div>
                <div class="fh5co-block to-animate" style="background-image: url(images/img_8.jpg);">
                    <div class="overlay-darker"></div>
                    <div class="overlay"></div>
                    <div class="fh5co-text"> <i class="fh5co-intro-icon icon-trophy"></i>
                        <h2>Scoreboard</h2>
                        <p> View the top teams this season, have a look at your competition!</p>
                        <p><a href="#" class="btn btn-primary">View</a></p>
                    </div>
                </div>
                <div class="fh5co-block to-animate" style="background-image: url(images/img_10.jpg);">
                    <div class="overlay-darker"></div>
                    <div class="overlay"></div>
                    <div class="fh5co-text"> <i class="fh5co-intro-icon icon-cogs"></i>
                        <h2>Manage your team!</h2>
                        <p>Hand pick your team to give you the best chance at winning!</p>
                        <p><a href="#" class="btn btn-primary">Manage</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>