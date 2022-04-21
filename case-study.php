<link rel="stylesheet" href="style.css">

<?php include('modules/projects-database.php'); ?>
<?php $current_projectid = $_GET['projectID'];?>

<?php foreach($projects_database as $project) { ?>
	<?php if($current_projectid == $project['id']) { ?>

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
		?>
		<?php include('modules/graphic-diptych.php'); ?>
	</inner-column>
</section>
	
		

			<data-considerations>
				<h2 class="section-heading-font">Data Considerations</h2>

				<dc-section-one>
					<p class="paragraph-voice">One of the major takeaways from this project was learning the different ways JSON files can be written and utilized. I’m still learning how to articulate the differences in JSON file construction, but something that’s become clear to me is, on the one hand, you can create JSON files as an array that contains several objects. For example. An earlier iteration of the project used the array model to populate the “all books” section of the project’s website.</p>
					<picture>
						<img src="images/data-format-one.png">
					</picture>
				</dc-section-one>

				<dc-section-two>
					<p class="paragraph-voice">In its current iteration the JSON file uses an (object model) to organize its data </p>
					<picture>
						<img src="images/data-format-two.png">
					</picture>
				</dc-section-two>
				<p class="paragraph-voice">The second method of modeling the JSON file was useful because it allowed each object within the file to be associated with a specific “key” that I can later reference to create the CRUD functionality. Notice the use of square versus curly brackets to denote the difference between these two models of data.</p>
			</data-considerations>

			<form-considerations>
				<h2 class="section-heading-font">PHP Form Considerations</h2>
				<form-section-one>
					<p class="paragraph-voice"> In order to limit the amount of code I was dealing with, as well as limit my room for error, I wanted to use the same form throughout the website. The same form that appears when the user is adding a new book to the database is the same form that appears when the user is updating a book that already exists within the database. The major difference is the logic that is scoped and performed on each page.</p>
					<form-gallery>
						<picture class="case-study-image">
							<img src="images/form-add-book.png">
						</picture>
						<picture class="case-study-image">
							<img src="images/form-filled.png">
						</picture>
					</form-gallery>
				</form-section-one>

				<p class="paragraph-voice">The "add-book" page contains logic that takes in user input, creates an object called "added-book" and then adds that book to the site's database. The "update" page contains logic specific to the book selected for the update. It populates the form's fields with information pulled from the database to allow the user to see what information is already there before they update information related the book. In either case, validation is used  to ensure the fields are filled with valid information once the form is submitted. If not, the form returns an error specific to that field.</p>
			</form-considerations>

			<study-conclusion>
				<p class="paragraph-voice">Building lion-cub books was challenging, edifying, and, above all else, fun. Send me an email if you'd like to discuss this project more.</p>
				<picture>
					<img src="images/lion-cub-home.jpg">
				</picture>
			</study-conclusion>	



		<a href="?page=home" class="link-font" rel="toggle">Go Back to Home</a>


	</inner-column>
</section>

	<?php } ?>
<?php } ?>
	