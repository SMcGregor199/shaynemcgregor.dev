
			<!-- STUFF -->
		</main>


		<footer class='site-footer'>
		<inner-column>

			<script>
				var output = document.querySelector('.output');

				function displayNames(array) {
					 array.forEach(function(item){
						console.log(item.name);
					})
					
				}
				

				var pokePromise = fetch("https://pokeapi.co/api/v2/pokemon");
				pokePromise.then(function(bodyOfResponse){
					return bodyOfResponse.json();
				})
				.then( function(pokemons){
					var pokeList = pokemons.results;
					
					console.log(pokeList);
					displayNames(pokeList);
					
					
				})
				.catch( function(error){
					console.log('something went wrong');
				})
				.finally (function(){
					console.log("promise is done and gone");
				})


				

				




			</script>

			

		</inner-column>
		</footer>

	</body>
</html>