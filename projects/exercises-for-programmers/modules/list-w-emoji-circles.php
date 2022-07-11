<?php $listTitle = $list["language-name"]; 

?>

<div class="list-containers">
	<h1><?=$listTitle?></h1>
	<ul>
		<?php foreach($list["exercise-names"] as $exerciseName => $status) { ?>
			<li <?php if($status == "Completed"){?>class="completed"<?php } ?> ><a href="?"><?=$exerciseName?></a></li>
		<?php } ?>
	</ul>		
</div>


