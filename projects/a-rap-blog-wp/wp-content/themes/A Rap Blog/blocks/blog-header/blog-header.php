<?php 
$subTitle = get_field('sub-title');
$author = get_the_author();
?>
<div class="blogHeader">
	<h3><?=$subTitle?></h3>
	<div class="date-and-attribution">
		<time datetime="#"><?=get_the_date("F j, Y");?></time><p>by <a href=""><?=$author?></a></p>
	</div>
</div>