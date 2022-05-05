<?php 
	$listTitle = isset($section['listTitle']) ? $section['listTitle'] : "List Name";
	$goalItems = isset($section["goalItems"]) ? $section["goalItems"] : ["I will state the first item here","I will state the second item here","if there's a third item, I'll state it here. Should these be in a specific order?"];
?>

<list-card>
	<h2 class="section-heading-font"><?=$listTitle?></h2>
	<ul class="paragraph-font">
	<?php foreach($goalItems as $goalItem){ ?>
		<li><?=$goalItem?></li>
	<?php } ?>
	</ul>
</list-card>

<?php 
	unset($listTitle);
	unset($goalItems);
?>