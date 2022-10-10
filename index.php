<?php
	/* router */
	$page = null;

	if( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	} 
	include('functions/functions.php');

	include("modules/header.php");

?>
<?php
	 header("Access-Control-Allow-Origin: *"); 
?>

<section class="featured">
	<inner-column>
		<div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
		  <div class="carousel-cell" style="background-image: url('images/red-heart-01.png'); background-repeat: space; position: relative;">
		  		<div class="carousel-background">
		  			<h1>Pixel Art Gallery(WordPress)</h1>
			  		<p>I love pixel art, and I practice making them every day. If you want to keep up with what I've been working on, check out my pixel art gallery that I made in WordPress. <a href="#">Click Here</a> to take a look</p>
		  	  </div>
		  	</div>
		  <div class="carousel-cell" style="background-image: url('images/lion-cub-thumb.png')"></div>
		  <div class="carousel-cell" style="background-image: url('images/lion.jpg')"></div>
		  <div class="carousel-cell" style="background-image: url('images/shayne.jpg')"></div>
		  <div class="carousel-cell" style="background-image: url('images/php-exercise.jpg')"></div>
		</div>
	</inner-column>
</section>

<h1 class="output">Shayne</h1>

<script type="module">
	
  import {  exchangeNpssoForCode, exchangeCodeForAccessToken, makeUniversalSearch, getUserTitles,exchangeRefreshTokenForAuthTokens} from 'https://cdn.skypack.dev/psn-api';

   const myNpsso = "uBpFWdWaBMVE0XnDAOQfVm7xOlJ5YCaxVLn336rr52EGsf2PJwgZDNTmGjkMiXV7";
   const accessCode = await exchangeNpssoForCode(myNpsso);
   const authorization = await exchangeCodeForAccessToken(accessCode);


   const allAccountsSearchResults = await makeUniversalSearch(
    authorization,
    "me",
    "SocialAllAccounts"
  );

   const targetAccountId = 
      allAccountsSearchResults.domainResponses[0].results[0].socialMetadata
      .accountId;

   const titles = await getUserTitles(authorization, targetAccountId);
   
   console.log(titles);

</script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

