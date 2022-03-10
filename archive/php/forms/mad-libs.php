<link rel='stylesheet' href='stylesheet.css'>






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
	$submitted = isset($_POST["submitted"]);

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
	<p class="message"><?=$message?></p>

	<div class="field">
		<label>Verb</label>
		<input name="verb" value="<?=$verb?>" placeholder="...">
	</div>

	<div class="field">
		<label>Adjective</label>
		<input name="adjective" value="<?=$adjective?>" placeholder="...">
	</div>

	<div class="field">
		<label>Adverb</label>
		<input name="adverb" value="<?=$adverb?>" placeholder="...">
	</div>

	<div class="field">
		<label>Noun</label>
		<input name="noun" value="<?=$noun?>" placeholder="...">
	</div>

	<button type='submit' name="submitted">Submit</button>
	
</form>