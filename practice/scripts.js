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
console.log(ps4Games);

ps4Games.forEach( function(game) {
	console.log(game.name);
} ) 

function generateMarkup(anArray) {
	
}







