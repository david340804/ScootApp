function hasClass(elem, className) {
    return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}

//Enter key advances to next field
// $('body').on('keydown', 'input, select, textarea,button', function(e) {
// var self = $(this)
  // , form = self.parents('form:eq(0)')
  // , focusable
  // , next
  // , prev
  // ;

// if (e.shiftKey) {
 // if (e.keyCode == 13) {
	 // focusable =   form.find('input,a,select,textarea,button').filter(':visible');
	 // prev = focusable.eq(focusable.index(this)-1); 

	 // if (prev.length) {
		// prev.focus();
	 // } else {
		// form.submit();
	// }
  // }
// }
  // else
// if (e.keyCode == 13) {
	// focusable = form.find('input,a,select,textarea,button').filter(':visible');
	// next = focusable.eq(focusable.index(this)+1);
	// if (next.length) {
		// next.focus();
	// } else {
		// form.submit();
	// }
	// return false;
// }
// });



function submitMe(toggleNames){
	
	//read toggles
	//each toggle has a div and a hidden field to submit its value
	//ex: <div id="movesToggle"> <input type="hidden" id="movesToggleField">
	
	//var toggleNames = ['moves','scores','low','mid','high'];

	//check all the toggles and update their hidden fields
	for(var i = 0; i < toggleNames.length; i++){
		var toggleName = toggleNames[i];
		if(hasClass(document.getElementById(toggleName + 'Toggle'),'active')){
			document.getElementById(toggleName + 'ToggleField').value='true';
		}
	}
	
	//submit the form finally
	document.mainForm.submit();
}

function entryExists(teamNum){
	var response = confirm('An entry for team ' + teamNum + ' already exists, overwrite existing entry?');
	if(response){
		//overwrite
		window.location = "EntrySumbitted.php";
	}else{
		//don't overwrite
		window.location = "AddEntry.php";
	}
}

function goBack() {
    window.history.back()
}

function findEntry(){
	var teamNumber = document.getElementById('teamNumberF').value;
	window.location = "ViewEntry.php?fileName=" + teamNumber + "_1";
}

function EntryNotFound(){
	window.location = "EntryNotFound.php";
}

function updateMatchView(){
	var b1 = idElementValue("b1");
	var b2 = document.getElementById("b2").value;
	var b3 = document.getElementById("b3").value;
	var r1 = document.getElementById("r1").value;
	var r2 = document.getElementById("r2").value;
	var r3 = document.getElementById("r3").value;

	window.location = window.location.href.substring(0,window.location.href.indexOf('?')) + "?b1=" + b1 + "&b2=" + b2 + "&b3=" + b3 + "&r1=" + r1 +"&r2=" + r2 + "&r3=" + r3;
}

function idElementValue(elementId){
	return document.getElementById(elementId).value;
}