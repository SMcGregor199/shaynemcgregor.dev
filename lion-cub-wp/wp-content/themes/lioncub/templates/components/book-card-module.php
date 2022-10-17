<book-card>
	<div class="book-info">
		<h2 class="title"><?=$title?></h2>
		<a class="link-font" href="<?php echo $permalink?>"><address class="author"><?=$author?> </address></a>
		<p class="blurb"><?=$blurb?></p>
		<nav class="book-card-nav">
			<a class="link-font" href="#>">Update</a> 
			<a class="link-font" href="#>">Delete</a>
		</nav>
	</div>

	<picture class="book-cover">
		<img src="<?=$book_cover?>">
	</picture>
</book-card>