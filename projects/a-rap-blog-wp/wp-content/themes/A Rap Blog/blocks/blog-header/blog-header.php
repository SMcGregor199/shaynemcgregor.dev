<?php 
$subTitle = get_field('sub-title');
?>
<div class="blog-header">
	<h3><?=$subTitle?></h3>
	<div class="date-and-attribution">
		<time datetime="#"><?=get_the_date("F j, Y");?></time><p>by<a href="#"><?php the_author(); ?></a></p>
	</div>
</div>