

<?php
	$book = getBookById($_GET['book']);
	show($book);

	$genre_json = file_get_contents("genres.json");
	$genres = json_decode($genre_json,true);

	$database = getDatabase();

	$title = $book["title"];
	$author = $book['author'];
	$blurb = $book["blurb"];
	$id = $book['genre'];

	$submitted = isset($_POST["submitted"]);

	$bookCover = null;
	$hasTitle = false;
	$hasAuthor = false;
	$hasBlurb = false;
	$titleError = null;
	$authorError = null;
	$blurbError = null;
	$hasGenre = null;


	if($submitted) {

		if( isset($_POST['title']) ){
			$title = $_POST["title"];

			if( strlen($title) > 0 ) {
				$hasTitle = true;
			} else {
				$titleError = "please add the title";
			}
		}

		if($hasTitle) {
			$book = [
				
				'title' => $title,
			];

			$database[$id][$book] = $book;
			$json = json_encode($database);
			file_put_contents("addedBooks.json", $json);
		}
		
	}

?>


<?php include('form.php'); ?>


