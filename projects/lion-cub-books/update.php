

<?php

// figure out what page we're on
$current_book_id = $_GET['book'];
$books = getDatabase();
$book = getBookById($current_book_id);
// pulling in genres database
$genre_json = file_get_contents("genres.json");
$genres = json_decode($genre_json,true);


// see if there was a form submitted
$submitted = isset($_POST["submitted"]);

$hasTitle = false;
$hasAuthor = false;
$hasBlurb = false;

$titleError = "";
$authorError = "";
$blurbError = "";
// 

if ($submitted) {	

	if( isset($_POST['title']) ){
		$title = $_POST["title"];

		if( strlen($title) > 0 ) {
			$hasTitle = true;
			} else {
			$titleError = "please add the title";
			}
	}
	if( isset($_POST['author']) ){
		$author = $_POST["author"];
	
		if( strlen($author) > 0 ) {
			$hasAuthor = true;
		} else {
			$authorError = "please add the name of the author";
		}
	}

	if( isset($_POST['blurb']) ){
		$blurb = $_POST["blurb"];

		if( trim($blurb) == "" ) {
		//maybe change the string length on this? 
			$blurbError = "please add the blurb";
			}  else {
				$hasBlurb = true;
			}
		}

	if ($hasTitle && $hasAuthor && $hasBlurb) {
		$book = [
			"title" => $_POST['title'],
			"author" => $_POST['author'],
			"genre" => $_POST['genre'],
			"blurb" => trim($_POST['blurb']),
			"book-cover" => "https://peprojects.dev/images/portrait.jpg"
		];
	}

	$books[$current_book_id] = $book;
	saveDatabase($books);
}
// display what was updated 
show($book);
?>


<?php include('form.php'); ?>


