
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

// included files 
	include('functions.php');
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
				<a href="?page=addbook">Add Book</a>
			</nav>
		</header>

		<main>
			<?php 
				if ($page == "home") {
					include('pages/home.php');
				}

				if($page == "addbook") {
					include('pages/add-book.php');
				}

				if($page == "genrelist") {
					include('pages/genre-list.php');
				}

				if($page == "genre") {
					include('pages/genre.php');
				}

				if ($page == "all-books" ) {
					include ('pages/all-books.php');
				}

				if($page == 'update') {
					include('pages/update.php');
				}

				if($page == "delete") {
					include('pages/delete.php');
				}
				if ($page == "detail" ) {
					include('pages/book-detail.php');
				}
			?>
		</main>

		


	</body>
</html>
