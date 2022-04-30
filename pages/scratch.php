<section class="page-title">
			<inner-column>
				<?php 
					$title = "Lion-Cub Books";
					$content = "The goal was to create a fictional book-store website that is organized around the fundamentals of CRUD.";
				?>
				<?php include("modules/section-heading.php"); ?>
			</inner-column>
		</section>

		<section class="overview">
			<inner-column>
				<?php 
					$title = "Overview";
					$content = "What started as a site designed to allow me to further practice query strings and JSON file construction, ended up turning into a website in which the user can dynamically update the library database with books of their own. Furthermore, they can update any piece of information included in the book’s record as well as delete the book from the database entirely.";	
					$linkPath = "images/svgs/lion.svg";
				?>
				<?php include('modules/graphic-diptych.php'); ?>
			</inner-column>
		</section>

		<section class="data-considerations">
			<inner-column>
				<?php 
					$title = "Data Considerations";
					$contents = ["What started as a site designed to allow me to further practice query strings and JSON file construction, ended up turning into a website in which the user can dynamically update the library database with books of their own. Furthermore, they can update any piece of information included in the book’s record as well as delete the book from the database entirely.", "In its current iteration the JSON file uses an (object model) to organize its data. The second method of modeling the JSON file was useful because it allowed each object within the file to be associated with a specific “key” that I can later reference to create the CRUD functionality. Notice the use of square versus curly brackets to denote the difference between these two models of data."];	
					$images = ["images/data-format-one.png","images/data-format-two.png"];
					$horizontalImages = true;
				?>
				<?php include('modules/bridge-post.php'); ?>

			</inner-column>
		</section>

		<section class="php-form-considerations">
			<inner-column>
				<?php
					$title = "PHP Form Considerations";
					$contents = [" In order to limit the amount of code I was dealing with, as well as limit my room for error, I wanted to use the same form throughout the website. The same form that appears when the user is adding a new book to the database is the same form that appears when the user is updating a book that already exists within the database. The major difference is the logic that is scoped and performed on each page.", "The 'add-book' page contains logic that takes in user input, creates an object called 'added-book' and then adds that book to the site's database. The 'update' page contains logic specific to the book selected for the update. It populates the form's fields with information pulled from the database to allow the user to see what information is already there before they update information related the book. In either case, validation is used  to ensure the fields are filled with valid information once the form is submitted. If not, the form returns an error specific to that field."];
					$images = ["images/form-add-book.png","images/form-filled.png"]; 
					$horizontalImages = false;
				?>
				<?php include('modules/bridge-post.php'); ?>
			</inner-column>
		</section>

		<section class="conclusion">
			<inner-column>
				<?php 
					$title = "Conclusion";
					$content = "Building lion-cub books was challenging, edifying, and, above all else, fun. Send me an email if you'd like to discuss this project more.";
				?>
				<?php include('modules/section-heading.php'); ?>
			</inner-column>
		</section>








		<!-- break -->


<!-- Home page sections as of April 30th, 2022 -->



<section id="about" class="about">
	<inner-column>
		<?php 
		$title = "My Story";
		$contents = ["I am a web designer and  hold a Ph.D. in African American Studies and English from Yale University. Thinking about web design through the lens of race and literature, allows me to pursue questions related to user accessibility and legibility.","I want to find a company where I can continue to expand my skillset as a developer and designer. Because writing is such a big part of who I am, I also want to write 50 blog posts by the end of the year. Click below to learn more about my specific goals and stay up-to-date on my progress."];
		$link = "?page=goals";
		$linkText = "Goals";
		?>
		<?php include("modules/article.php");?>
	</inner-column>
	<space></space>
</section>


<section id="writing" class="writing">
	<inner-column>
		<?php 
			$title = "Writing";
			$content = "I mostly write on Substack. But you can find me on Codenewbie where I typically respost my writing. Here are some of the pieces I'm particularly proud of, and speak to what I've been learning about web development as well as my recent thinking on rap music.";
		?>
		<?php include("modules/section-heading.php"); ?>

		<?php $blogsJson = file_get_contents('data/blogs.json');
				$blogs = json_decode($blogsJson, true);
		 ?>
		<?php include("modules/blog-gallery.php") ?>
	</inner-column>
	<space></space>
</section>

<section id="projects" class="projects">
	<inner-column>
		<?php 
			$title = "Featured Projects & Exercises";
			$content = "Here's a list of some projects that I've been working on. You can find a full list of the stuff I've been working on in Github. These projects highlight three distinct areas of web design and development that I like to focus on.";
		?>
		<?php include("modules/section-heading.php"); ?>
		<?php 
			$projectsJson = file_get_contents("data/projects.json");
			$projects = json_decode($projectsJson, true);
		 ?>
		<?php include("modules/project-gallery.php"); ?>
	</inner-column>
	<space></space>
</section>