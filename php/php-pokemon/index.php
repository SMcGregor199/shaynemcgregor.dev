<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<title>The Mighty Morphing PHP Rangers</title>
			<meta name="description" content="[[insert description]]">
			<meta property="og:image" content="images/default-meta.png">

			<link rel="stylesheet" href="css/style.css">

			<style>
				body {
					color: blue;
					font-size: 24px;
				}

				ol {
					list-style:  decimal;
					padding: 50px;
				}
			</style>
		</head>

		<body>

		<?php 
		 $pokemonData = file_get_contents("monsters.json");

		 $pokemon = json_decode($pokemonData, true);

		 

		?>
		
		<ol>
			<?php foreach($pokemon as $poke) { ?>
				<li><?=$poke['name']['english']?></li>
			 <?php } ?>
		</ol>
		

			
		</body>
	</html>