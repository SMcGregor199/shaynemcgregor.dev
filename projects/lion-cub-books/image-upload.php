<?php
	$submitted = isset($_POST["submitted"]);

	if($submitted) {
		if( isset($_POST['artwork']) ) { 
			$artwork = $_POST['artwork']?>
			<picture>
				<img src="<?=$artwork?>">
			</picture>
<?php		} ?>

<?php	} ?>


<form method="POST">

	<div class="field">
		<label>image</label>
		<input type="file" name="artwork" accept=".jpg,.png,.jpeg">
	</div>

	<button type='submit' name="submitted">Submit</button>
	
</form>