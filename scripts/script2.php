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

// multiply all occurrences of numbers in the array (first argument) by the second argument
// function returns a modified array (if it contained numbers or values that can be converted to numbers)
function multiplyAllNumbersInArray($arr, $num) {
		if (is_array($arr) && is_numeric($num)) {
			$arrLength = count($arr);
			for ($i = 0; $i < $arrLength; $i++) {
				if (is_numeric($arr[$i])) {
					$arr[$i] *= $num;
				}
			}
		} else {
			echo "invalid arguments: first argument must be an array, second argument must be number";
			$arr = [];
		}
	return $arr;
}

// test multiplyAllNumbersInArray();
/*
$array = [1,2,3,4,5,"foo"];
$newArr = multiplyAllNumbersInArray($array, 5);
foreach ($newArr as $value) {
	echo $value;
}
*/

?>




