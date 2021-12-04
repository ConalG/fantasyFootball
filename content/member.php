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


<title>Welcome -<?php echo $userRow['userName']; ?></title>

<!DOCTYPE html>
	<section id="fh5co-home" data-section="home" style=background-image: url("images/homeImgDub.jpg") !important; data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">

					<div class="row">
						<div class="col-md-8 col-md-offset-2">
<h4 class="to-animate"><ul class="nav nav-pills navbar-right">
  <li class="active"><a href="#">Hi <?php echo $userRow['userName']; ?></a></li>
  <li class="active"><a href="#">Mensages <span class="badge">112</span></a></li>
  <li class="active"><a href="index.php?page=quiz">Your Score is <span class="badge"><?php echo $userRow['score']; ?></span></a></li>
  <li><a href="./content/logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
</ul> </h4>           
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="panel panel-default">
					<div class="panel-body" id="teamManagerdiv">
					<center>
						<br/>
						<div class="row">
						  <div class="col-sm-4" id="emptyCard"></div>
						  <a id="clickableCard" href="index.html">
						  <div class="col-sm-4" id="playerCard" >
						  
							<img id="playericon"src="images/placeholder.jpg">
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
						<br/>
						<div class="row">
						  <div class="col-sm-2" id="emptyCardMid"></div>
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
					<p><b>Username:</b> <?php echo $userRow['userName']; ?> </p>
					<p><b>Total wins:</b> 6 </p>
					<p><b>Total losses:</b> 2 </p>
					<p><b>Players online:</b> 3765 </p>
				</div>
				<div class="panel panel-default">
				
					<div class="panel-heading">Get Playing!</div>
					<br/>
					<button type="button" class="btn btn-primary btn-lg">Start a League</button>
					<hr/>
					<button type="button" class="btn btn-primary btn-lg">Join a League</button>
					

				</div>
			</div>
		</div>
	</div>

	



    
<?php ob_end_flush(); ?>