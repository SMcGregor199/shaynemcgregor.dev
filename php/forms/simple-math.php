<link rel='stylesheet' href='stylesheet.css'>

 <?php
// Initialize vairable number 1 
 	$num_1 = "";
// Initialize vairable number 2
 	$num_2 = "";
// Initialize variable message 
 	$message = "Enter two numbers and we'll do some calculations";

 	if( isset($_POST["submitted"]) ) {
 		
 		if(isset($_POST["num-1"]) ) {
 			$num_1 = $_POST["num-1"];
 			$intNum_1 = floatval($num_1);
 		}

 		if(isset($_POST["num-2"]) ) {
 			$num_2 = $_POST["num-2"];
 			$intNum_2 = floatval($num_2);
 		}

 		$sum = $intNum_1 + $intNum_2;
 		$difference = $intNum_1 - $intNum_2;
 		$product = $intNum_1 * $intNum_2;
 		$quotient = $intNum_1 / $intNum_2;
 		
 		$message = "<li>The sum of $intNum_1 and $intNum_2 is $sum</li>
				 		<li>The difference of $intNum_1 and $intNum_2 is $difference</li>
				 		<li>The product of $intNum_1 and $intNum_2 is $product</li>
				 		<li>The quotient of $intNum_1 and $intNum_2 is $quotient</li>"; 	
 	}

?>

<form method="POST">
	<p class="message"><?=$message?></p>

	<div class="field">
		<label>Number 1</label>
		<input type="number" name="num-1" value="<?=$num_1?>" placeholder="..." min="0">
	</div>

	<div class="field">
		<label>Number 2</label>
		<input type="number" name="num-2" value="<?=$num_2?>" placeholder="..." min="0">
	</div>


	<button type='submit' name="submitted">Submit</button>
	
</form>