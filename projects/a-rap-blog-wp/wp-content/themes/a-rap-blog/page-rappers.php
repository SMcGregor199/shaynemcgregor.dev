<?php get_header(); ?>
<?php 
foreach ( get_categories() as $category ) :
     echo $category->name;
endforeach;
?>
<?php get_footer(); ?>

//random comment