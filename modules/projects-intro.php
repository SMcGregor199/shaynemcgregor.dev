<projects-intro>
	<project-heading>
		<h1 class = "attention-voice">Featured Projects & Exercises</h1>

		<p class = "paragraph-voice">Here's a list of some projects that I've been working on. You can find a full list of the stuff I've been working on in Github. These projects highlight three distinct areas of web design and development that I like to focus on.</p>
	</project-heading>

	<project-grid>	
	<?php include('projects-database.php'); ?>

		<?php foreach ($projects_database as $project) { ?> 

		  <?php include('project-card.php'); ?>

	 <?php } ?> 
 	</project-grid>
 	
</projects-intro>