<?php
	$books_json = file_get_contents("book-database.json");
	$books = json_decode($books_json,true);

	$current_genre_id = $_GET["genreID"];
?>
<inner-column>
	<ul>
<?php	foreach($books as $book) { ?>

<?php	if($current_genre_id == $book["genre"]) { ?>

		<li><?php include("book-card.php");?></li>
		
	<?php	} ?>
<?php } ?>
	</ul>
</inner-column>