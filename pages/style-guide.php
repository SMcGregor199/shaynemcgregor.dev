	<h1 class="page-title title-font">Style Guide</h1>

	<section class="fonts">
		<inner-column>
			<h2 class="section-heading-font">Fonts</h2>
			<hr>
			<p class="paragraph-font">Red Hat Display</p>
		</inner-column>
	</section>
	
	<section class="type-patterns-zone">
		<inner-column>
			<h2 class="section-heading-font">Type Patterns</h2>
			<hr>
			<h1 class="title-font">ABCDEFGHIJKLMNOPQRSTUVWXYZ</h1>
			<h1 class="title-font">1234567890</h1>
			<h2 class="section-heading-font">ABCDEFGHIJKLMNOPQRSTUVWXYZ</h2>
			<h2 class="section-heading-font">1234567890</h2>
			<p class="paragraph-font">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
			<p class="paragraph-font">1234567890</p>
		</inner-column>
	</section>

	<section class="colors-zone">
		<inner-column>
			<h2 class="section-heading-font">Colors</h2>
			<hr>

			<colors-to-row>
				<div class="black">
					<p class="paragraph-font">#000000</p>
				</div>

				<div class="white">
					<p class="paragraph-font">#FFFFFF</p>
				</div>
			</colors-to-row>
		</inner-column>
	</section>

	<section class="links-zone">
		<inner-column>
			<h2 class="section-heading-font">Links</h2>
			<hr>
			<a href="#" class="link-font">Read</a>
		</inner-column>
	</section>

	<section class="section-home-header-zone">
		<inner-column>
			<h2 class="section-heading-font">Site-Menu</h2>
			<hr>
			<?php include("modules/general-site-header.php"); ?>
		</inner-column>
	</section>
	
	<section class="section-heading-zone">
		<inner-column>
			<h2 class="section-heading-font">Section-Heading</h2>			
			<hr>
			<?php 
				$title = "Heading level 2";
				$content = "This is some paragraph text that describes and contextualizes the content below it. Each section, representing a different aspect of the work I've done will prove important for site visitor's to get to know who I am.";
			?>
			<?php include("modules/section-heading.php"); ?>
		</inner-column>
	</section>

	<section class="article-zone">
		<inner-column>
			<h2 class="section-heading-font">Article</h2>
			<hr>
			<?php 
				$title = "Article Title";
				$contents = ["When I listen to another worker tell me that his factory has shut down, I remember all those men and women on the South Side of Chicago who I stood by and fought for two decades ago after the local steel plant closed. So I have known Islam on three continents before coming to the region where it was first revealed. There is no straight line to realize this promise.","The Internet and television can bring knowledge and information, but also offensive sexuality and mindless violence. The issues that I have described will not be easy to address. It's been several months now since I announced I was running for president. And we should close Guantanamo Bay and stop tolerating the torture of our enemies."];
				$link = "#";
				$linkText = "Link";
			?>
			<?php include("modules/article.php"); ?>
		</inner-column>
	</section>

	<section class="garden-card-zone">
		<inner-column>
			<h2 class="section-heading-font">Garden Cards</h2>
			<hr>
			<?php
			$defaultGarden = [
				'title' => 'Heading Level 3',
				'content' => "This is a paragraph text that gives a brief overview of its content. It'll be really exciting content so I hope you check it out.",
				'link' => '#',
				'linkText' => 'Click Here',
			];
				$gardens = [$defaultGarden,];
			?>
			<?php include("modules/garden-gallery.php"); ?>
		</inner-column>
	</section>

	<section class="project-card-zone">
		<inner-column>
			<h2 class="section-heading-font">Project Cards</h2>
			<hr>
			<?php 
				$defaultProject = [
					"title" => 'Heading Level 3',
					'image' => 'images/default.jpeg',
					'content' => "This is Paragraph text that gives a brief description of the project. With each description I try my best to make clear the project's primary goal.",
					"link" => "#",
					"linkText" => "Case Study"
				];
				$projects = [$defaultProject];
			?>
			<?php include("modules/project-gallery.php"); ?>
			
		</inner-column>
	</section>

	<section class="blog-card-zone">
		<inner-column>
			<h2 class="section-heading-font">Blog Cards</h2>
			<hr>
			<?php 
				$defaultBlog = [
					'title' => "Heading Level 3",
					'content' => "A Catchy sentence to earn your attention",
					'link' => "#",
					'linkTarget' => "default",
					'linkText' => "Read",
				];
				$blogs = [$defaultBlog];

			?>
			<?php include("modules/blog-gallery.php"); ?>
		</inner-column>
	</section>

	<section class="goals-card-zone">
		<inner-column>
			<h2 class="section-heading-font">Goal Cards</h2>
			<hr>
			<?php 
				$priorityLevel = "Priority Level";
				$goals = ["I will state my goal here","I will state my second goal here","if there's a third goal, I'll state it here. Should these be in a specific order?"];
			?>
			<?php include("modules/goals-module.php"); ?>
		</inner-column>
	</section>

	<section class="graphic-diptych-zone">
		<inner-column>
		<h2 class="section-heading-font">Section Heading W/ Graphic</h2>
		<hr>
		<?php 
			$title = "Heading Level 2";
			$content = "This is some paragraph text that describes and contextualizes the content next and succeeding it. This module will usually be used at the beginning of case studies, and will be used to give an overview of the project.";
			$linkPath = "images/default.jpeg";
			
		?>
		<?php include("modules/graphic-diptych.php"); ?>
		</inner-column>
	</section>

	<section class="bridge-post-zone">
		<inner-column>
			<h2 class="section-heading-font">Bridge Post</h2>
			<hr>
			<?php
				$images = ["images/default.jpeg","images/svgs/lion.svg"];
				$baseContent = "This is some paragraph text that describes and contextualizes the content next and succeeding it. This module will usually be used at the beginning of case studies, and will be used to give an overview of the project.";
				$horizontalImages = false;
			 ?>
			<?php include('modules/bridge-post.php'); ?>
		</inner-column>
	</section>

