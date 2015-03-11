<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entry Submitted</title>
	
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
      <h1 class="title">Entry Submitted</h1>
    </header>

	
    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content" style="margin:10px">
      
			
		<?php
		//write the data to a file
		//does file already exist?
		$fileNameSuffix = 1;
		while( file_exists("entries/".$_GET["teamNumber"]."_".$fileNameSuffix.".ent")){
			//there already is an entry here so up the suffix
			$fileNameSuffix++;
		}
		echo '<center><p class="content-padded">'."entries/".$_GET["teamNumber"]."_".$fileNameSuffix.".ent".'</p></center>';
		$fileName = "entries/".$_GET["teamNumber"]."_".$fileNameSuffix.".ent";
		$teamNumber = $_GET["teamNumber"];
		
		//append all the data points to the file in format <$key: $value\n>
		foreach ($_GET as $key => $value){
			file_put_contents($fileName,$key.": ".$value."\n", FILE_APPEND);
		}
		
		
		echo '<center><p class="content-padded">Submitted Entry for team ' . $_GET["teamNumber"] . ' "' . $_GET["teamName"] . '"</p></center>';
		pre($_GET);
		
		?>
		
		<button type="button" onClick="window.location='AddEntry.php'" class="btn btn-primary btn-block">Add Another Entry</button>
		
		<?php
		echo '<a type="button" href="ViewEntry.php?fileName='. $teamNumber. '_' . $fileNameSuffix. '" class="btn btn-positive btn-block">View Submitted Entry</a>';
		?>
		
		<button type="button" onClick="window.location='Home.php'" class="btn btn-negative btn-block">Home</button>
    </div>
	
	
	

  </body>
</html>

<?php 
function pre($data) {
    print '<pre>' . print_r($data, true) . '</pre>';
}
?>