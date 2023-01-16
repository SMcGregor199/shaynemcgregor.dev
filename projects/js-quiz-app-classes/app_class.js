//rendering the data 
const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');

class GameListClass {

    constructor(name){
        this.name = name;
        this.games = [];
        this.gamesIDMaker = 0;
    }
    add(content){
        const game = {
            id:`a${this.gamesIDMaker++}`,
            title: content,
            complete: false
        };
        this.games = [...this.games,game];
    }
    remove(id){
        const filtered = this.games.filter(function(game){
            return game.id != id;
        })
        this.games = [...filtered];
        renderGames(this.games);
        //splice is a good method to use if you're using the position of
        //what's in the array. But we're using the id of the game inside the 
        //game object
        // this.games.splice(id,1);
    }
    update(id,property,value){
        this.games[id][property] = value;
    }
    complete(id){
        this.games[id].complete = true;
    }   
}

//defining the list 
const playStationList = new GameListClass('PlayStation Games');



// Defining the functions that will render the data
function renderGame(game){
    return `
        <li data-id="${game.id}">
            <game-card>
                <h2>${game.title}</h2>
                    <actions>
                        <button>Remove</button>
                        <button>Complete</button>
                    </actions>
            </game-card>
        </li>`
}
    
function renderGames(games) {
    var template = "<ul>";

    games.forEach(function(game){
        template += renderGame(game); 
    });

    template += "</ul>";

    $output.innerHTML = template;
}



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