<?php include("modules/header.php");?>
<main>
	<h1 class="page-title title-font">Style Guide</h1>
	<inner-column>

	<section class="fonts">
		<inner-column>
			<h2 class="section-heading-font">Fonts</h2>
			<hr>
			<p class="paragraph-voice">Red Hat Display</p>
		</inner-column>
	</section>
	
	<section class="type-patterns">
		<inner-column>
			<h2 class="section-heading-font">Type Patterns</h2>
			<hr>
			<h1 class="title-font">ABCDEFGHIJKLMNOPQRSTUVWXYZ</h1>
			<h1 class="title-font">1234567890</h1>
			<h2 class="section-heading-font">ABCDEFGHIJKLMNOPQRSTUVWXYZ</h2>
			<h2 class="section-heading-font">1234567890</h2>
			<p class="paragraph-voice">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
			<p class="paragraph-voice">1234567890</p>
		</inner-column>
	</section>

	<section class="colors">
		<inner-column>
			<h2 class="section-heading-font">Colors</h2>
			<hr>

			<colors-to-row>
				<div class="black">
					<p class="paragraph-voice">#000000</p>
				</div>

				<div class="white">
					<p class="paragraph-voice">#FFFFFF</p>
				</div>
			</colors-to-row>
		</inner-column>
	</section>

	<section class="links">
		<inner-column>
			<h2 class="section-heading-font">Links</h2>
			<hr>
			<a href="#" class="link-font">Read</a>
		</inner-column>
	</section>

	<section class="section-site-header">
		<inner-column>
			<h2 class="section-heading-font">Site-Menu</h2>
			<hr>
			<?php include("modules/site-header.php"); ?>
		</inner-column>
	</section>
	
	<section class="section-heading">
		<inner-column>
			<h2 class="section-heading-font">Section-Heading</h2>			
			<hr>
			<?php include("modules/section-heading.php"); ?>
		</inner-column>
	</section>

	<section class="garden-card">
		<inner-column>
			<h2 class="section-heading-font">Garden Cards</h2>
			<hr>
			<?php include("modules/garden.php"); ?>
		</inner-column>
	</section>

	<section class="project-card">
		<inner-column>
			<h2 class="section-heading-font">Project Cards</h2>
			<hr>
			<projects-to-row>
				<?php include("modules/base-project-card.php"); ?>
			</projects-to-row>
		</inner-column>
	</section>

	<section class="blog-card">
		<inner-column>
			<h2 class="section-heading-font">Blog Cards</h2>
			<hr>
			<?php include("modules/base-blog-card.php"); ?>
		</inner-column>
	</section>


</main>