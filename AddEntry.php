<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add New Entry</title>
	
	<!-- Allows Android to add to home screen -->
	<meta name="mobile-web-app-capable" content="yes">
    
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="css/ratchet.min.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="js/ratchet.min.js"></script>
	
	<!-- Include the compiled JQuery JS -->
	<!-- <script src="js/jquery-1.11.1.min.js"></script> -->
	
	<script src="js/scootApp.js"></script>

  </head>
  <body>
	

	
    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
		<a class="btn btn-link btn-nav pull-left" href="index.php" data-transition="slide-out">
			<span class="icon icon-left-nav"></span>
			Home
		</a>
		<a class="btn btn-link btn-nav pull-right">
			<span class="icon icon-compose"></span>
			
		</a>
		<h1 class="title">Add Entry</h1>
		
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content" data-role="page">
	

	
		<div  style="margin:10px">
			<form action="EntrySubmitted.php" method="get" id="addEntryForm" name="mainForm">
				<?php
					REQUIRE 'configHandler.php';
					
					//read the config file to the field arrays
					$fields = readConfig()[0];
					$toggleNames = readConfig()[1];
					$placeHolders = readConfig()[2];
					
					//debug echos
					//pre($fields);
					//pre($toggleNames);
					
					//create the input fields
					foreach($fields as $fieldName => $type){
					if(($type == 'text')||($type == 'number')){
						//un-camelCase and space out name
						$words = preg_split('/(?=[A-Z])/',$fieldName);//split fieldName at capital letters
						$words[0] = ucfirst($words[0]); //capitalize first word
						$fieldNameString = implode(" ",$words); //recombine with space in between
						
						
						//get the placeholder for the current field if it doesnt exist set it blank
						$placeholder = '';
						if(isset($placeHolders[$fieldName])){
							$placeholder = $placeHolders[$fieldName];
						}
						
						echo '<div>';
						echo '<strong style="margin-left:5px">'.$fieldNameString.'</strong>';
						echo '<input name="'.$fieldName.'" type="'.$type.'"  style="margin-top:10px;margin-bottom:10px" placeholder="'.$placeholder.'" form="addEntryForm">';
						echo '</div>';	
						
					}elseif($type == 'toggle'){
						$fieldNameString = $toggleNames[$fieldName];//get toggle field name from $toggleNames

						echo '<li class="table-view-cell" style="margin:0px;list-style-type:none">';
						echo	 $fieldNameString;
						echo	 '<div class="toggle" id="' . substr($fieldName,0,-5) . '">'; //name the toggle by removing last 5 chars ('Field' from 'xxxxToggleField')
						echo		'<div class="toggle-handle"></div>';
						echo 	'</div>';
						echo	'<input type="hidden" name="'.$fieldName.'" id="'.$fieldName.'" value="false" form="addEntryForm"/>';
						echo '</li>';
					}elseif($type == 'title'){
						echo '<strong style="margin-left:5px">'.$fieldName.'</strong>';
					}
				}
				
				//toggle text array to send to submitMe() method
				$toggleText = '[';
				foreach($toggleNames as $toggleName => $useless){
					$toggleText = $toggleText . '\'' . substr($toggleName,0,strrpos($toggleName,'ToggleField')) . '\',';//add all the toggle names to the string $toggleText
					
				}
				$toggleText = substr($toggleText,0,-1); //remove the last comma
				$toggleText = $toggleText . ']';
				
				echo '<button type="button" onClick="submitMe(' . $toggleText . ')" class="btn btn-positive btn-block">Submit</button>';
				
				
				?>					
				
				
			</form>
		</div>
    </div>

  </body>
</html>
<?php 
function pre($data) {
    print '<pre>' . print_r($data, true) . '</pre>';
}
?>