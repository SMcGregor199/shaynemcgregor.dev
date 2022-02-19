
<?php

	$submitted = isset($_POST["submitted"]);

	if($submitted) {

		$genre = $_POST["genre"];

		echo $genre;
	}
?>



<form method="POST">

	<div class="field">
		<label>Book Title</label>
		<input type="text" name="title" value="" placeholder="...">
	</div>

	<div class="field">
		<label>Author Name</label>
		<input type="text" name="author" value="" placeholder="...">
	</div>

	<div class="field">
		<label>Blurb</label>
		<input type="text" name="blurb" value="" placeholder="...">
	</div>

	<div class="field">
		<label>Genre</label>
		<select name="genre">
			<option value="">--Please choose an option--</option>
			<option value="0">Biography & Memoir</option>
			<option value="1">Literary Fiction</option>
			<option value="2">Classics</option>
			<option value="3">Mystery</option>
		</select>
		<!-- <input type="text" name="genre" value="" placeholder="..."> -->
	</div>

	<button type='submit' name="submitted">Submit</button>

</form>