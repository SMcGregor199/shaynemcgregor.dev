<?php 
	$case_studyPage = getData('data/case-study.json');

	$projects = getData('data/projects.json');

	$current_project_id = $_GET["projectID"]; 

	foreach($projects as $projectID => $project) { 
 		if($current_project_id == $projectID) { 
			renderPage($case_studyPage);
		} else {
				echo "<h1>This the Case Study of a different project</h1>";
			 } 
	}
?>






			

