<book-card>
	<h2 class="title"><?=$book["title"]?></h2>
	<address class="author"><?=$book["author"]?></address>
	<p class="blurb"><?=$book["blurb"]?></p>
	<picture class="book-cover">
		<img src="<?=$book["book-cover"]?>">
	</picture>
	<a href="?page=detail&book=<?=$book['id']?>">Read Now!</a>
</book-card>