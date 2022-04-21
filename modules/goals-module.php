<goals-card>
	<h2 class="section-heading-font"><?=$priorityLevel?></h2>
	<ul class="paragraph-voice">
	<?php foreach($goals as $goal) { ?>
		<li><?=$goal?></li>
	<?php } ?>
	</ul>
</goals-card>