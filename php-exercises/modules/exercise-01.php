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





<h1>Quotes and Authors</h1>

	<form method="POST">
		<p class="message intro-voice"><?=$message?></p>

		<div class="field">
			<label>Quote</label>
			<input  name="quote" value="<?=$quote?>" placeholder="...">
		</div>

		<div class="field">
			<label>Author</label>
			<input name="author" value="<?=$author?>" placeholder="...">
		</div>


		<button type='submit' name="exercise-01-submitted">Submit</button>
	
	</form>



