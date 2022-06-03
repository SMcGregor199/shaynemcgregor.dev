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