<?php 
$submitted = isset($_POST["submitted"]);

	if($submitted) {
		$filepath = "images/" . $_FILES['artwork']['name'];

		if( move_uploaded_file($_FILES['artwork']['tmp_name'], $filepath) ) {
			echo "<picture>" ;
				echo "<img src='$filepath'>";
			echo "<picture>";
		}
	}
?>


<form enctype="multipart/form-data" method="POST">

	<div class="field">
		<label>Upload an Image</label>
		<input type="file" name="artwork" accept=".jpg,.png,.jpeg">
	</div>

	<button type='submit' name="submitted">Submit</button>
	
</form>