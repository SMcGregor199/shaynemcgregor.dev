<?php
	$noun = null;
	$verb = null;
	$adjective = null;
	$adverb = null;
	$output = null;
	$submitted = isset($_POST["submitted"]); 

	if($submitted){
		$noun = empty($_POST["noun"]) ? "[noun]" : $_POST["noun"];
		$verb = empty($_POST["verb"]) ? "[verb]" : $_POST["verb"];
		$adjective = empty($_POST["adjective"]) ? "[adjective]" : $_POST["adjective"];
		$adverb = $_POST["adverb"];
		if (empty($adverb)) {
			$adverb = "[adverb]";
		}
		$output = "Do you $verb your $adjective $noun $adverb? That's hilarious!";
	}else {
		$output = "Input different words, and we'll create a madlib";
	}
?>


<a href="?"><h1>Madlibs</h1></a>
<p>A program that takes a noun, a verb, an adjective, and an adverb, to construct a story w/ with PHP</p>

<form method="POST">
	<p><?=$output?></p>

	<div class="field">
		<label>Noun</label>
		<input name="noun" value="<?=$noun?>" placeholder="...">
	</div>

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

	<button type="submit" name="submitted">Submit</button>
</form>
