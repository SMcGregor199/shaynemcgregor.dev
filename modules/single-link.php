<?php 
  $link = isset($section['moduleLink']) ? $section['moduleLink'] : "#";
  $linkText = isset($section['moduleLinkText']) ? $section['moduleLinkText'] : "Link";
 ?>

<nav>
	<a href="<?=$link?>" class="link-font" rel="toggle"><?=$linkText?></a>
</nav>

<?php 
	unset($link,$linkText);
?>