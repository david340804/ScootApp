<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ScootApp Home</title>
	
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
      <h1 class="title">ScootApp Home</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <p class="content-padded">Welcome to ScootApp, your platform-independent scouting app</p>
      <div class="card">
        <ul class="table-view">
          <li class="table-view-cell">
            <a class="push-right" href="AddEntry.php" data-transition="slide-in">
              <span class="media-object pull-left icon icon-compose"></span>
				<div class="media-body">
				<strong>Add Entry</strong>
				</div>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="Browse.php" data-transition="slide-in">
              <span class="media-object pull-left icon icon-bars"></span>
				<div class="media-body">
				<strong>Browse</strong>
				</div>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="FindEntry.php" data-transition="slide-in">
              <span class="media-object pull-left icon icon-search"></span>
				<div class="media-body">
				<strong>Find Entry</strong>
				</div>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="push-right" href="Help.php" data-transition="slide-in">
              <span class="media-object pull-left icon icon-info"></span>
				<div class="media-body">
				<strong>Help</strong>
				</div>
            </a>
          </li>
        </li>
          <li class="table-view-cell"  onclick="location='MatchView.php'">
            <a class="push-right" href="MatchView.php" data-transition="slide-in">
              <span class="media-object pull-left icon icon-play"></span>
        <div class="media-body">
        <strong>Match View</strong>
        </div>
            </a>
          </li>
		  <li class="table-view-cell">
            <a class="push-right" href="Credits.php" data-transition="slide-in">
              <span class="media-object pull-left icon icon-more"></span>
				<div class="media-body">
				<strong>Credits</strong>
				</div>
            </a>
          </li>
        </ul>
      </div>
    </div>

  </body>
</html>