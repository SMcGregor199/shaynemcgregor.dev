<?php
// initialize quote variable 
	$quote = "";
// initialize author variable
	$author = "";
// initialize message variable 
	$message = "input a quote and its author"; 
// check for user input
	$exercise_01_submitted = isset($_POST["exercise-01-submitted"]);

	if($exercise_01_submitted) {
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
		<p class="message description-voice"><?=$message?></p>

		<div class="field">
			<label class="description-voice">Quote</label>
			<input type="text"  name="quote" value="<?=$quote?>" placeholder="...">
		</div>

		<div class="field">
			<label class="description-voice">Author</label>
			<input type="text" name="author" value="<?=$author?>" placeholder="...">
		</div>


		<button class="description-voice" type='submit' name="exercise-01-submitted">Submit</button>
	
	</form>



