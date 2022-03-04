<?php 

$book = getBookById($_GET['book']);
show($book);

$title = $book['title'];

include('form.php');
?>

