<?php
	// calculate the volume of a trapezoidal prism
	// function returns the calculated volume or -1 if some/all of the arguments are not numeric
	function calcVolumeOfTrapPrism($prBase1, $prBase2, $prHeight, $prLength) {
		// check if all arguments are numeric
		if (is_numeric($prBase1) && is_numeric($prBase2) && is_numeric($prHeight) && is_numeric($prLength)) {
			$volume = (abs($prBase1) + abs($prBase2)) /2 * abs($prHeight) * abs($prLength);
		} else {
			echo "Not all arguments are numeric";
			$volume = -1;
		}
		return $volume;
	}
	//test calcVolumeOfTrapPrism()
	//echo calcVolumeOfTrapPrism(2,4,3,5);

// write a string backwards
function writeStringBackwards($str) {
		$resultStr = "";
		if (is_string($str)) {
			$strLength = strlen($str);
			for ($i = $strLength-1; $i >=0; $i--){
				$resultStr .= $str[$i];
			}
		} else {
			echo "argument is expected to be a string";
		}
		return  $resultStr;
}

// test writeStringBackwards()
//echo writeStringBackwards("ajsdkjfksdajkf");
//echo writeStringBackwards(123456789);





?>




