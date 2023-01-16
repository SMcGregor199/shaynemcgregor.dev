
function GamesList(name){
    this.listName = name;
    this.games = [];
    this.gamesIDMaker = 0;

    this.add = function(content){
        const game = {
            id:`a${this.gamesIDMaker++}`,
            title: content
        };
        this.games.push(game);
        this.dump(`Added ${content}`);
    },

    this.udpate = function(id,property,value){
        this.games[id][property] = value;
        this.dump(`Updated the ${property} of ${this.games[id].title}`);
    },
}

GamesList.prototype.complete = function(id){
    this.games[id].complete = true;
}

GamesList.prototype.remove = function(id){
    this.dump(`Removed ${this.games[id].title}`);
    this.games.splice(id,1);
}

const playStationGames = new GamesList('PlayStation Games');
const xBoxGames = new GamesList('XBox Games');
const pcGames = new GamesList('PC Games');

console.log(playStationGames.listName);

playStationGames.add('God of War'); 

playStationGames.complete(0);

playStationGames.add('The Last of Us');

playStationGames.complete(1);

playStationGames.udpate(0,"complete",false);



// Form functions. The thing to keep in mind is that while it works, this 
// form is rebuilding the list EACH time you press submit, as opposed to "reactively"
// which would be possible with something like Vue or SvelteKit 
$form.addEventListener('submit',function(event){
    event.preventDefault();
    playStationList.add($input.value);
    renderGames(playStationList.games);
    $input.value = "";
})

$output.addEventListener('click',function(event){
    if(event.target.textContent == 'Remove'){
        const id = event.target.closest('li').dataset.id;
        playStationList.remove(id);
    }
})












