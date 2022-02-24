

<!doctype html> 
<?php 
	/* router */
	$page = null;
	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
?>
<html lang="en">

<?php include("head.php");?>

<body>
	<header class ="site-header">
		<inner-column>

			<nav class="site-nav">
				
				<a class="intro-voice" href="?page=home">Home</a>
				<a class="intro-voice" rel="about" href="#about">About</a>
				<a class="intro-voice" rel="writing" href="#writing">Writing</a>
				<a class="intro-voice" rel="projects" href="#projects">Projects</a>
				<a class="intro-voice" rel="playlist" href="#playlist">Playlist</a>		
			</nav>
			<button rel="toggle">☰</button>
		</inner-column>
	</header>

	<main>