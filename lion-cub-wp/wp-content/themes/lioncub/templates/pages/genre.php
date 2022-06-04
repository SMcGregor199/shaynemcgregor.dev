<h2 class="section-heading-font">Genre Categories</h2>


<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		
		test
	<?php } // end while
} // end if
?>




