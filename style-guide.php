<?php include("modules/header.php");?>
<main>
	<h1 class="page-title title-font">Style Guide</h1>
	<inner-column>

	<div class="fonts">
		<inner-column>
			<h2 class="section-heading-font">Fonts</h2>
			<hr>
			<p class="paragraph-voice">Red Hat Display</p>
		</inner-column>
	</div>
	
	<div class="type-patterns">
		<h2 class="section-heading-font">Type Patterns</h2>
		<hr>
		<inner-column>
			<h1 class="title-font">ABCDEFGHIJKLMNOPQRSTUVWXYZ</h1>
			<h1 class="title-font">1234567890</h1>
			<h2 class="section-heading-font">ABCDEFGHIJKLMNOPQRSTUVWXYZ</h2>
			<h2 class="section-heading-font">1234567890</h2>
			<p class="paragraph-voice">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
			<p class="paragraph-voice">1234567890</p>
		</inner-column>
	</div>

	<div class="colors">
		<h2 class="section-heading-font">Colors</h2>
		<hr>
		<inner-column>
			<div class="black">
				<p class="paragraph-voice">#000000</p>
			</div>

			<div class="white">
				<p class="paragraph-voice">#FFFFFF</p>
			</div>
		</inner-column>
	</div>

	<div class="links">
		<h2 class="section-heading-font">Links</h2>
		<hr>
		<inner-column>
			<a href="#" class="link-font">Read</a>
		</inner-column>
	</div>

	<div class="section-site-header">
		<h2 class="section-heading-font">Site-Menu</h2>
		<hr>
		<inner-column>
			<?php include("modules/site-header.php"); ?>
		</inner-column>
	</div>
	
	<div class="section-heading">
		<h2 class="section-heading-font">Section-Heading</h2>			
		<hr>
		<inner-column>
			<?php include("modules/section-heading.php"); ?>
		</inner-column>
	</div>

	<div class="gardens garden-card">
		<h2 class="section-heading-font">Garden Cards</h2>
		<hr>
		<inner-column>
			<?php include("modules/garden.php"); ?>
		</inner-column>
	</div>

	<section class="project-card">
		<inner-column>
			<h2 class="section-heading-font">Project Cards</h2>
			<hr>
			<projects-to-row>
				<?php include("modules/base-project-card.php"); ?>
			</projects-to-row>
		</inner-column>
	</section>
</main>