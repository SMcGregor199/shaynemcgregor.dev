<?php
	$num1 = null;
	$num2 = null;
	$output = null;
	$submitted = isset($_POST["submitted"]);

	if($submitted){
		$num1 = isset($_POST['num1']) ? intval($_POST['num1']) : "[empty value]";

		$output = num1;
	}
?>

<a href="?"><h1>Simple Math</h1></a>
<p>A program that takes two values and displays the sum, the difference, the product, and the quotient with PHP</p>

<form method="POST">
	<p>Please enter two numerical values and we'll do some math</p>
	<div class="field">
		<label>Number 1</label>
		<input type="number" name="num1" value="<?=$num1?>" placeholder="...">
	</div>
	<div class="field">
		<label>Number 2</label>
		<input type="number" name="num2" value="<?=$num2?>" placeholder="...">
	</div>
	<button type="submit" name="submitted">Submit</button>
</form>

<output><?=$output?></output>