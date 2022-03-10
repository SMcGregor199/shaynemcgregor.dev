<?php 

	function show($things) {
		echo "<code class='show-code'>";
		echo '<pre>';
		print_r($things);
		echo '</pre>';
		echo '</code>';
	
	} 

	function getDatabase() {
		$addedBooks_json = file_get_contents("addedBooks.json");
		return json_decode($addedBooks_json,true);
	}

	function getBookById($id) {
		$books = getDatabase();
		
		foreach ($books as $bookId => $bookData) {
			if($bookId == $id) {
				return $bookData;
			}
		}
	}

	function getGenreDatabase() {
			$genre_json = file_get_contents("genres.json");
			return json_decode($genre_json,true);
	}

	function saveDatabase($database) {
			$json = json_encode($database);
			file_put_contents("addedBooks.json", $json);
		}	
	function isSelected($book_genre,$genre_id) {
		if ($book_genre == $genre_id) {
			return "selected";
		}
		// get the genre value of the current book 
		// check the genre value book against current genre ids
		// if there is a match within the loop then return the string selected
	}
?>