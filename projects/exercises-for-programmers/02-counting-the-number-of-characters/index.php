<?php 
	//initalize any variables and functions
	$input = null;
	$output = null;
	$submitted = isset($_POST["submitted"]);

	// handle user input 
	if($submitted) {

		if( isset($_POST['input']) ) {
			$input = trim($_POST['input']);
			$inputLength = strlen($input);
			$output = $input . " has " . $inputLength . " characters";
		}

		if( empty($_POST['input']) ) {
			$output = "Input box was empty. Please enter a string value and try again";
		}
	}
?>

<!-- Display -->
<a href="?"><h1>Counting the Number of Characters</h1></a>
<p>A program that takes an input and displays the number of characters it contains with PHP</p>

<form method="POST">
	<div class="field">
		<p>Please enter a string value</p>
		<label>User Input</label>
		<input type="string" name="input" value="<?=$input?>" placeholder="...">
	</div>

	<button type="submit" name="submitted">Submit</button>
</form>

<output><?=$output?></output>