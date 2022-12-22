<?php
$authors = get_field('author');
if( $authors ): ?>
    <ul>
    <?php foreach( $authors as $author ): 
        $permalink = get_permalink( $author->ID );
        $name = get_field( 'name', $author->ID );
        ?>
        <li>
                <?php echo $name; ?>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>


<?php
    $parameters = array(
      "post_type" => "book",
      "orderby" => "ID",
      "order" => "ASC",
    );

    $query = new WP_Query($parameters);
    

    while ($query->have_posts()) : $query->the_post(); ?>
    
    <?php
    echo get_field('title'); 
    ?>
        

<?php   endwhile;

    //reset what was done above.
    //Allows looping of more items below this.
    wp_reset_postdata();
?>


<?php
  // show genres
  $myGenres = get_terms( 'genre', array('hide_empty' => true) );
  foreach($myGenres as $genre) {
     echo 'test test';
  }
?>

    foreach ($terms as $term){
        showCode($term);
        the_permalink($term->term_id);

    }

<?php 
    $terms = get_terms( array(
    'taxonomy' => 'genre',
    'hide_empty' => false,
) );
?>



---

// The loop 



$parameters = array(
  "post_type" => "project-type",
  "post__not_in" => array(46),
  "orderby" => "ID",
  "order" => "ASC",
);

$query = new WP_Query($parameters);

while ($query->have_posts()) : $query->the_post();
  include(getFile("templates/components/project-section.php"));
endwhile;

//reset what was done above.
//Allows looping of more items below this.
wp_reset_postdata();



<!-- Shayne's Loop -->
<!-- post-type-name is where I would include the name of the post type -->
<?php 
    $parameters = [
        "post_type" => "post-type-name",
        "post__not_in" => array(46),
        "orderby" => "ID",
        "order" => "ASC",
    ];

    $query = new WP_Query($terms);
    if( $query->have_posts() ) {
        while ($query->have_posts()) : $query->the_post();

        endwhile;
        wp_reset_postdata();
    }
?>