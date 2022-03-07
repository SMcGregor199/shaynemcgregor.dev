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

				$mmpRangers = ["Jason", "Kimberly", "Zack", "Trini", "Billy"];

				function Addition($num1, $num2) {
					$result = $num1 + $num2; 

					echo $result;
				}

				function Multiply($num1, $num2) {
					$result = $num1 * $num2; 

					echo $result;
				}

				Addition(5,5);

				Multiply(5,5);

				

				?>
			<p>This is HTML</p>

		</body>
	</html>