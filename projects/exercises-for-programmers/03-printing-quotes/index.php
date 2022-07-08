<?php
	$author = null;
	$quotation = null;
	$output = null;
	$submitted = isset($_POST["submitted"]);

	if($submitted) {
		if( isset($_POST["author"]) ) {
			$author = $_POST["author"];
		}
		if( isset($_POST["quotation"]) ) {
			$quotation = $_POST["quotation"];	
		}
		if($author && $quotation) {
			$output = $author . " says, " . $quotation;
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
		<input type="string" name="author" value="" placeholder="...">
	</div>
	<div class="field">
		<label>Enter Quotation</label>
		<input type="string" name="quotation" value="" placeholder="...">
	</div>
	<button type="submit" name="submitted">Submit</button>
</form>

<output><?=$output?></output>