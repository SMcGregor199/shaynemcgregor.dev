

<?php
// Initialize current age 
$currentAge = "";

$int_currentAge = ""; 
// Initialize age you'd like to retire 
$retirementAge = "";
$int_retirementAge= ""; 
// Initialize work years
$workYears = "";
// Initialize Message 
$message = "";
// Initialize the current year 
$currentYear = date("Y"); 
// Initialize the retirement year 
$retirementYear = "";
// Convert age and retirement age inputs to integers using flotval
$submitted = isset($_POST["exercise-04-submitted"]);

if ($submitted) {
	// Setting variables and checking if fields are populated
	if ( isset($_POST['current-age']) ) {
		$currentAge = $_POST['current-age'];
		$int_currentAge = floatval($currentAge);
		
	}

	if ( isset($_POST['retirement-age']) ) {
		$retirementAge = $_POST['retirement-age'];
		$int_retirementAge = floatval($retirementAge);
		
	}

// Subtract retirement age from current age to create workYears variable  
	$workYears = $int_retirementAge - $int_currentAge;
// Add current year to workYears variable to get year you can retire 
	$retirementYear = $currentYear + $workYears;

// We're the magic happens 

	if ( empty($currentAge) ) {
		$message = "We need your current age to perform the calculations";
	}
	else if ( empty($retirementAge) ) {
		$message = "we need your retirement age to perform the calculations";
	}
	else if ($int_currentAge >= $int_retirementAge ) {
		$message = "Good news. You can already retire";
	}
	else {
		$message = "You have $workYears years left until you can retire. It's currently $currentYear, so you can retire in $retirementYear";
	}
} else {
	$message = "Let's determine the year in which you'll retire";
}




?>




<form method="POST">
	<p class="message description-voice"><?=$message?></p>

	<div class="field">
		<label class="description-voice">How old are you currently?</label>
		<input type="number" name="current-age" value="<?=$int_currentAge?>" placeholder="..." min="0">
	</div>

	<div class="field">
		<label class="description-voice">At what age do you want to retire?</label>
		<input type="number" name="retirement-age" value="<?=$int_retirementAge?>" placeholder="..." min="0">
	</div>


	<button class="description-voice" type='submit' name="exercise-04-submitted">Submit</button>
	
</form>