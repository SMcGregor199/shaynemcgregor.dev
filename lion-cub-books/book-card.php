
<book-card>
	<div class="book-info">
		<h2 class="title"><?=$book["title"]?></h2>
		<address class="author">by <?=$book["author"]?></address>
		<p class="blurb"><?=$book["blurb"]?></p>
		<a href="?page=detail&book=<?=$book['id']?>">Read Now!</a>
	</div>


	<picture class="book-cover">
		<img src="<?=$book["book-cover"]?>">
	</picture>
</book-card>
