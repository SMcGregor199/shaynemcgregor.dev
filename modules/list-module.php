<list-card>
	<h2 class="section-heading-font"><?=$section['listTitle']?></h2>
	<ul class="paragraph-font">
	<?php foreach($section["goalItems"] as $goalItem){ ?>
		<li><?=$goalItem?></li>
	<?php } ?>
	</ul>
</list-card>