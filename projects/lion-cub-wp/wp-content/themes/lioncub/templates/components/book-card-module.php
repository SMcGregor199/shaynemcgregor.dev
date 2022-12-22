<?php 
	$user = wp_get_current_user();
	$allowed_roles = ['editor', 'administrator'];
?>

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