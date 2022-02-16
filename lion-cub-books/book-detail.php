<?php
	$books_json = file_get_contents("book-database.json");
	$records = json_decode($books_json,true);

	$current_book_id = $_GET["book"];

	function getBookById($books,$id) {
		foreach($books as $book) {
			if($book["id"] == $id) {
				return $book;
			}
		}
	} 

	// foreach ($records as $record) {
	// 	if($current_book_id == $record["id"]) {
			
	// 		$current_book = $record;
	// 	}
	// } 

	$book = getBookById($records,$current_book_id);
?>

<h1><?=$book['title']?></h1>

