<?php
	$books_json = file_get_contents("book-database.json");
	$books = json_decode($books_json,true);
?>
<inner-column>
	<ul>
		<?php foreach($books as $id => $book ) { ?>
			<li><?php include("book-card.php");?></li>
		<?php } ?>

	</ul>
</inner-column>