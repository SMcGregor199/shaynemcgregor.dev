<blog-intro>
	<blog-heading>
		<h1 class = "attention-voice">Writing</h1>

		<p class = "intro-voice">I mostly write on Substack. But you can find me on Codenewbie where I typically respost my writing. Here are some of the pieces I'm particularly proud of. and speak to what I've been learning about web development.</p>
</blog-heading>

	<blog-grid>	
		<?php include('blogs-database.php'); ?>

		<?php foreach ($database as $blog) { ?> 

		  <?php include('blog-card.php'); ?>

	    <?php } ?>
 	</blog-grid>
 	
</blog-intro>