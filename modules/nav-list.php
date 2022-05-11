<?php 
	$navTitle = isset($section['navTitle']) ? $section['navTitle'] : "Navigation List Name";
	$Link1 = [
		"navLink" => "#",
		"navText" => "Link #1",
	];
	$Link2 = [
		"navLink" => "#",
		"navText" => "Link #2",
	];
	$Link3 = [
		"navLink" => "#",
		"navText" => "Link #3",
	];
	$navItems = isset($section["navItems"]) ? $section["navItems"] : [$Link1,$Link2,$Link3];
?>

<h2 class="section-heading-font"><?=$navTitle?></h2>
<nav>
	<ul class="link-font">
	<?php foreach($navItems as $navItem) { ?>
		<li><a href="<?=$navItem['navLink']?>"><?=$navItem['navText']?></a></li>
	<?php } ?>
	</ul>
</nav>

<?php 
	unset($navTitle);
	unset($navItems);
?>