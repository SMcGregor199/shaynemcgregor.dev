
<?php
// Pulling in the database
	$genres = getGenreDatabase();
	$books = getDatabase();

	
	// setting the initial variables within the form to zero to avoid errors
	$book['title'] = '';
	$book['author'] = '';
	$book['blurb'] = '';
	$book['genre'] = null;
	$title = null;
	$author = null;
	$blurb = null;
	$genre = null;
	$bookCover = null;

	//we want these variables to only be true after a certain condition 
	$hasTitle = false;
	$hasAuthor = false;
	$hasBlurb = false;
	// $hasGenre does not exist because the select element will always have a value

	//settinng these to null at the top of the program will avoid errors within the form
	$titleError = null;
	$authorError = null;
	$blurbError = null;
	$hasGenre = null;

	$submitted = isset($_POST["submitted"]);

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

			if( trim($_POST['blurb']) == "" ) {
			//maybe change the string length on this? 
				$blurbError = "please add the blurb";
			}  else {
				$hasBlurb = true;
				
			}
		}

		if( isset($_POST['genre']) ){
			$genre = intval($_POST["genre"]);
			$hasGenre = true;
		} 

		if ($hasTitle && $hasAuthor &&$hasBlurb &&$hasGenre) {
			$book = [
				"title" => $title,
				"author" => $author,
				"blurb" => $blurb,
				"genre" => $genre,
				"book-cover" => "https://peprojects.dev/images/portrait.jpg",
			];
		
			$books[uniqid('a')] = $book;
			saveDatabase($books);
			
		}	

	}

	
?>


<?php include('form.php');?>