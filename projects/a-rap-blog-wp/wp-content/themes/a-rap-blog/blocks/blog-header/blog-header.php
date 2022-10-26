<?php 
$subTitle = get_field('sub-title');
?>
<div class="blog-header">
	<h3><?=$subTitle?></h3>
	<div class="date-and-attribution">
		<time datetime="#"><?=get_the_date("F j, Y");?></time><p>by<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></p>
	</div>
</div>
<div class="blog-body"> <!--  Start of blog-body class kind of a hack 	   -->
	
