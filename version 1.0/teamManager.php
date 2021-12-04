
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html > <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fantasy GAA League</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" id="theme-switch" href="css/style.css">

	</head>
	<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					
		         <a class="navbar-brand" href="index.html">GAA Fantasy League</a> 
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li><a href="index.html" ><span>Home</span></a></li>
		            <li><a href="#" data-nav-section="work"><span>Scoreboard</span></a></li>
		            <li class="active"><a href="#" data-nav-section="about"><span>Your Account</span></a></li>
		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<section id="fh5co-home" data-section="home" style=background-image: url("images/homeImgDub.jpg") !important; data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate">Manage your team! </h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>
	<div class="container">
	<div class="container">
  <h3>GAA My Team</h3>
  <div class="panel panel-default">
  <ul class="nav nav-pills">
    <li class="active"><a href="#">My Team</a></li>
    <li><a href="#">Transfers</a></li>
    <li><a href="#">Leagues</a></li>
    <li><a href="#">Fixtures</a></li>
  </ul>
  <div class="container">
	<br/>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PLAYER NAME</h4>
        </div>
        <div class="modal-body">
        <button type="button" class="btn btn-primary btn-block">Substitute</button>
		<button type="button" class="btn btn-primary btn-block">Make Captain</button>
		<button type="button" class="btn btn-primary btn-block">View Player Info</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      
    </div>
  </div>
  
</div>
</div>
		<div class="row">
			<div class="col-sm-9">
				<div class="panel panel-default">
					<div class="panel-body" id="teamManagerdiv">
					<center>
						<br/>
						<div class="row">
						  <div class="col-sm-4" id="emptyCard"></div>
						  <a id="clickableCard" >
						  <div class="col-sm-4" id="playerCard" >
						  
							<img data-toggle="modal" data-target="#myModal" id="playericon"src="images/armagh.png">
							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  </a>
						  <div class="col-sm-4" id="emptyCard"></div>
		  
						</div>
						<br/>
						<div class="row">
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/galway.png">
							 							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  		<img id="playericon"src="images/monaghan.png">
															<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
								<img id="playericon"src="images/Mayo.png">
															<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						</div>
						<br/>
						<div class="row">
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/dublin.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/roscommon.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/tyrone.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						</div>
						<br/>
						<div class="row">
						  <div class="col-sm-2" id="emptyCardMid"></div>
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/kerry.png">
							 							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-2" id="emptyCardMid"></div>
						</div>	
						<br />
												<div class="row">
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						</div>
						<br/>
												<div class="row">
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						</div>
					</center>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="panel panel-default">
					<div class="panel-heading">Statistics</div>
					<p><b>Username:</b> Ciaran3001 </p>
					<p><b>Total wins:</b> 6 </p>
					<p><b>Total losses:</b> 2 </p>
					<p><b>Players online:</b> 3765 </p>
				</div>
				<div class="panel panel-default">
				
					<div class="panel-heading">Get Playing!</div>
					<br/>
					<div><button type="button" class="btn btn-primary btn-lg">Start a League</button></div>
					</br>
					<div><button type="button" class="btn btn-primary btn-lg">Join a League</button></div>
					<br/>
					

				</div>
			</div>
			</div>
		</div>
	</div>

	
	<footer id="footer" role="contentinfo">
		
		<div class="container">
			<div class="">
				<div class="col-md-12 text-center">
					<p>&copy; Powered Elate Free Bootstrap. All Rights Reserved.</p>
					<p>Year 3 project x NCI group project.</p>				
				</div>
			</div>
		</div>
	</footer>
	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php echo 'hello';
?>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>



	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

