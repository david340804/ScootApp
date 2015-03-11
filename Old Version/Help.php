<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Help</title>
	
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
		<a class="btn btn-link btn-nav pull-left" href="Home.php" data-transition="slide-out">
			<span class="icon icon-left-nav"></span>
			Home
		</a>
		<a class="btn btn-link btn-nav pull-right">
			<span class="icon icon-info"></span>
			
		</a>
		<h1 class="title">Help</h1>
		<style type+"text/css">
		<!--
		.table-view-cell {
			margin:0px;
			padding:10px;
		}
		-->
		</style>
    </header>

	
    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <p class="content-padded">Do you really need help with this?
		<br>It's actually pretty self-explanatory.
		<br>In the unlikely event that you actually do need help or require an explanation for how this works, see below.</p>
      <div class="card">
        <ul class="table-view">
          <li class="table-view-cell">
              This app is designed and created for an FTC/FRC/(any other three letter acronyms) team to manage and organize the data they
			scouted about other teams in an easy to use and concise fashion.
			Emphasis on <strong>EASY TO USE!</strong>
          </li>
          <li class="table-view-cell">
              <strong>Home Page</strong>
			  <br>Anyway, the home page is the first thing that you will see upon launching the app and it is where all the other menu and
			capabilities of this app can be accessed.
          </li>
		  <li class="table-view-cell">
			<strong>Add Entry</strong>
			<br>The first tab is the add entry one. This is used to, wait for it, add entries.
			The required information for each entry is the team number, this is useful for searching and finding previously entered data.
			Simply fill in the tabs about drive type and autonomous and toggle on/off whether said team is capable of each.
			Click "submit" and then a screen will display what it is that you just entered in text form.
			From here, you can go back to the Home page or view what you just entered.
		  </li>
		  <li class="table-view-cell">
			<strong>Browse</strong>
			<br>The second tab in the home page is Browse.
			This is used to browse *gasp*.
			It is an ordered list of all the teams that have had data entered about them.
			If the same team number is entered twice, it will just create an extra copy with a v2 after it, and then v3 and so on and so forth.
		  </li>
		  <li class="table-view-cell">
		    <strong>Find Entry</strong>
			<br>The Find Entry page is extremely useful.
			Type in the team number EXACTLY AS IT IS and not part of it in the text field (don't get lazy, son).
			Click the big green button to view the information about that team.
			If it doesn't exist, then prepare for a kind message from the creator.
		  </li>
		  <li class="table-view-cell">
		    <strong>Help</strong>
			<br>The help tab brings you here. If you didn't figure that out, you wouldn't be reading this.
			<br><br>The Credits page shows gratitude to all the person that helped make this possible.
			<br><br>Yes, one person.
		  
		  
        </ul>
      </div>
    </div>

  </body>
</html>