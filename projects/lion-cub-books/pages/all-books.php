<?php
	$books = getDatabase();

?>
<inner-column>
	<ul>
		<?php foreach($books as $id => $book) { ?>
			<li><?php include("book-card.php");?></li>
		<?php } ?>

	</ul>
</inner-column>