<?php 
	$genre_name = get_field('name');
	$genre_link = get_permalink();
?>


<nav class="nav-list">
	<ul class="link-font">
		<li><a href="<?=$genre_link?>"><?=$genre_name?></a></li>
	</ul>
</nav>