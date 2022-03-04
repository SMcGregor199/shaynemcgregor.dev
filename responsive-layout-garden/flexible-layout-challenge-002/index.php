<?php include("header.php");?>

<section class="welcome">
	<inner-column>

		<?php include("modules/visual-introduction.php"); ?>

	</inner-column>	
</section>

<!-- Section class names should be specific to website content -->
<section class="learn-more"> 
	<inner-column>
		<?php include("modules/call-to-action.php"); ?>
	</inner-column>
</section>

<section class="">
	<inner-column>
		<?php 
			include("modules/article-grid.php");
		?>

	</inner-column>
</section>

<section class="newsletter">
	<inner-column>
		<?php include("modules/call-to-action.php"); ?>
	</inner-column>
</section>

<?php include("modules/footer.php");?>