<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Browse</title>
	
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
  </head>
  <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
		<a class="btn btn-link btn-nav pull-left" href="Home.php" data-transition="slide-out">
			<span class="icon icon-left-nav"></span>
			Home
		</a>
		<a class="btn btn-link btn-nav pull-right">
			<span class="icon icon-bars"></span>
			
		</a>
		<h1 class="title">Browse</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <div class="card">
        <ul class="table-view">
			<?php
			$entries = scandir("entries");	//list of file names in entries folder
			//pre($entries);
			
			foreach($entries as $fileName){
				if(strpos($fileName,'_') !== false){//if filename contains '_'
					$entryName = substr($fileName,0,strrpos($fileName,'.ent')); //fileName without extension
					
					//pull some data from entryName
					$teamNumber = substr($fileName,0,strrpos($entryName,'_'));
					$version = substr($entryName,strrpos($entryName,'_') + 1);
					
					//create the list item element
					echo '<li class="table-view-cell">';
					echo '	<a class="push-right" href="ViewEntry.php?fileName='.$entryName.'" data-transition="slide-in">';
					echo '		<strong>Team '.$teamNumber.' v'.$version.'</strong>';
					echo '	</a>';
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