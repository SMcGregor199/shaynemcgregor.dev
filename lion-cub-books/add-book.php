
<?php

	$submitted = isset($_POST["submitted"]);

	if($submitted) {

		if( isset($_POST['title']) ){
			$title = $_POST["title"];
		}
	
		if( isset($_POST['author']) ){
			$author = $_POST["author"];
		}

		if( isset($_POST['blurb']) ){
			$blurb = $_POST["blurb"];
		}

		if( isset($_POST['genre']) ){
			$genre = $_POST["genre"];
		}
		
	}
?>



<form method="POST">

	<div class="field">
		<label>Book Title</label>
		<input name="title" value="" placeholder="...">
	</div>

	<div class="field">
		<label>Author Name</label>
		<input name="author" value="" placeholder="...">
	</div>

	<div class="field">
		<label>Blurb</label>
		<input name="blurb" value="" placeholder="...">
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