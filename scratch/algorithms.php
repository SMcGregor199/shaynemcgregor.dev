<?php



function binarySearch($array,$value) {
	if(count($array) === 0) return false;
	$low = 0;
	$high = count($array) - 1;

	while($low <= $high) {
		$mid = floor(($low+$high)/2);

		if($array[$mid] == $value) {
			return $mid;
		}

		if($value <= $array[$mid]) {
			$high = $mid - 1;
		} 
		else {
			$low = $mid + 1;
		}
	}
	return false;
}

$testArray = [50,51,52,53,54,55,56,57,58,59.60];
$target = 61;

if ( binarySearch($testArray,$target) ) {

	echo array_search($target,$testArray);

} else {
	echo $target . "does not exist";
}
