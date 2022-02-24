

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

			<nav class="site-nav" rel="toggle">
				<a href="?page=home" rel="toggle">Home</a>
				<a href="#about" rel="toggle">About</a>
				<a href="#writing" rel="toggle">Writing</a>
				<a href="#projects" rel="toggle">Projects</a>
				<a href="#playlist" rel="toggle">Playlist</a>		
			</nav>

			<button rel="toggle">☰</button>
			
		</inner-column>
	</header>

	<main>