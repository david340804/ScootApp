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
		<a class="btn btn-link btn-nav pull-left" href="Home.php" data-transition="slide-out">
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
				
				<div class="input-row">
					<label>Number</label>
					<input name="teamNumber" type="number" placeholder="####" width="50%" form="addEntryForm">
				</div>
				
				<div class="input-row">
					<label>Name</label>
					<input name="teamName" type="text" placeholder="Team Name" width="50%" form="addEntryForm">
				</div>

				<br>
				
				<div>
					<strong style="margin-left:5px">Drive Type</strong>
					<input name="driveType" type="text" style="margin-top:10px;margin-bottom:10px" placeholder="Tank, Omni, Arcade, Mecaum..." form="addEntryForm">				
				</div>
				
				<div>
					<strong style="margin-left:5px">Main Strength</strong>
					<input name="mainStrength" type="text" style="margin-top:10px;margin-bottom:10px" placeholder="Speed, Accuracy, Autonomous..." form="addEntryForm">				
				</div>
				
				<div>
					<strong style="margin-left:5px">Starting Position</strong>
					<input name="startingPosition" type="text" style="margin-top:10px;margin-bottom:10px" placeholder="Left, Middle, Right, Goalzone..." form="addEntryForm">				
				</div>
				
				<strong style="margin-left:5px">Autonomous</strong>
				<ul class="table-view">
					<li class="table-view-cell" style="margin:0px">
						Moves
						<div class="toggle" id="movesToggle">
							<div class="toggle-handle"></div>
						</div>
						<input type="hidden" name="movesToggleField" id="movesToggleField" value="false" form="addEntryForm"/>
					</li>
					<li class="table-view-cell" style="margin:0px">
						Scores
						<div class="toggle" id="scoresToggle">
							<div class="toggle-handle"></div>
						</div>
						<input type="hidden" name="scoresToggleField" id="scoresToggleField" value="false" form="addEntryForm"/>
					</li>
				</ul>
				
				<strong style="margin-left:5px">Goals</strong>
				<ul class="table-view">
					<li class="table-view-cell">
						Low
						<div class="toggle" id="lowToggle">
							<div class="toggle-handle"></div>
						</div>
						<input type="hidden" name="lowToggleField" id="lowToggleField" value="false" form="addEntryForm"/>
					</li>
					<li class="table-view-cell">
						Mid
						<div class="toggle" id="midToggle">
							<div class="toggle-handle"></div>
						</div>
						<input type="hidden" name="midToggleField" id="midToggleField" value="false" form="addEntryForm"/>
					</li>
					<li class="table-view-cell">
						High
						<div class="toggle" id="highToggle">
							<div class="toggle-handle"></div>
						</div>
						<input type="hidden" name="highToggleField" id="highToggleField" value="false" form="addEntryForm"/>
					</li>
				</ul>
				
				<!-- <input type="submit" class="btn btn-positive btn-block"> -->
				<button type="button" onClick="submitMe()" class="btn btn-positive btn-block">Submit</button>
				
			</form>
		</div>
    </div>

  </body>
</html>