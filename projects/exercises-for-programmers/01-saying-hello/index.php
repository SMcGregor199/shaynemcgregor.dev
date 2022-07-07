<?php 
	//initalize any variables and functions
	$firstName = null;
	$submitted = isset($_POST["submitted"]);
	
	function createMessage($inputGiven, $input) {
		if($inputGiven) {
			return "Hello $input. It's nice to meet you!";
		}	
	}

	// handle user input 
	if($submitted) {
		if( isset($_POST['first-name']) && !empty($_POST['first-name']) ) {
				$firstName = $_POST['first-name'];
		} 
	}
?>
<!-- Display Output -->
<a href="?"><h1>Saying Hello</h1></a>
<p>A program that takes an input and builds a greeting message with PHP</p>

<form method="POST">
	<div class="field">
		<p>Please enter your first name</p>
		<label>First Name</label>
		<input name="first-name" value="<?=$firstName?>" placeholder="..." required>
	</div>

	<button type="submit" name="submitted">Submit</button>
</form>

<output><?=createMessage($submitted,$firstName)?></output>

