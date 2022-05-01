<?php 
function getData($path){
	if(file_exists($path) ) {
		$json = file_get_contents($path);
		return json_decode($json,true);
	}

}
$blogsJson = file_get_contents('data/blogs.json');
json_decode($blogsJson, true);
?>