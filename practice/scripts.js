var favoriteGames = [
	{
		name:"RE4",
		system:"PS4",
	},
	{
		name:"Pokemon",
		system:"Nintendo",
	},
	{
		name:"Sonic the Hedgehog",
		system:["Nintendo","PS4"],
	},
	{
		name:"Final Fantasy", 
		system:"PS4",
	},
	{
		name:"Dragon Ball Z Games", 
		system:"PC",
	},
	{
		name:"Free Games",
		system:"X-Box",
	},
	{
		name:"Chess",
		system:"Manual",
	},
	{
		name:"Yugioh",
		system:"Card Game",
	}
	
];
var ps4Games = favoriteGames.filter(function(game){
	return game.system == 'PS4';
});


function generateMarkup(anArray,aHeading) {
	var heading = document.createElement("h2");
	heading.textContent = aHeading;
	document.body.appendChild(heading);

	var ol = document.createElement('ol');

	anArray.forEach( function(item) {
		var li = document.createElement('li');
		li.textContent = item.name;
		ol.appendChild(li);
	} );

	document.body.appendChild(ol);
}

generateMarkup(ps4Games, "Shayne's favorite PS4 games");






