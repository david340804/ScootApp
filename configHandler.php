<?php
//function to read the config file and returns a nested array with format [$fields,$toggleNames]
function readConfig(){

	//read the config file
	$configContents = file_get_contents("config.conf"); //raw file to string dump
	$configArray =  explode("\n",$configContents); //spit at each new line
	//read each line of the config file to the fields arrays
	
	//declare the field arrays
	$fields = array();
	$toggleNames = array();
	$placeHolders = array();
	
	foreach($configArray as $line){
		$lineArray =  explode(",",$line); //spit the line at each comma character
		//now lineArray has length = 2 for number and text fields or length = 3 for toggles
		
		$fieldsKey = $lineArray[1];//the name of the field is the key
		$fieldsVal = $lineArray[0];//the type of the field (text|number|toggle) is the value
		
		//text only additional code
		if((trim($lineArray[0]) == 'text')||(trim($lineArray[0]) == 'number')){
			if( isset($lineArray[2])){	//proceed only if there actually IS a placeholder
				$placeHolders[$fieldsKey] = trim($lineArray[2]);//save placeholder text to placeHolders array
			}
		}
		
		//toggles only additional code
		if( trim($lineArray[0]) == 'toggle'){
			$fieldsKey = $fieldsKey . 'ToggleField';//add toggle field to redirect to the hiddle field that accompanies the actual toggle component
			
			$toggleNames[$fieldsKey] = $lineArray[2];//save to toggle name to the array
		}
		
		$fields[trim($fieldsKey)] = $fieldsVal;
	}
	return array($fields,$toggleNames,$placeHolders);

}
?>