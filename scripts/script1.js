// calculate the volume of a trapezoidal prism
// function returns the calculated volume or -1 if some/all of the arguments are not numeric
function calcVolumeOfTrapPrism(prBase1, prBase2, prHeight, prLength) {
	// check if all arguments are numeric
	if (!isNaN(prBase1) && !isNaN(prBase2) && !isNaN(prHeight) && !isNaN(prLength)) {
		// in case a user entered negative numbers, convert them to positive numbers
		let volume = (Math.abs(prBase1) + Math.abs(prBase2)) /2 * Math.abs(prHeight) * Math.abs(prLength);
		return (volume );
	} else {
		console.error("all arguments of calcVolumeOfTrapPrism() must be numeric");
		return -1;
	}
}

// test calcVolumeOfTrapPrism()
//console.log(calcVolumeOfTrapPrism(2,4,3,5));

// write a string backwards
function writeStringBackwards(str) {
	let resultStr = "";
	// check if argument is a string
	if (typeof str !== "string") {
		console.error("argument is expected to be a string");
	} else {
		let strLength = str.length;
		for (let i = strLength-1; i >=0; i--){
			resultStr += str.charAt(i);
		}
	}
	return  resultStr;
}

// test writeStringBackwards()
//console.log(writeStringBackwards("ajsdjfkslajlfaksjfldsl"));
//console.log(writeStringBackwards(123456789));

// multiply all occurrences of numbers in the array (first argument) by the second argument (a number)
// function returns a modified array (if it contained numbers or values that can be converted to numbers)
// or an empty array if the first argument wasn't a valid array
function multiplyAllNumbersInArray(arr, num) {
	// test if both arguments are valid
	if (Array.isArray(arr) && !isNaN(num)) {
		let arrLength = arr.length;
		for (let i = 0; i < arrLength; i++) {
			if (!isNaN(arr[i])) {
				arr[i] *= num;
			}
		}
	} else {
		console.error("invalid arguments: first argument must be an array, second argument must be a number");
		arr = [];
	}
	return arr;
}

// test multiplyAllNumbersInArray();
/*
let array = [1,2,3,4,5,"foo"];
console.log(multiplyAllNumbersInArray(array, -6));
let newArr = ['1', '2', "dom", {}];
console.log(multiplyAllNumbersInArray(newArr, "foo"));
let arr3 = {color: "red", shape: "rectangle"};
console.log(multiplyAllNumbersInArray(arr3, 9));
*/