<?php
	$books_json = file_get_contents("addedBooks.json");
	$addedBooks = json_decode($books_json,true);

?>
<inner-column>
	<ul>
		<?php foreach($addedBooks as $id => $book) { ?>
			<li><?php include("book-card.php");?></li>
		<?php } ?>

	</ul>
</inner-column>