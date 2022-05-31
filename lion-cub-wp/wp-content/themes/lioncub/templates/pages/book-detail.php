<?php 
$genre_name = get_field('name');
?>
<h1>This is the detail page for <?=$genre_name?></h1>


<?php
	include( getFile('templates/components/book-card.php') );
?>


<?php
  // show genres
  $myGenres = get_terms( 'genre', array('hide_empty' => true) );
  foreach($myGenres as $genre) {
     echo 'test test';
  }
?>

