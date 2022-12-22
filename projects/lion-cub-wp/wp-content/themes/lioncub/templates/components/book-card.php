<?php 
	$user = wp_get_current_user();
	$allowed_roles = ['editor', 'administrator'];
	$title = get_field('title');
	$blurb = get_field('blurb');
	$book_cover = get_field('book_cover')['url']; 
?>
	

<?php
	$authors = get_field('author');
		if( $authors ): 

   foreach( $authors as $author ): 
      $permalink = get_permalink( $author->ID );
      $name = get_field( 'name', $author->ID );
      $author = $name    ?>     
        
    <?php endforeach; ?>
<?php endif; ?>



<book-card>
	<div class="book-info">
		<h2 class="title"><?=$title?></h2>
		<a class="link-font" href="<?php echo $permalink?>"><address class="author"><?=$author?> </address></a>
		<p class="blurb"><?=$blurb?></p>
		<?php if ( array_intersect( $allowed_roles, $user->roles ) ) { ?>
			<nav class="book-card-nav">
				<?=edit_post_link("Update","","",null,"link-font")?>
			</nav>
		<?php } ?>
	</div>

	<picture class="book-cover">
		<img src="<?=$book_cover?>">
	</picture>
</book-card>





