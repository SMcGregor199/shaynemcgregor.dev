
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

	function show($things) {
		echo "<code class='show-code'>";
		echo '<pre>';
		print_r($things);
		echo '</pre>';
		echo '</code>';
	
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
				<a href="?page=all-books">All Books</a>
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
					include('genre.php');
				}

				if ($page == "all-books" ) {
					include ('all-books.php');
				}

				if($page == 'update') {
					include('update.php');
				}

				if($page == "delete") {
					include('delete.php');
				}
				if ($page == "detail" ) {
					include('book-detail.php');
				}
			?>
		</main>

		


	</body>
</html>
