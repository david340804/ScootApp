<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Find Entry</title>
	
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
	<script src="js/jquery-1.11.1.min.js"></script>
	
	<script src="js/scootApp.js"></script>
  </head>
  <body>
	<script>
		$('body').on('keydown', 'input, select, textarea', function(e) {
		var self = $(this)
		  , form = self.parents('form:eq(0)')
		  , focusable
		  , next
		  , prev
		  ;

		if (e.shiftKey) {
		 if (e.keyCode == 13) {
			 focusable =   form.find('input,a,select,button,textarea').filter(':visible');
			 prev = focusable.eq(focusable.index(this)-1); 

			 if (prev.length) {
				prev.focus();
			 } else {
				form.submit();
			}
		  }
		}
		  else
		if (e.keyCode == 13) {
			focusable = form.find('input,a,select,button,textarea').filter(':visible');
			next = focusable.eq(focusable.index(this)+1);
			if (next.length) {
				next.focus();
			} else {
				form.submit();
			}
			return false;
		}
		});
	</script>
    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
		<a class="btn btn-link btn-nav pull-left" href="Home.php" data-transition="slide-out">
			<span class="icon icon-left-nav"></span>
			Home
		</a>
		<a class="btn btn-link btn-nav pull-right">
			<span class="icon icon-info"></span>
			
		</a>
		<h1 class="title">Find Entry</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">

	
		<br>
		<div style="margin:10px">
			Team Number <input type="number" style="width:30%" placeholder="####" id="teamNumberF">
			<a class="btn btn-positive btn-block" onclick="findEntry()" data-transition="slide-in">Submit</a>
		<br>
		
    </div>

  </body>
</html>