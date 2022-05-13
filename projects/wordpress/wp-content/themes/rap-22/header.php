<!doctype html> 
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo wp_get_document_title(); ?></title>
		<meta name="description" content="Rap Hall of Fame">
		<meta property="og:image" content="">
		<?php wp_head(); ?>
	</head>

	<body>

		<header class='site-header'>
		<inner-column>
			<?php include('templates/components/site-menu.php'); ?>
			<h1>A Rap Blog</h1>
			<h2>“All the good writing about rap is right here”</h2>
		</inner-column>
		</header>

		<main>