<!DOCTYPE html>
<html>
  <head>
	<!-- Allows android to add to home screen -->
	<meta name="mobile-web-app-capable" content="yes">
    
	<meta charset="utf-8">
    <title>Add Data</title>
 
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
      <h1 class="title">Add Data</h1>
    </header>
	
    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
	<form enctype="multipart/form-data" action="" method="post">
      <div class="card">
        <ul class="table-view">
			<li class="table-view-cell">
				<span class="media-object pull-left icon icon-code"></span>
				<div class="media-body">
				Data Point 1
				</div>
			</li>
		
			<li class="table-view-cell">
				<div class="segmented-control">
				  <a class="control-item active">
					Thing one
				  </a>
				  <a class="control-item">
					Thing two
				  </a>
				  <a class="control-item">
					Thing three
				  </a>
				</div>
			</li>
			
			<li class="table-view-cell">
				<span class="media-object pull-left icon icon-code"></span>
				<div class="mdia-body">
				Data Point 2
				</div>
			</li>
			
			<li class="table-view-cell">
				
			</li>
			
			<li class="table-view-cell">
				<br>
				
			</li>
			
        </ul>
		
      </div> 
	  <div  style="margin:10px">
		<input name="textField1" type="text" placeholder="Full name">
		<button type="submit" class="btn btn-positive btn-block">Submit</button>
	  </div>
		
		
	</form>
    </div>
 
  </body>
</html>

<?php
file_put_contents("test.txt",$_POST['textField1']);
?>