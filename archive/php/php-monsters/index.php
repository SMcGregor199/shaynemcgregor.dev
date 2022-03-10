<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>[[enter title]]</title>
			<meta name="description" content="[[insert description]]">
			<meta property="og:image" content="images/default-meta.png">

			<link rel="stylesheet" href="css/style.css">
		</head>

		<body>
			<?php 
				$array = [2, 3, 4, 5, "shayne", "train", "station"];

				echo $array[4];
				echo $array[5];

				echo "<p>I am currently on the " . $array[5] . " and it feels so good</p>";

				$claude = [
					"id" => 12345,
					"name" => "Claude",
					"favorite-food" => "burgers",
					"age" => "2",
					"is-adopted" => false,
				];

				$stacy = [
					"id" => 12545,
					"name" => "Stacy",
					"favorite-food" => "nachos",
					"age" => "4",
					"is-adopted" => false,
				];

				$jaRule = [
					"id" => 11335,
					"name" => "Ja Rule",
					"favorite-food" => "cotton candy",
					"age" => "7",
					"is-adopted" => false,
				];

				$monsters = [$claude, $stacy, $jaRule];

				foreach ($monsters as $monster) {
					echo $monster["favorite-food"];
				}

				$myArray = ["carrots", "radish", "brocoli", "cabbage", "potatos"];

				foreach ($myArray as $item){
					echo $item;
				}
			?>

			<p> my name is <?php echo $array[4]; ?></p>

			<p><?php echo $claude["name"];?>'s favorite food is <?php echo $claude["favorite-food"]?></p>
			<p id="12345"><?php echo $claude["name"];?> is <?=$claude["age"]?> years old</p>
		</body>
	</html>