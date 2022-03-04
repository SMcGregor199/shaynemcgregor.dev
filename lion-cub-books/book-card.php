
<book-card>
	<div class="book-info test">
		<h2 class="title"><?=$book["title"]?></h2>
		<address class="author">by <?=$book["author"]?></address>
		<p class="blurb"><?=$book["blurb"]?></p>
		<nav class="book-card-nav">
			<a href="?page=detail&book=<?=$id?>">Read Now!</a>
			<a href="?page=update&book=<?=$id?>">Update</a> 
			<a href="?page=delete&book=<?id?>">Delete</a>
		</nav>
	</div>


	<picture class="book-cover">
		<img src="<?=$book["book-cover"]?>">
	</picture>
</book-card>
