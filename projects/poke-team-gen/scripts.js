// Goal: 1. Build a list of pokemon names from open API
// 		2. Each pokemon should have a button that loads their 				abilities
/*
		Step 1: When user clicks button, another list of abilities specific to selected pokemon should appear. 
			a. request the ability data for that specific pokemon. 
			b. return a list of those abilities. 
*/

var output = document.querySelector('.output');

/*
	This is where we define the function that displays all the pokemon names
*/

function displayNames(array) {
	console.log(array);
	var template = `<ul class="pokemon-list">`;

	array.forEach(function(item){
		console.log(item.name);
		var listItem = 
		`	<li class="pokemon" data-endpoint="${item.url}">
				<h2>${item.name}</h2>
				<button rel="getAbilities">${item.name}'s abilities</button>
			</li>
		`
		;

		template += listItem;
	})

	template += `</ul>`;
	output.innerHTML = template;
}
function renderAbilities(abilities){
	var template = `<ul class="ability-list">`;
	for(var ability of abilities){
		template += `<li class="ability">${ability.ability.name}</li>`;
	}
	template += `</ul>`;
	return template;

}
/*
	This is where we define the function that makes another request to the api to get more data. 
*/
function getAbilityData(button) {
	var card = button.closest(".pokemon");
	var url = card.dataset.endpoint;
	button.disabled = true;
	
	fetch(url)
		.then(function(bodyOfResponse){
			return bodyOfResponse.json();
		})
		.then(function(pokemon){
			var abilities = renderAbilities(pokemon.abilities);
			card.insertAdjacentHTML("beforeend",abilities);
			

		})
		.catch(function(error){
			console.log('something went wrong');
		})
		.finally(function(){
			console.log('it worked! We got the abilities');
		})
	;
}


/*
	This is where the promise is made using the fetch function
*/

var pokePromise = fetch("https://pokeapi.co/api/v2/pokemon?limit=151");
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
		if(event.target.matches('[rel="getAbilities"]') ){
			getAbilityData(event.target);
		}
		
})
