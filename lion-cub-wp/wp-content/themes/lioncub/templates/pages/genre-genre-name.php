<?php 
$genre_name = get_field('name');
?>

<h1>This is the <?=$genre_name?> books page</h1>


<?php 

  $parameters = array(
    "post_type" => "book",
    "orderby" => "ID",
    "order" => "ASC",
    "genre" => $genre_name
  );

  $query = new WP_Query($parameters);
 
  while ($query->have_posts()) : $query->the_post();
    include( getFile('templates/components/book-card.php') );
  endwhile;

  //reset what was done above.
  //Allows looping of more items below this.
  wp_reset_postdata();

?>




