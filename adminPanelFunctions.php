<?php
	// Functions will be used by admin panel in player table.
	$playerValue = 0;
	$playerID;
	$position = 3; // 1 = goalkeeper, 2 = full Back, 3 - Half Back, 4 - Mid, 5 - Forward.
	
	function scorePoint($pos){
		if($pos = 1 || $pos = 2){
			$playerValue = $playerValue + 4;
		}elseif($pos = 3){
			$playerValue = $playerValue + 3;
		}elseif($pos = 4){
			$playerValue = $playerValue + 2;
		}else if($pos = 5){
			$playerValue = $playerValue + 1;
		}
	}
		function scoreGoal($pos){
		if($pos = 1 || $pos = 2){
			$playerValue = $playerValue + 12;
		}elseif($pos = 3){
			$playerValue = $playerValue + 9;
		}elseif($pos = 4){
			$playerValue = $playerValue + 6;
		}else if($pos = 5){
			$playerValue = $playerValue + 3;
		}
	}
	
	function 

?>