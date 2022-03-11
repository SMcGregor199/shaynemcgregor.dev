<?php

	$books = getDatabase();

	$current_book_id = $_GET['book'];

	$current_book = getBookById($current_book_id);
	show($current_book);

// This could be it's own getGenresDatabase function
// The genre option in the form pulls from this database 
	$genre_json = file_get_contents("genres.json");
	$genres = json_decode($genre_json,true);


	$submitted = isset($_POST["submitted"]);

	// Initial values within the form 
	$title = $current_book["title"];
	$author = $current_book['author'];
	$blurb = $current_book["blurb"];
	$genre = $current_book['genre'];

	

	$bookCover = "https://peprojects.dev/images/portrait.jpg";
	$hasTitle = false;
	$hasAuthor = false;
	$hasBlurb = false;
	$hasGenre = false;
	$titleError = null;
	$authorError = null;
	$blurbError = null;


	


	if($submitted) {

		if( isset($_POST['title']) ){
			$title = $_POST["title"];

			if( strlen($title) > 0 ) {
				$hasTitle = true;
			} else {
				$titleError = "please add the title";
			}
		}

		// if( isset($_POST['author']) ){
		// 	$author = $_POST["author"];
			
		// 	if( strlen($author) > 0 ) {
		// 		$hasAuthor = true;
		// 	} else {
		// 		$authorError = "please add the name of the author";
		// 	}
		// }

		if( isset($_POST['blurb']) ){
			$blurb = $_POST["blurb"];

			if( strlen($blurb) > 0 ) {
			//maybe change the string length on this? 
				$hasBlurb = true; 
			}  else {
				$blurbError = "please add the blurb";
			}
		}

		// if( isset($_POST['genre']) ){
		// 	$genre = intval($_POST["genre"]);
		// 	$hasGenre = true;
		// } 

		if($hasTitle && $blurb) {
			
			$book = [
				
				'title' => $title,
				'author' => $author,
				'blurb' => $blurb,
				'genre' => $genre,
				'book-cover' => $bookCover,

			];

			$books = getDatabase();
			$books[$current_book_id] = $book;
			saveDatabase($books);
			$current_book = $book;
		}
		
	}



<form method="POST">

	<div class="field">
		<label>Book Title</label>
		<input name="title" value="<?=$title?>" placeholder="...">
		<?php if($titleError) {
			echo $titleError;
		} ?>
	</div>

	<div class="field">
		<label>Author Name</label>
		<input name="author" value="<?=$author?>" placeholder="...">
		<?php if($authorError) {
			echo $authorError;
		} ?>
	</div>

	<div class="field">
		<label>Blurb</label>
		<textarea name="blurb" placeholder="...">
			
			<?=$blurb?>
				
		</textarea>
		<?php if($blurbError) {
			echo $blurbError;
		} ?>
	</div>

	<div class="field">
		<label>Genre</label>
		<select name="genre">
			<option disabled>--Please choose an option--</option>
			<?php foreach ($genres as $id => $genre) { ?>
				<option value="<?=$id?>"><?=$genre['name']?></option>
			<?php } ?>
		</select>
	</div> 

	<button type='submit' name="submitted">Submit</button>

</form>

?>