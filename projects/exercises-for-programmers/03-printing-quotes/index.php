<?php
	$author = null;
	$quotation = null;
	$output = null;
	$submitted = isset($_POST["submitted"]);

	if($submitted) {
		if( isset($_POST["author"]) && isset($_POST["quotation"])  ) {
			$author = $_POST["author"];
			$quotation = $_POST["quotation"];
			$output = "$author says \"$quotation\"";
		} 
		if( empty($_POST["author"]) ) {
			$output = "Please include the author's name";
		}
		if( empty($_POST["quotation"]) ){
			$output = "Please include the quotation";
		}
		if( empty($_POST["quotation"] ) && empty($_POST["author"])){
			$output = "Please include the quotation and the author's name";
		}

	}
?>



<!-- Display -->
<a href="?"><h1>Printing Quotes</h1></a>
<p>A program that takes the name of an author and a quotation and displays the author's name and quotation w/ with PHP</p>

<form method="POST">
	<p>Please enter the name of an author and their quotation</p>
	<div class="field">
		<label>Author's name</label>
		<input name="author" value="<?=$author?>" placeholder="...">
	</div>
	<div class="field">
		<label>Enter Quotation</label>
		<input type="string" name="quotation" value="<?=$quotation?>" placeholder="...">
	</div>
	<button type="submit" name="submitted">Submit</button>
</form>

<output><?=$output?></output>