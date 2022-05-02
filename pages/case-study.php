<?php 
	$case_studyPageJson = file_get_contents('data/case-study.json');
	$case_studyPage = json_decode($case_studyPageJson, true);
	$sections = $case_studyPage['sections'];
	
	$projects = getData('data/projects.json')
?>
<?php 
	$current_project_id = $_GET["projectID"]; 
?>
<?php foreach($projects as $projectID => $project) { ?>
	<?php if($current_project_id == $projectID) { ?>
<!-- Start of Current Case Study -->
		<?php foreach($sections as $section) { ?>
			<section id="<?=$section['slug']?>" class="<?=$section['slug']?>">
				<inner-column>
					<?php include('modules/' . $section['module']); ?>	
				</inner-column>
				<space></space>
			</section>
		<?php	} ?>

<!-- End of Current Case Study -->
	<?php } else { ?>
				<h1>This the Case Study of a different project</h1>
				<?php }?>

		<inner-column>
			<nav>
				<a href="?page=home" class="link-font" rel="toggle">Go Back to Home</a>
			</nav>
		</inner-column>

	
<?php } ?>





			

