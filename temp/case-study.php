<link rel="stylesheet" href="style.css">

<?php include('modules/projects-database.php'); ?>

<?php $current_projectid = $_GET['projectID'];?>

<section class="case-study">
	<inner-column>
	<?php foreach($projects_database as $project) { ?>

		<?php if($current_projectid == $project['id']){ ?>
			<case-study>
				<heading>

					<h1 class="attention-voice"><?=$project['title']?></h1>
					<p class="intro-voice"><?=$project['goal']?></p>

				</heading>

				<article>
					
					<p class="intro-voice"><?=$project['process']?></p>

					<picture class="screenshot pic-1">
						<img src="<?=$project['pic-1']?>">
					</picture>

					<picture class="screenshot pic-2">
						<img src="<?=$project['pic-2']?>">
					</picture>

					<picture class="screenshot pic-3">
						<img src="<?=$project['pic-3']?>">
					</picture>
				
				</article>

<!-- 				<?php if(isset($project['modules']) ) {
		
					foreach($project['modules'] as $module) {
						if( $module['name'] == "standard-text") {
							echo "text";
						}
						if($module['name'] == 'before-and-after') {
							echo "before and after";
						}
					}
				}

				?> -->
				
			</case-study>

			<a href="?page=home" class="intro-voice" rel="toggle">Go Back to Home</a>

	<?php	} ?>
		
<?php } ?>
	</inner-column>
</section>