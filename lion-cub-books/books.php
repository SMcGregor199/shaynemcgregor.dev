<?php
	$books_json = file_get_contents("book-database.json");
	$books = json_decode($books_json,true);
?>

<h1>Lion Cub Books List Page</h1>

<ul>
	<li>
		<?php foreach($books as $book) { ?>
			<?php include("book-card.php");?>
		<?php } ?>
	</li>
</ul>