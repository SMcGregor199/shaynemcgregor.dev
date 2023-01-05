	<div class="efp-content">
		<div class="list-containers">
			<?php $listTitle = "PHP" ?>
			<h1 class="title-voice"><?=$listTitle?></h1>
			<ul>
				<?php 
					foreach ($exerciseData as $exercise) { ?>
						<?php include('list-w-emoji-circles.php'); ?>
				<?php	} ?>
			</ul>
		</div>

		<?php unset($listTitle) ?>

		<div class="list-containers">
			<?php $listTitle = "JavaScript"?>
			<h1 class="title-voice"><?=$listTitle?></h1>
			<ul>
				<?php 
					foreach ($exerciseData as $exercise) { ?>
						<?php include('list-w-emoji-circles.php'); ?>
				<?php	} ?>
			</ul>
		</div>
	</div>
	<?php unset($listTitle) ?>