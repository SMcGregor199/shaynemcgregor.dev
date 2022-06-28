
<?php
	//This is an associative array. It effectively works like an object. It can even be converted to JSON. 
	$garfield = [
		"name" => "Garfield",
		"color" => ["orange","black"],
		"hates" => "Mondays",
		"loves" => ["sleeping","lasagna"],
		"owner_name" => "Tom",
	];
?>



<?php 
 
//Name 
//actions
//alignment
//size
//partOfATeam
//level 

//This is a class 
class Character {
	public int $id = 1;
	public $name = "John Doe";
	public $allignment = "neutral";
	public $size = "regular";

	function __construct($name) {
		$this->name = $name;
	}
	function attack() {
		echo "attack!";
	}

	function yell($something) {
		echo $something;
	}
}
 class Boss extends Character {
 		public $size = "big";
 }

//This is how I create an object from the above class
$Tom = new Character("Tom"); 
echo $Tom->name;
$Tom->attack();
$Tom->yell("fhkdjashflkjasghlkdsa");

$Tom->age = 30;
echo $Tom->age;

echo $Tom->allignment;

$Ironman = new Boss('Tony Stark');
echo $Ironman->name;
echo $Ironman->size;





?>
