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
	<?php 
	//CREATING TEAM VARIABLES
	
	//EDITING TEAM VARIABLES
	$teamCaptain;
	
	
	//EXISTING TEAM VARIABLES
	//Player ID's
	$players = array($GK, $FB1, $FB2, $FB3, $HB1, $HB2, $HB3, $MF1,$MF2, $HF1, $HF2, $HF3, $FW1, $FW2, $FW3, $subGK, $sub1,$sub2,$sub3);
	$playerCounties = array($GKc, $FB1c, $FB2c, $FB3c, $HB1c, $HB2c, $HB3c, $MF1c,$MF2c, $HF1c, $HF2c, $HF3c, $FW1c, $FW2c, $FW3c, $subGKc, $sub1c,$sub2c,$sub3c);
	$playerNames = array($GKn, $FB1n, $FB2n, $FB3n, $HB1n, $HB2n, $HB3n, $MF1n,$MF2n, $HF1n, $HF2n, $HF3n, $FW1n, $FW2n, $FW3n, $subGKn, $sub1n,$sub2n,$sub3n);
	$playerPositions = array();
	
	//USER VARIABLES
	$userIndex = 2; // = User Index
	$dublin = "dublin";
	$userCredits;
	

	//Select target row, fill into variables. [team table] 
	$sql = "SELECT * FROM teams WHERE account = " . $userIndex;
	$result = $conn->query($sql);
 
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			//Fill into variables.
				$GK = $row["GK"];
				$FB1= $row["FB1"];
				$FB2= $row["FB2"];
				$FB3= $row["FB3"];
				
				$HB1= $row["HB1"];
				$HB2= $row["HB2"];
				$HB3= $row["HB3"];
				
				$MF1= $row["MID1"];
				$MF2= $row["MID2"];
				
				$HF1= $row["HF1"];
				$HF2= $row["HF2"];
				$HF3= $row["HF3"];
				
				$FW1= $row["FR1"];
				$FW2= $row["FR2"];
				$FW3= $row["FR3"];
				
				$subGK = $row["subGoal"];
				$sub1 = $row["sub1"];
				$sub2 = $row["sub2"];
				$sub3 = $row["sub3"];
			
		}
	}
	else {
		echo "0 results";
	}
	
	
	
	
	
	

	

	
	//Select target row, fill into variables. [team table] 
	

		$sql = "SELECT * FROM players";
		$result = $conn->query($sql);
		$i = 0;
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$playerCounties[$i] = $row['County'];
				$playerNames[$i] = $row['Name'];
				$i++;
			}
		}
		else {
			echo "0 results";
		}
	$conn->close();
	
	function checkForEmptyCards(){
		
	}
	
	function saveTeam(){
		//insert into MySQL table in user ID row.
	}
	
	function showSubs($position){
		// fill list of all subs with the same position into modal. (on click, swap positions with card)
	}
	function makeCaptain($player){
		// Set captain ID = player ID. (Make captain appear on card)
	}
	?>

    <section id="fh5co-home" data-section="home" style=background-image: url( "images/homeImgDub.jpg") !important; data-stellar-background-ratio="0.5">
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
  <h3><?php echo $userRow['userName']; ?>'s Team</h3>
  <div class="panel panel-default">
  <ul class="nav nav-pills">
    <li class="active"><a href="#">My Team</a></li>
    <li><a href="#">Transfers</a></li>
    <li><a href="#">Leagues</a></li>
    <li><a href="#">Fixtures</a></li>
  <li><a href="./content/logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
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
          <h4 class="modal-title"><?php echo $playerNames[0] ?></h4>
        </div>
        <div class="modal-body">
        <button type="button" class="btn btn-primary btn-block 0" onClick="showSubs('GK')">Substitute</button>
		<button type="button" class="btn btn-primary btn-block" onClick="makeCaptain(0)">Make Captain</button>
		<button type="button" class="btn btn-primary btn-block">View Player Info</button>
		<br>
		<div id="modalExplorer"></div>
				
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
						  
							<img data-toggle="modal" class="clickable" data-target="#myModal" id="playericon"src="images/<?php echo $playerCounties[0] ?>.png">
							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[0] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  </a>
						  <div class="col-sm-4" id="emptyCard"></div>
		  
						</div>
						<br/>
						<div class="row">
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/<?php echo $playerCounties[1]?>.png">
							 							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[1] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  		<img id="playericon"src="images/<?php echo $playerCounties[2]?>.png">
															<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[2] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
								<img id="playericon"src="images/<?php echo $playerCounties[3]?>.png">
															<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[3] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						</div>
						<br/>
						<div class="row">
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/<?php echo $playerCounties[4]; ?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[4] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/<?php echo $playerCounties[5]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[5] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/<?php echo $playerCounties[6]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[6] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						</div>
						<br/>
						<div class="row">
						  <div class="col-sm-2" id="emptyCardMid"></div>
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/<?php echo $playerCounties[7]?>.png">
							 							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[7] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/<?php echo $playerCounties[8]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[8] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-2" id="emptyCardMid"></div>
						</div>	
						<br />
												<div class="row">
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/<?php echo $playerCounties[9]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[9] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/<?php echo $playerCounties[10]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[10] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/<?php echo $playerCounties[11]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[11] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						</div>
						<br/>
												<div class="row">
						  <div class="col-sm-4" id="playerCard">
							  <img id="playericon"src="images/<?php echo $playerCounties[12]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[12] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/<?php echo $playerCounties[13]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[13] ?></p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-4" id="playerCard">
						  	<img id="playericon"src="images/<?php echo $playerCounties[14]?>.png">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p><?php echo $playerNames[14] ?></p></div>
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
                    <p><b>Players online:</b> <?php echo $userRow['score']; ?> </p>
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
			<div class ="col-sm-9">
			<div class="panel panel-default">
			<div class="panel panel-heading">Substitutes</div>
			<div class="panel panel-body">
						<div class="row">
						    <div class="col-sm-3" id="playerCard">
							  <img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-3" id="playerCard">
							  <img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-3" id="playerCard">
						  	<img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						  <div class="col-sm-3" id="playerCard">
						  	<img id="playericon"src="images/placeholder.jpg">
							  							<div class="row">
								<div class="col-sm-12"id="pCardName"><p>Stephen Cluxton</p></div>
								<div class="col-sm-12"id="pCardTeam"><p>Dublin</p></div>
							</div>
						  </div>
						</div>
			</div>
			
			</div>
		</div>
	</div>
	<script>
	var playerNames = <?php echo json_encode($playerNames); ?>;
	var playerCounties = <?php echo json_encode($playerCounties); ?>;
	var playerPosition;
	var explorer = document.getElementById("modalExplorer");
		function showSubs(position){
		// fill list of all subs with the same position into modal. (on click, swap positions with card)
			if(position == "GK"){
				explorer.innerHTML ="		<div class='row'> <div class='col-sm-12'> <div class='panel panel-default'><div class='panel-heading'>Substitute Options</div><div class='panel-body'><table  class='table table-hover' cellpadding='100' tyle='width:200%'><tr><th>Name   </th><th>County   </th><th>Position   </th></tr><tr class='clickable'><td><?php echo $playerNames[0] ?></td><td>             <?php echo $playerCounties[0] ?></td><td>GK</td></tr></table></div></div></div></div> <button type='button' class='btn btn-primary btn-block' onClick='clearExplorer()'>Clear Table</button>";
			}else{
				explorer.innerHTML ="		<div class='row'> <div class='col-sm-12'> <div class='panel panel-default'><div class='panel-heading'>Substitute Options</div><div class='panel-body'><table  class='table table-hover' cellpadding='100' tyle='width:200%'><tr><th>Name   </th><th>County   </th><th>Position   </th></tr><tr><td><?php echo $playerNames[0] ?></td><td>             <?php echo $playerCounties[0] ?></td><td>GK</td></tr></table></div></div></div></div> <button type='button' class='btn btn-primary btn-block' onClick='clearExplorer()'>Clear Table</button>";
			}
		}
		function clearExplorer(){
			explorer.innerHTML = "";
		}
		function swapPlayer(activePlayer, sub){
		
		}
		$(".clickable").click(function() {
			alert("hello");
		});
	</script>