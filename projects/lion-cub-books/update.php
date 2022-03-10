

<?php

// figure out what page we're on
$current_book_id = $_GET['book'];
$books = getDatabase();
$book = getBookById($current_book_id);
// pulling in genres database
$genre_json = file_get_contents("genres.json");
$genres = json_decode($genre_json,true);

// show($book);

// see if there was a form submitted
$submitted = isset($_POST["submitted"]);
$titleError = "";
$authorError = "";
$blurbError = "";
// 

if ($submitted) {	
	
	$book = [
		"title" => $_POST['title'],
		"author" => $_POST['author'],
		"genre" => $_POST['genre'],
		"blurb" => $_POST['blurb']
	];
	$books[$current_book_id] = $book;
	saveDatabase($books);
}
// display what was updated 
show($book);
?>


<?php include('form.php'); ?>


