<?php
	$submitted = isset($_POST["submitted"]);
?>

<form method="POST">

	<div class="field">
		<label>image</label>
		<input type="file" name="artwork" accept=".jpg,.png,.jpeg">
	</div>

	<button type='submit' name="submitted">Submit</button>
	
</form>