<?php
	$num1 = null;
	$num2 = null;
	$output = null;
	$submitted = isset($_POST["submitted"]);

	if($submitted){
		if(isset($_POST["num1"]) ) {
 			$num1 = $_POST["num1"];
 			$intNum1 = floatval($num1);
 		}

 		if(isset($_POST["num2"]) ) {
 			$num2 = $_POST["num2"];
 			$intNum2 = floatval($num2);
 		}

 		$sum = $intNum1 + $intNum2;
 		$difference = $intNum1 - $intNum2;
 		$product = $intNum1 * $intNum2;
 		$quotient = $intNum1 / $intNum2;

		$output = "<li>The sum of $intNum1 and $intNum2 is $sum</li>
				 		<li>The difference of $intNum1 and $intNum2 is $difference</li>
				 		<li>The product of $intNum1 and $intNum2 is $product</li>
				 		<li>The quotient of $intNum1 and $intNum2 is $quotient</li>"; 
	}
?>

<a href="?"><h1>Simple Math</h1></a>
<p>A program that takes two values and displays the sum, the difference, the product, and the quotient with PHP</p>

<form method="POST">
	<p>Please enter two numerical values and we'll do some math</p>
	<div class="field">
		<label>Number 1</label>
		<input type="number" name="num1" value="<?=$num1?>" placeholder="..." min=0>
	</div>
	<div class="field">
		<label>Number 2</label>
		<input type="number" name="num2" value="<?=$num2?>" placeholder="..." min=0>
	</div>
	<button type="submit" name="submitted">Submit</button>
</form>

<output><?=$output?></output>


