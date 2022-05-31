<h2 class="section-heading-font"><?=$navTitle?></h2>
<nav class="nav-list">
	<ul class="link-font">
	<?php foreach($navItems as $navItem) { ?>
		<li><a href="<?=$navItem['navLink']?>"><?=$navItem['navText']?></a></li>
	<?php } ?>
	</ul>
</nav>