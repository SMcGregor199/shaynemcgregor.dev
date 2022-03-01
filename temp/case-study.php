<link rel="stylesheet" href="style.css">
<?php include('modules/projects-database.php'); ?>
<?php $current_projectid = $_GET['projectID'];?>
<section class="case-study">
	<inner-column>
	<?php foreach($projects_database as $project) { ?>

		<?php if($current_projectid == $project['id']){ ?>
			<case-study>
				<h1 class="attention-voice"><?=$project['title']?></h1>
				<article>
					<p class="intro-voice"><?=$project['goal']?></p>
					<picture class="screenshot">
						<img src="<?=$project['rectangle-image-1']?>">
					</picture>
				</article>

				<article>
					<picture class="landscape">
						<img src="<?=$project['horizontal-image-1']?>">
					</picture>

					<picture class="landscape">
						<img src="<?=$project['horizontal-image-2']?>">
					</picture>
				</article>

				<article>
					<picture class="screenshot">
						<img src="<?=$project['rectangle-image-2']?>">
					</picture>

					<p class="intro-voice"><?=$project['process']?></p>
				</article>

				<?php if(isset($project['modules']) ) {
		
					foreach($project['modules'] as $module) {
						if( $module['name'] == "standard-text") {
							echo "text";
						}
						if($module['name'] == 'before-and-after') {
							echo "before and after";
						}
					}
				}

				?>
				
			</case-study>

			<a href="?page=home" class="intro-voice" rel="toggle">Go Back to Home</a>

	<?php	} ?>
		
<?php } ?>
	</inner-column>
</section>