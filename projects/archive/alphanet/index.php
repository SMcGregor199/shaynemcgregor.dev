<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>Alpha Net Homepage</title>
			<meta name="description" content="[[insert description]]">
			<meta property="og:image" content="images/default-meta.png">

			<link rel="stylesheet" href="css/style.css">
		</head>

		<body>


			
			<?php 

				include("students.php");


				$students = [$shayne, $budi, $tara, $andrew, $joshua, $natasha, $jose, $saul, $wytonya, $sheriffDerek];

				echo "<h1 class='web-title'>The Alpha Net</h1>";

				echo "<div class='inner-column'>";

				foreach ($students as $student) {

				

					echo "<div class='profile'>";

					
						echo "<picture class='portrait'>"; 
							echo 	'<img src=' . $student["picture"] . '>';
						echo "</picture>";


				

						echo "<div class='profile-text'>";

							echo "<h1>" . $student['name'] . "</h1>";
							echo "<p>" . $student['blurb'] . "</p>";
							echo "<a href=' " . $student["personal-website"] . "'>" .$student["click-here-text"] . "</a>";

						echo "</div>";

					echo "</div>";
					
				}
				
				echo "</div>";
			 ?>
			
		
			

	
		</body>
	</html>