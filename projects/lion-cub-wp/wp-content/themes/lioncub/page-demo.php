<?php get_header();  ?>

<h1 class="title-font"> <?php the_field('welcome_heading') ?></h1>
<section>
	<inner-column>
<?php if( have_rows('values') ): ?>
    <?php while(have_rows('values') ): the_row(); ?>
        <?php if(get_row_layout() == 'block'): ?>
            <?php if( have_rows('value') ): ?>
                <?php while(have_rows('value')): the_row(); ?>

                    <?php 
                    the_sub_field('title'); 
                    the_sub_field('description'); 
                    ?>

                <?php endwhile; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
</inner-column>
</section>

<?php get_footer(); ?>