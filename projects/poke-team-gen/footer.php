
			<!-- STUFF -->
		</main>


		<footer class='site-footer'>
		<inner-column>

			<script>
				// Goal: 1. Build a list of pokemon names from open API
				// 		2. Each pokemon should have a button that loads their 				abilities
				/*
						Step 1: When user clicks button, another list of abilities specific to selected pokemon should appear. 
							a. request the ability data for that specific pokemon. 
							b. return a list of those abilities. 
				*/

				var output = document.querySelector('.output');
				var clickForAbilityData = false;
				/*
					This is where we define the function that displays all the pokemon names
				*/

				function displayNames(array) {
					var template = `<ul class="pokemon-list">`;

					array.forEach(function(item,idx){
						console.log(item.name);
						var listItem = 
						`	<li class="pokemon">
								<h2>${item.name}</h2>
								<button class="button" id="${idx}">${item.name}'s abilities</button>
							</li>`
						;

						template += listItem;
					})

					template += `</ul>`;
					output.innerHTML = template;
				}

				/*
					This is where we define the function that makes another request to the api to get more data. 
				*/
				function getAbilityData(idx) {
					var slug = parseInt(idx, 10) + 1;
					var abilitiesPromise = fetch(`https://pokeapi.co/api/v2/pokemon/${slug}/`)
					.then(function(bodyOfResponse){
						return bodyOfResponse.json();
					})
					.then(function(data){
						var abilitiesArray = data.abilities;

						var nestedTemplate = `<ul>`;
						for(abilityObject of abilitiesArray){
							var abilityName = `
								<li>
									${abilityObject.ability.name}
								</li>
							`;
							nestedTemplate += abilityName;
						}
						nestedTemplate += `</ul>`;
						console.log(nestedTemplate);
					})
					.catch(function(error){
						console.log('something went wrong');
					})
					.finally(function(){
						console.log('it worked! We got the abilities');
					})
				}


				/*
					This is where the promise is made using the fetch function
				*/

				var pokePromise = fetch("https://pokeapi.co/api/v2/pokemon");
				pokePromise.then(function(bodyOfResponse){
					return bodyOfResponse.json();
				})
				.then( function(pokemons){
					displayNames(pokemons.results);
				})
				.catch( function(error){
					console.log('something went wrong');
				})
				.finally (function(){
					console.log("promise is done and gone");
				})

				/*
					This is where we add the event listener to the button via the window
				*/

				window.addEventListener("click",function(event){
						if(event.target.matches('[class="button"]') ){
							getAbilityData(event.target.id);
						}
						
				})

				




			</script>

			

		</inner-column>
		</footer>

	</body>
</html>