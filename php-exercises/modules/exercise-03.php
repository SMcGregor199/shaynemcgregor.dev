<?php
// Initialize variable for the verb
	$verb = "";
// Initialize variable for the noun
	$noun = "";
// Initialize variable for the adjective
	$adjective = "";
// Initialize variable for the adverb 
	$adverb = "";
//Initialize variable for the default message;
	$message = ""; 
// Initialize variable mad-lib 
	
// display mad-lib 
	$submitted = isset($_POST["exercise-03-submitted"]);

	if ($submitted) {
		$verb = empty($_POST["verb"]) ? "[verb]" : $_POST["verb"];
		$adjective = empty($_POST["adjective"]) ? "[adjective]" : $_POST["adjective"];
	
		$adverb = $_POST["adverb"];
		if (empty($adverb)) {
			$adverb = "[adverb]";
		}

		$noun = empty($_POST["noun"]) ? "[noun]" : $_POST["noun"];
		
		$message = "Do you $verb your $adjective $noun $adverb? That's hilarious!";
	} 
	else {
		$message = "Input different words, and we'll create a madlib";
	}

	
?>






<form method="POST">
	<p class="message description-voice"><?=$message?></p>

	<div class="field">
		<label class="description-voice">Verb</label>
		<input type="text" name="verb" value="<?=$verb?>" placeholder="...">
	</div>

	<div class="field">
		<label class="description-voice">Adjective</label>
		<input type="text" name="adjective" value="<?=$adjective?>" placeholder="...">
	</div>

	<div class="field">
		<label class="description-voice">Adverb</label>
		<input type="text" name="adverb" value="<?=$adverb?>" placeholder="...">
	</div>

	<div class="field">
		<label class="description-voice">Noun</label>
		<input type="text" name="noun" value="<?=$noun?>" placeholder="...">
	</div>

	<button class="description-voice" type='submit' name="exercise-03-submitted">Submit</button>
	
</form>