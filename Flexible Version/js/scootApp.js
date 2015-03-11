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