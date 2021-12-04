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
                            <h1 class="to-animate">Admin Panel </h1> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slant"></div>
    </section>
    <container>
        <div class="alert alert-danger">
            <center><strong>Caution</strong> Double check figures before submitting, only site admin should have access to this panel.
                <center/> </div>
        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="exampleSelect1">Select County</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>Dublin</option>
                                <option>Wexford</option>
                                <option>Clare</option>
                                <option>Leitrim</option>
                                <option>Tyrone</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </container>