<?php

// create 3 normal arrays

$array_1 = [true, false, "yes", 55];
$array_2 = [33, "New York", "fruits", 100];
$array_3 = [false, "PA", "NO", 3000];

// create 3 associative arrays

$object_1 = [
	"name" => "object-1",
	"hometown" => "internet",
	"job" => "store info",
];

$object_2 = [
	"name" => "object-2",
	"hometown" => "the sky",
	"job" => "store info about the sky",
];

$zaiden = [
	"name" => "zaiden",
	"hometown" => "the nook",
	"job" => "to be a kid",
];
// echo 2 different items from the normal arrays

echo $array_1[2];
echo $array_2[3];

// echo 2 different items from the associative arrays 

echo $object_1["name"];
echo $zaiden["hometown"];

// change 2 items in the normal arrays
$array_1[2] = "Hell Yes!";
$array_3[1] = "MA";

// add some items with array_push() to the normal arrays

array_push($array_1, "array-push");
array_push($array_2, "array-push");
array_push($array_3, "array-push");

//remove 2 keys from the associative arrays-with unset()
unset($object_2["hometown"]);
unset($zaiden["job"]);
// add 2 keys to the asscoiative arrays
$object_1["color"] = "blue";
$object_2["color"] = "red";
// put all the three normal arrays-in to another array! 
$mega_array = [$array_1, $array_2, $array_3];
	// try doing that in a few different ways.
	
// if you can loop thorugh arrays..can you loop through associative arrays? try it.
foreach ($zaiden as $z_boy) {
	echo $z_boy;
}
// practice using var_dump() and anything else we talked about. 
var_dump($zaiden);
var_dump($object_1);
var_dump($object_2);

