<?php
// initialize quote variable 
	$quote = "";
// initialize author variable
	$author = "";
// initialize message variable 
	$message = "input a quote and the author"; 
// check for user input
	if( isset($_POST["submitted"]) ) {
		// If input is true... 
		if( isset($_POST["quote"]) ) {
			$quote = $_POST["quote"];
		}
		
		$author = isset($_POST['author']) ? $_POST['author'] : "";
		
// compile quote and author message
		$message = "$author says \"$quote\""; 
	}


// If no input create warning message 
// Display message 

?>






<form method="POST">
	<p class="message"><?=$message?></p>

	<div class="field">
		<label>Quote</label>
		<input  name="quote" value="<?=$quote?>" placeholder="...">
	</div>

	<div class="field">
		<label>Author</label>
		<input name="author" value="<?=$author?>" placeholder="...">
	</div>


	<button type='submit' name="submitted">Submit</button>
	
</form>

