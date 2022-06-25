<?php
$pageTitle = isset($section['pageTitle']) ?  $section['pageTitle'] : "Page Title";
?>

<h1 class="page-title title-font"><?=$pageTitle?></h1>

<?php 
unset($pageTitle);
?>