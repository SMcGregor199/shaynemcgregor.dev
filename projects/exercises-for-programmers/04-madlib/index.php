<a href="?"><h1>Printing Quotes</h1></a>
<p>A program that takes the name of an author and a quotation and displays the author's name and quotation w/ with PHP</p>

<form method="POST">
<p>Please enter the name of an author and their quotation</p>
<div class="field">
	<label>Author's name</label>
	<input name="author" value="<?=$author?>" placeholder="...">
</div>
<div class="field">
	<label>Quotation</label>
	<input name="quotation" value="<?=$quotation?>" placeholder="...">
</div>
<button type="submit" name="submitted">Submit</button>
</form>

<output><?=$output?></output>