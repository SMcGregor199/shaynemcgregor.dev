<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>The Mighty Morphing PHP Rangers</title>
			<meta name="description" content="[[insert description]]">
			<meta property="og:image" content="images/default-meta.png">

			<link rel="stylesheet" href="css/style.css">
		</head>

		<body>

			<h1>The Mighty Morphing PHP Rangers</h1>

			<?php
				
				$Jason = [

					"name" => "Jason",
					"age" => 16,
					"ranger-color" => "red",
					"home-town" => "Angel Grove",
					"zord-name" => "Tyrannosaurus Dinozord",
					"can-morph" => true,
					"picture" => "'images/jason.jpg'"

				];

				$Kimberly = [

					"name" => "Kimberly",
					"age" => 16,
					"ranger-color" => "pink",
					"home-town" => "Angel Grove",
					"zord-name" => "Pterodactyl Dinozord",
					"can-morph" => true,
					"picture" => "'images/kimberly.jpg'"

				];

				$Zack = [

					"name" => "Zack",
					"age" => 16,
					"ranger-color" => "black",
					"home-town" => "Angel Grove",
					"zord-name" => "Mastodon Dinozord",
					"can-morph" => true,
					"picture" => "'images/zack.jpg'"

				];

				$Trini = [

					"name" => "Trini",
					"age" => 16,
					"ranger-color" => "yellow",
					"home-town" => "Angel Grove",
					"zord-name" => "Saber-Toothed Tiger Dinozord",
					"can-morph" => true,
					"picture" => "'images/trini.jpg'"

				];

				$Billy = [

					"name" => "Billy",
					"age" => 16,
					"ranger-color" => "blue",
					"home-town" => "Angel Grove",
					"zord-name" => "Triceratops Dinozord",
					"can-morph" => true,
					"picture" => "'images/billy.jpg'",

				];

				$angleGrove = [
					"under-attack" => true,
				];

				function morphingGrid($name, $age, $color, $homeTown, $zordName, $canMorph, $picture) {
					
					$ranger = [
						"name" => $name,
						"age" => $age,
						"ranger-color" => $color,
						"home-town" => $homeTown,
						"zord-name" => $zordName,
						"can-morph" => $canMorph,
						"picture" => $picture,

					];

					return $ranger; //this turns the function in to the object that it creates. 
				}

				$Tommy = morphingGrid("Tommy", 17, "green", "unknown", "Dragon Zord", true, "images/tommy.jpg");

				// echo $Tommy[name];

				// echo "<img src=" . $Tommy["picture"] . ">";



				$mmpRangers = [$Jason, $Kimberly, $Zack, $Trini, $Billy];

				foreach($mmpRangers as $mmpRanger) {
					echo "<picture class='ranger-image'>";
						echo "<img src=" . $mmpRanger["picture"] . ">";
					echo "</picture>";

					echo "<p>This ranger's name is " . $mmpRanger["name"] . "</p>";
					echo "<p>They are the " . $mmpRanger["ranger-color"] . " ranger</p>";
				

				}



				// if($angleGrove["under-attack"] && $Jason["can-morph"]) {
				// 	echo "<p> and Jason yelled 'it's Morphing Time' </p>";
				// } 
				
			
			?>

			<picture class="ranger-image">
				<img src="">
			</picture>
			

			
		</body>
	</html>