<form method="POST">

	<div class="field">
		<label>Book Title</label>
		<input name="title" value="<?=$title?>" placeholder="...">
		<?php if($titleError) {
			echo $titleError;
		} ?>
	</div>

	<div class="field">
		<label>Author Name</label>
		<input name="author" value="<?=$author?>" placeholder="...">
		<?php if($authorError) {
			echo $authorError;
		} ?>
	</div>

	<div class="field">
		<label>Blurb</label>
		<textarea name="blurb" value="<?=$blurb?>" placeholder="..."></textarea>
		<?php if($blurbError) {
			echo $blurbError;
		} ?>
	</div>

	<div class="field">
		<label>Genre</label>
		<select name="genre">
			<option disabled>--Please choose an option--</option>
			<?php foreach ($genres as $id => $genre) { ?>
				<option value="<?=$id?>"><?=$genre['name']?></option>
			<?php } ?>
		</select>
	</div> 

	<button type='submit' name="submitted">Submit</button>

</form>