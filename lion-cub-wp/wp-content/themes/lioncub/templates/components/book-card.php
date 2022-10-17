<?php 
	$title = get_field('title');
	$blurb = get_field('blurb');
	$book_cover = get_field('book_cover')['url']; 
?>
	

<?php
	$authors = get_field('author');
		if( $authors ): 
?>
    <?php foreach( $authors as $author ): 
        		$permalink = get_permalink( $author->ID );
        		$name = get_field( 'name', $author->ID );
       ?>
       
   		<?php	 $author = $name   ?>       
        
    <?php endforeach; ?>
<?php endif; ?>



<book-card>
	<div class="book-info">
		<h2 class="title"><?=$title?></h2>
		<address class="author">by <?=$author?> </address>
		<p class="blurb"><?=$blurb?></p>
		<nav class="book-card-nav">
			<a class="link-font" href="#>">Read Now!</a>
			<a class="link-font" href="#>">Update</a> 
			<a class="link-font" href="#>">Delete</a>
		</nav>
	</div>

	<picture class="book-cover">
		<img src="<?=$book_cover?>">
	</picture>
</book-card>





