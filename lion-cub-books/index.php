
<!doctype html> 
	<!-- router -->
<?php
	/* router */
	$page = null;
	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
?>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Lion Cub Book Store</title>
		<meta name="description" content="A place to buy books for all your cubs">
		<meta property="og:image" content="">

		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<header>
			<nav class="site-nav">
				<a href="?page=home">Home</a>
				<a href="?page=genrelist">Browse Genres</a>
				<a href="?page=list">All Books</a>
			</nav>
			<?php include("add-book.php");?>
		</header>

		<main>
			<?php 
				if ($page == "home") {
					include('home.php');
				}

				if($page == "genrelist") {
					include('genre-list.php');
				}

				if($page == "genre") {
					include('book-list.php');
				}

				if ($page == "list" ) {
					include ('books.php');
				}
				if ($page == "detail" ) {
					include('book-detail.php');
				}
			?>
		</main>

		


	</body>
</html>
