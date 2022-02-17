<?php
	$books_json = file_get_contents("book-database.json");
	$books = json_decode($books_json,true);

	$current_genre_id = $_GET["genreID"];
?>

<?php	foreach($books as $book) { ?>

<?php	if($current_genre_id == $book["genre"]) { ?>
		<h1><?=$book['title'];?></h1><p>by <?=$book['author'];?></p>
		
	<?php	} ?>
<?php } ?>
