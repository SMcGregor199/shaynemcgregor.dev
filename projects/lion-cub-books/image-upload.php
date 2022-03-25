<?php
	$submitted = isset($_POST["submitted"]);

	if($submitted) { 

		if( isset($_POST['artwork']) ) {
			
			$artwork = "images/" . $_POST['artwork']; ?>
			<picture>
				<img src='<?=$artwork?>'>
			</picture>

<?php	} ?>

<?php	
  } 
?>


<form enctype="multipart/form-data" action="images.json" method="POST">

	<div class="field">
		<label>Upload an Image</label>
		<input type="file" name="artwork" accept=".jpg,.png,.jpeg">
	</div>

	<button type='submit' name="submitted">Submit</button>
	
</form>