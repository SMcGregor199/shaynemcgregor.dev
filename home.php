		<section id="home" class="welcome">
			<inner-column>
				<?php include("modules/introduction.php");?>
			</inner-column>
		</section>

		<section id="about" class="about">
			<inner-column>
				<?php 
				$title = "My Story";
				$contents = ["I am a web designer and  hold a Ph.D. in African American Studies and English from Yale University. Thinking about web design through the lens of race and literature, allows me to pursue questions related to user accessibility and legibility.","I want to find a company where I can continue to expand my skillset as a developer and designer. Because writing is such a big part of who I am, I also want to write 50 blog posts by the end of the year. Click below to learn more about my specific goals and stay up-to-date on my progress."];
				$linkurl = "../goals";
				$link = "Goals";
				?>
				<?php include("modules/article.php");?>
			</inner-column>
			<space></space>
		</section>
		
		<section id="writing" class="writing">
			<inner-column>
				<?php include("modules/blog-intro.php");?>
			</inner-column>
			<space></space>
		</section>
		
		<section id="projects" class="projects">
			<inner-column>
				<?php include("modules/projects-intro.php");?>
			</inner-column>
			<space></space>
		</section>

		<section id="gardens" class="gardens">
			<inner-column>
			<?php
			$phpGarden = [
				"title" => "PHP Garden",
				"content" => "PHP is a server-size scripting language that's important for stitching files together and creating forms that receive user input. Click below to see the cool forms I've been creating with PHP.",
				"link" => "#",
				"linkText" => "Click Here",
				];
			$layoutGarden = [
				"title" => "Layout Garden",
				"content" => "Positioning elements on a webpage is a critical part of making webpages readable. Click below to check out my cool responsive layout skills",
				"link" => "#",
				"linkText" => "Click Here",
			];

			$gardens = [$phpGarden, $layoutGarden];

			?>
			
			<?php	include("modules/garden-card.php"); ?>	 
			</inner-column>
			<space></space>
		</section>

		<section id="playlist" class="playlist">
			<inner-column>
				<?php include("modules/playlist-intro.php");?>
			</inner-column>
			<space></space>
		</section>


