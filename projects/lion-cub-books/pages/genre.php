<?php
	$books = getDatabase();

	$current_genre_id = $_GET["genreID"];
?>
<inner-column>
	<ul>
<?php	foreach($books as $id => $book) { ?>

<?php	if($current_genre_id == $book["genre"]) { ?>

		<li><?php include("book-card.php");?></li>
		
	<?php	} ?>
<?php } ?>
	</ul>
</inner-column>