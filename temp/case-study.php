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
						<img src="https://peprojects.dev/images/portrait.jpg">
					</picture>
				</article>

				<article>
					<picture class="screenshot">
						<img src="https://peprojects.dev/images/portrait.jpg">
					</picture>

					<p class="intro-voice"><?=$project['process']?></p>
				</article>
				
			</case-study>

			<a href="?page=home" class="intro-voice" rel="toggle">Go Back to Home</a>

	<?php	} ?>
		
<?php } ?>
	</inner-column>
</section>