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
	<div class="content" style="margin:10px">
		<form>
		  <input type="text" placeholder="Full name">
		  <input type="search" placeholder="Search">
		  <textarea rows="5"></textarea>
		  <button class="btn btn-positive btn-block">Choose existing</button>
		</form>
	</div>

 
  </body>
</html>

<?php
file_put_contents("test.txt",$_POST['textField1']);
?>