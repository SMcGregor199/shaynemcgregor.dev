<?php 
	
	

	$books=getDatabase();

	$current_book_id = $_GET['book'];

	// get the book's name associated with the id
	// look through all books and see if it's Native Son
	foreach ($books as $id => $book) {
		if($current_book_id == $id) {
			unset($books[$current_book_id]);
			saveDatabase($books);
			$deletedBook=$book;
		}
	}

	if(isset($deletedBook)){
		echo "you deleted " . $deletedBook['title'];
	}




?>