<?php

	$message = "Please input a word";
	$string="";
	$exercise_02_submitted = isset($_POST["exercise-02-submitted"]);

	if( $exercise_02_submitted ) {
		$string = $_POST["word"];
		$trim_string = trim($string);
		$length = strlen($trim_string);
		

		if ($length > 0) {
			$message = "\"$string\" has $length characters"; 
		}
		 
	}	
?>






<form method="POST">
	<p class="message description-voice"><?=$message?></p>

	<div class="field">
		<label class="description-voice">Word</label>
		<input type="text" name="word" value="<?=$string?>" placeholder="...">
	</div>


	<button class="description-voice" type='submit' name="exercise-02-submitted">Submit</button>
	
</form>