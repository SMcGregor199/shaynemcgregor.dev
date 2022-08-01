<?php 

$letters = "shayne";





function isPalindrome($string) {
	$chars = str_split($string);
	$charsR = array_reverse($chars);

	

	if(array_values($charsR) === array_values($chars)) {
		echo "This string is a palindrome";
	} else {
		echo "this string is not a palindrome";
	}
	
}

function isPalindrome($string) {
	$arrayString = str_split($string);
	$leftId = 0;
	$rightId = count($arrayString) - 1;

	while($leftId < $rightId) {
		if($arrayString[$leftId] != $arrayString[$rightId]){
			echo "This string is not a Palindrome";
		}
		$leftId += 1;
		$rightId -= 1;
	}
}

isPalindrome($letters);