<?php $user = wp_get_current_user(); ?>
<h1 class="title-font"> <?php the_field('welcome_heading') ?> </h1>

<section>
	<inner-column>
		<picture>
			<?php include(getFile('lion.php')); ?>
		</picture>
		
	</inner-column>
</section>

