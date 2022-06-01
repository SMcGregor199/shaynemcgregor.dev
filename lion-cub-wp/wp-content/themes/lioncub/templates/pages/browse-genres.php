<h2 class="section-heading-font">Genre Categories</h2>

<?php
$genres = get_terms(
                array('genre'),
                array(
                        'hide_empty'    => false,
                        'orderby'       => 'name',
                        'order'         => 'ASC',
                        'number'        => 6 //specify yours
                    )
            );

if( $genres ) :

    foreach( $genres as $term ) :

        //var_dump( $term );
        echo "<a href=''>$term->name</a>";

        $args = array(
                'post_type'             => 'book',
                'posts_per_page'        => 10, //specify yours
                'post_status'           => 'publish',
                'tax_query'             => array(
                                            array(
                                                'taxonomy' => 'category',
                                                'field'    => 'slug',
                                                'terms'    => $term->slug,
                                            ),
                                        ),
                'ignore_sticky_posts'   => true //caller_get_posts is deprecated since 3.1
            );
        $_posts = new WP_Query( $args );

        if( $_posts->have_posts() ) :
            while( $_posts->have_posts() ) : $_posts->the_post();

                echo '<h5>'. get_the_title() .'</h5>';

            endwhile;
        endif;
        wp_reset_postdata(); //important

    endforeach;

endif; ?>

<?php
	$parameters = array(
	  "post_type" => "book",
	  "orderby" => "ID",
	  "order" => "ASC",
	);

	$query = new WP_Query($parameters);
	

	while ($query->have_posts()) : $query->the_post(); ?>
	
		

<?php	endwhile;

	//reset what was done above.
	//Allows looping of more items below this.
	wp_reset_postdata();
?>



