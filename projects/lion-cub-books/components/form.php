<form enctype="multipart/form-data"  method="POST">

	<div class="field">
		<label>Book Title</label>
		<input name="title" value="<?=$book['title']?>" placeholder="...">
		<?php if($titleError) {
			echo $titleError;
		} ?>
	</div>

	<div class="field">
		<label>Author Name</label>
		<input name="author" value="<?=$book['author']?>" placeholder="...">
		<?php if($authorError) {
			echo $authorError;
		} ?>
	</div>

	<div class="field">
		<label>Blurb</label>
		<textarea name="blurb" placeholder="..."><?=$book['blurb']?></textarea>
		<?php if($blurbError) {
			echo $blurbError;
		} ?>
	</div>

	<div class="field">
		<label>Upload the Book Cover</label>
		<input type="file" name="book-cover" value="<?=$book['book-cover']?>" accept=".jpg,.png,.jpeg">
		<?php if($book_coverError) {
			echo $book_coverError;
		}?>
	</div>

	<div class="field">
		<label>Genre</label>
		<select name="genre">
			<option disabled>--Please choose an option--</option>
			<?php foreach ($genres as $id => $genre) { ?>
				<option value="<?=$id?>" <?=isSelected($book['genre'],$id)?>><?=$genre['name']?></option>
			<?php } ?>
		</select>
	</div> 


	<button type='submit' name="submitted">Submit</button>

</form>