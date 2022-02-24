<?php include("modules/header.php");?>

<?php	
		if ($page == "home") {
		include('home.php');
		} 

		if($page =="popcorn") {
			include('popcorn.php');
		}

		if ($page == "vr-headet") {
			include('vr-headset.php');
		}

		if($page == "form-exercises") {
			include('form-exercises.php');
		}

?>

		
<?php include("modules/footer.php");?>
