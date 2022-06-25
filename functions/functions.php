<?php 
function getData($path){
	if( file_exists($path) ) {
		$json = file_get_contents($path);
		return json_decode($json,true);
	}

}
function renderPage($page){
	if(isset($page['sections']) ) {
		foreach($page['sections'] as $section) {
			include('modules/page-template.php');
		}
	}
}

function isStyleGuide() {
	if ( isset($_GET['page'])) {
		if ($_GET['page'] == 'style-guide'){
			return true;
		} else {
			return false;
		}
	}
}


function isCaseStudy() {
	if ( isset($_GET['page'])) {
		if ($_GET['page'] == 'case-study'){
			return true;
		} else {
			return false;
		}
	}
}

function getProjectPageById($id) {
	$path = 'data/projects.json';
	$projects = "";
	if ( file_exists($path) ) {
		$projects = getData($path);
	}
	foreach ($projects as $projectId => $project) {
		if ( $id == $projectId ) {
			renderPage(getData('data/case-study.json') );
		} else {
			echo "<h1>This the Case Study of a different project</h1>";
		}
	}
}

?>