<?php
// Pulling in the databases
	$books = getDatabase();
	$genres = getGenreDatabase();
	
// These values need to be set initially to avoid errors because they because within the code of the form. They exist because of what update.php will do with them. When the program runs, it doesn't actually use these variables.
	$book['title'] = '';
	$book['author'] = '';
	$book['blurb'] = '';
	$book['genre'] = null;


//This is for validation. If the the fields have no input, the program will return these messages. To avoid errors, because they exist within the form, they need to be initialized here.
	$titleError = null;
	$authorError = null;
	$blurbError = null;
// $genreError does not exist because the select element will always have a value

//This is for validation. We only want these variables to return true if the proper conditions are met after the form is submitted. This is just an extra precaution. Probably don't actually need this.
	$hasTitle = false;
	$hasAuthor = false;
	$hasBlurb = false;
	$hasGenre = false;



// A semantically easier way to check if the form is submitted.
	$submitted = isset($_POST["submitted"]);

// This is what runs when the form is submitted.
	if($submitted) {

		if( isset($_POST['title']) ){
			$title = trim($_POST["title"]);

			if( strlen($title) > 0 ) {
				$hasTitle = true;
			} else {
				$titleError = "please add the title";
			}
		}
	
		if( isset($_POST['author']) ){
			$author = trim($_POST["author"]);
			
			if( strlen($author) > 0 ) {
				$hasAuthor = true;
			} else {
				$authorError = "please add the name of the author";
			}
		}

		if( isset($_POST['blurb']) ){
			$blurb = trim($_POST["blurb"]);

			if( strlen($blurb) > 0 ) {
				$hasBlurb = true;
			//maybe change the string length on this?	
			} else {
				$blurbError = "please add the blurb";
			}
		}

		if( isset($_POST['genre']) ){
			$genre = intval($_POST["genre"]);
			$hasGenre = true;
		} 

		if ($hasTitle && $hasAuthor && $hasBlurb &&  $hasGenre) {
			$book = [
				"title" => $title,
				"author" => $author,
				"blurb" => $blurb,
				"genre" => $genre,
				"book-cover" => "https://peprojects.dev/images/portrait.jpg",
			];
		
			$books[uniqid('a')] = $book;
			saveDatabase($books);
			show($book);
			
		}	

	}
?>

<!-- The Form -->
<?php include('form.php');?>