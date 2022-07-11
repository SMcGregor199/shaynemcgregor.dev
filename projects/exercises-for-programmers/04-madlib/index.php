<?php
	$noun = null;
	$verb = null;
	$adjective = null;
	$adverb = null;
	$output = null;
	$submitted = isset($_POST["submitted"]); 

	if($submitted){
		if( isset($_POST['noun']) ){
			$noun = $_POST['noun'];
		}
		if( isset($_POST['verb']) ){
			$verb = $_POST['verb'];
		}
		if( isset($_POST['adjective']) ){
			$adjective = $_POST['adjective'];
		}
		if( isset($_POST['adverb']) ){
			$adverb = $_POST['adverb'];
		}
	}
?>

<a href="?"><h1>Madlibs</h1></a>
<p>A program that takes a noun, a verb, an adjective, and an adverb, to construct a story w/ with PHP</p>

<form method="POST">
	<p>Please enter the name of an author and their quotation</p>

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

<output><?=$output?></output>