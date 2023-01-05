<?php
$context = [];
$context['message'] = "Hello World from the home.php file";
$context['random'] = rand(1,9999);
Timber::render('home.twig', $context);

