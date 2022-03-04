<?php 
	

	$addedBooks_json = file_get_contents("addedBooks.json");
	$database = json_decode($addedBooks_json,true);

	$current_book_id = $_GET['book'];

	// get the book's name associated with the id
	// look through all books and see if it's Native Son
	foreach ($database as $id => $book) {
		if($current_book_id == $id) {
			unset($database[$current_book_id]);
			$json = json_encode($database);
			file_put_contents("addedBooks.json", $json);
			$deletedBook=$book;
		}
	}

	if(isset($deletedBook)){
		echo "you deleted " . $deletedBook['title'];
	}




?>