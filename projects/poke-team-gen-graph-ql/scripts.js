// Goal: 1. Build a list of pokemon names from open API
// 		2. Each pokemon should have a button that loads their 				abilities
/*
		Step 1: When user clicks button, another list of abilities specific to selected pokemon should appear. 
			a. request the ability data for that specific pokemon. 
			b. return a list of those abilities. 
*/

var output = document.querySelector('.output');






















fetch('https://beta.pokeapi.co/graphql/v1beta', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    query: `

      `
  }),
})
  	.then(function(bodyOfResponse){
			return bodyOfResponse.json();
	})
	.then(function(pokemonData){
		let pokemon = pokemonData.data.pokemon_v2_pokemon;
		console.log(pokemon);
	})




