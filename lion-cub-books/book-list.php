<?php
	$books_json = file_get_contents("book-database.json");
	$books = json_decode($books_json,true);

	$current_genre_id = $_GET["genreID"];
?>
<inner-column>
<?php	foreach($books as $book) { ?>

<?php	if($current_genre_id == $book["genre"]) { ?>

		<li><?php include("book-card.php");?></li>
		<!-- <h1><?=$book['title'];?></h1><p>by <?=$book['author'];?></p> -->
		
	<?php	} ?>
<?php } ?>
</inner-column>