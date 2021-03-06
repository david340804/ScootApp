<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	
	<?php 
	
	//title for pc browsers
	echo "<title>Match View</title>";
	?>
    
	
	<!-- Allows Android to add to home screen -->
	<meta name="mobile-web-app-capable" content="yes">
    
	
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <!--<link href="css/ratchet.min.css" rel="stylesheet">-->

    <!-- Include matchview styling -->
    <link href="css/MatchView.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <!--<script src="js/ratchet.min.js"></script>-->
	
	<script src="js/scootApp.js"></script>
  </head>
  <body>
  <div style="width:100%;font-family: Arial, Helvetica, sans-serif;">
  <br>
	<div align="center"> 
  		<button class="update-button" onclick="updateMatchView()">Update</button>
 	</div> 
    <!-- Make sure all your bars are the first things in your <body> -->
   <!--  <header class="bar bar-nav">
		<a class="btn btn-link btn-nav pull-left" href="Browse.php" data-transition="slide-out" >
			<span class="icon icon-left-nav"></span>
			Back
		</a>
		<a class="btn btn-link btn-nav pull-right">
			
			
		</a>
		
		<?php
		echo '<h1 class="title">Team '.$teamNumber.' v'.$version.'</h1>';
		
		?>
			
	  </header> -->
	 <?php

	REQUIRE 'configHandler.php';

	//array of files for team file names
	$teamCodes = array(
	    "0" => "b1",
	    "1" => "b2",
	    "2" => "b3",
	    "3" => "r1",
	    "4" => "r2",
	    "5" => "r3"
	);

	$teamFileNames = array(
	    "0" => '',
	    "1" => '',
	    "2" => '',
	    "3" => '',
	    "4" => '',
	    "5" => ''
	);

	for($panel = 0; $panel < 6; $panel++){
		if(isset($_GET[$teamCodes[$panel]])){
			$teamFileNames[$panel] = $_GET[$teamCodes[$panel]];
		}
	}


	for($teamPanelNumber = 0; $teamPanelNumber < 6; $teamPanelNumber++){

	if($teamPanelNumber < 3){
		echo '<div class="matchPanel leftSide">';
	}else{
		echo '<div class="matchPanel rightSide">';
	}
  	
    echo '<div >';
    echo '<ul class="table-view">';

    echo   ' <li class="table-view-cell">';
    echo   '		<input type="text" class="teamNumberBox" value="'.$teamFileNames[(string)$teamPanelNumber].'" id='.$teamCodes[(string)$teamPanelNumber].'></input>';
    echo   '</li>';
        
	//set up some variables
	$fileName = $teamFileNames[(string)$teamPanelNumber];

	//default to version 1 if no version specified
	if(strpos($fileName,'_') == false && $fileName != ''){
		//add version 1 suffix
		$fileName = $fileName.'_1';
	}

	$teamNumber = substr($fileName,0,strrpos($fileName,'_'));
	$version = substr($fileName,strrpos($fileName,'_') + 1);

	//what to do with the panel
	if($fileName == ''){
		//leave the panel empty
		echo "<br>";
	}elseif(! file_exists("entries/".$fileName.".ent"))  {
		//no entry found for team and version specified
		echo   ' <li class="table-view-cell">';
    	echo   '		Missing Entry for '.$fileName;
    	echo   '</li>';
		echo "<br>";
	}else{
		//show the team info in the panel
		
		$fileContents = file_get_contents("entries/".$fileName.".ent"); //raw file to string dump
		$fileArray =  explode("\n",$fileContents); //spit at each new line
		
		//declare array to hold all the values read from the entry file
		$fieldValues = array();
		
		//copy field values into array fieldValues where fieldName is $key
		foreach($fileArray as $line){
			$key = substr($line,0,strrpos($line,': '));
			$val = substr($line,strrpos($line,': ') + 2);
			$fieldValues[$key] = $val;
		}
		// pre($fileArray);
		
		
		//read the config file to the field arrays
		$fields = readConfig()[0];
		$toggleNames = readConfig()[1];

		
		foreach($fields as $fieldName => $type){
			if(($type == 'text')||($type == 'number')){
				$words = preg_split('/(?=[A-Z])/',$fieldName);//split fieldName at capital letters
				$words[0] = ucfirst($words[0]); //capitalize first word
				$fieldNameString = implode(" ",$words); //recombine with space in between
				echo '<li class="table-view-cell">';
				echo '<strong>'.$fieldNameString.': </strong>'.$fieldValues[trim($fieldName)];
				echo '</li>';	
				
			}elseif($type == 'toggle'){
				$fieldNameString = $toggleNames[$fieldName];//get toggle field name from $toggleNames
			
				//choose bg color based on value
				if($fieldValues[$fieldName] == 'true'){
				$bg = 'green';
				}elseif($fieldValues[$fieldName] == 'false'){
				$bg = 'red';
				}
				echo '<li class="table-view-cell" style="background-color:'.$bg.'">';
				echo '<strong>'.$fieldNameString.'</strong>';
				echo '</li>';
			}	
		}
	}
          
    echo '   </ul>';
    echo ' </div>';
    echo '</div>';

    }
    ?>
    </div>
  </body>
</html>

<?php 
function pre($data) {
    print '<pre>' . print_r($data, true) . '</pre>';
}
?>