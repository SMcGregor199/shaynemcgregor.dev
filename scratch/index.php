<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shayne's practice document</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<header>
		<?php
			$data = file_get_contents("https://pokeapi.co/api/v2/pokemon/pikachu");
			$pokeData = json_decode($data, true);

			print_r($pokeData);
		?>
	</header>

	<main>
		<div class="output">
			
		</div>
	</main>

	<footer>
		<script>
				fetch("https://pokeapi.co/api/v2/pokemon/pikachu")
				.then((response) => response.json())
  				.then((json) => console.log(json));
		</script>
	</footer>
</body>



</html>