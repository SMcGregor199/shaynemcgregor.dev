<?php 
// O(n^2)time | O(1) space

function twoNumberSum($array,$targetSum) {
	for($i = 0; $i < count($array); $i++) {
		for($j = $i + 1; $j < count($array); $j++) {
			if ($array[$i] + $array[$j] == $targetSum) {
			 	print_r( [ $array[$i],$array[$j] ] ); 
			}	
		}
	}
	return [];
}

// O(n*log(n)) | O(1) space
function twoNumberSumWSort($array,$targetSum) {
 	sort($array);
 	$left = 0;
 	$right = count($array) - 1;
 	while ($left < $right) {
 		$currentSum = $array[$left] + $array[$right];
 		if($currentSum == $targetSum) {
 			print_r([$array[$left],$array[$right]]);

 		} else if ($currentSum < $targetSum) {
 			$left += 1;
 		} else if ($currentSum > $targetSum) {
 			$right -= 1;
 		}
 		
 	}
 	
 	return [];
}

$numArray = [3,5,-4,8,11,1,-1,6];
$targetValue = 7;
	
twoNumberSum($numArray,$targetValue);



