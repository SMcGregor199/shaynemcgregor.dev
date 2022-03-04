
<?php
	$genre_json = file_get_contents("genres.json");
	$genres = json_decode($genre_json,true);

	$addedBooks_json = file_get_contents("addedBooks.json");
	$database = json_decode($addedBooks_json,true);

	$submitted = isset($_POST["submitted"]);

	$title = null;
	$author = null;
	$blurb = null;
	$genre = null;
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

			if( strlen($blurb) > 0 ) {
			//maybe change the string length on this? 
				$hasBlurb = true; 
			}  else {
				$blurbError = "please add the blurb";

			}
		}

		if( isset($_POST['genre']) ){
			$genre = intval($_POST["genre"]);
			$hasGenre = true;
		} 

		if ($hasTitle && $hasAuthor &&$hasBlurb &&$hasGenre) {
			$book = [
				"title" => $_POST["title"],
				"author" => $_POST["author"],
				"blurb" => $_POST["blurb"],
				"genre" => intval($_POST["genre"]),
				"book-cover" => "https://peprojects.dev/images/portrait.jpg",

			];
		
			$database[uniqid('a')] = $book;
			$json = json_encode($database);
			file_put_contents("addedBooks.json", $json);
			
		}	
	}

	
?>


<?php include('form.php');?>