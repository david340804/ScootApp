<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	
	<?php 
	//set up some variables
	$fileName = $_GET["fileName"];
	$teamNumber = substr($fileName,0,strrpos($fileName,'_'));
	$version = substr($fileName,strrpos($fileName,'_') + 1);
	
	//title for pc browsers
	echo "<title>Team ".$teamNumber." v".$version."</title>";
	?>
    
	
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
	
	<script src="js/scootApp.js"></script>
  </head>
  <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
		<a class="btn btn-link btn-nav pull-left" href="Browse.php" data-transition="slide-out">
			<span class="icon icon-left-nav"></span>
			Back
		</a>
		<a class="btn btn-link btn-nav pull-right">
			
			
		</a>
		
		<?php
		echo '<h1 class="title">Team '.$teamNumber.' v'.$version.'</h1>';
		
		?>
			
	  </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
	
	<?php
		if(! file_exists("entries/".$fileName.".ent")){
		echo "<script>EntryNotFound()</script>";
		}
	?>
	
      <div class="card">
        <ul class="table-view">

			<?php
			$fileContents = file_get_contents("entries/".$fileName.".ent"); //raw file to string dump
			$fileArray =  explode("\n",$fileContents); //spit at each new line
			
			
			//copy field values into array fieldValues where fieldName is $key
			foreach($fileArray as $line){
				$key = substr($line,0,strrpos($line,': '));
				$val = substr($line,strrpos($line,': ') + 2);
				$fieldValues[$key] = $val;
			}
			// pre($fileArray);
			//pre($fieldValues);
			
			
			$fields = array(
				'teamNumber'       => 'text',
				'teamName'         => 'text',
				'driveType'        => 'text',
				'mainStrength'     => 'text',
				'startingPosition' => 'text',
				'movesToggleField' => 'toggle',
				'scoresToggleField'=> 'toggle',
				'lowToggleField'   => 'toggle',
				'midToggleField'   => 'toggle',
				'highToggleField'  => 'toggle'
				);
			
			$toggleNames = array(
				'movesToggleField' => 'Autonomous Moves',
				'scoresToggleField'=> 'Autonomous Scores',
				'lowToggleField'   => 'Low Goal',
				'midToggleField'   => 'Mid Goal',
				'highToggleField'  => 'High Goal'
				);
			
			foreach($fields as $fieldName => $type){
				if($type == 'text'){
					$words = preg_split('/(?=[A-Z])/',$fieldName);//split fieldName at capital letters
					$words[0] = ucfirst($words[0]); //capitalize first word
					$fieldNameString = implode(" ",$words); //recombine with space in between
					echo '<li class="table-view-cell">';
					echo '<strong>'.$fieldNameString.': </strong>'.$fieldValues[$fieldName];
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
			?>
          
        </ul>
      </div>
    </div>

  </body>
</html>

<?php 
function pre($data) {
    print '<pre>' . print_r($data, true) . '</pre>';
}
?>