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
            title: content
        };
        this.games = [...this.games,game];
    }
    update(id,property,value){
        this.games[id][property] = value;
    }
    complete(id){
        this.games[id].complete = true;
    }
    remove(id){
        this.games.splice(id,1);
    }
    
}

// render the data
function renderGame(game){
    return `
        <li data-id="${game.id}">
            <game-card>
                <h2>${game.title}</h2>
                    <actions>
                        <button>Remove</button>
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

// Form functions 
$form.addEventListener('submit',function(event){
    event.preventDefault();
    const userList = new GameListClass('PlayStation Games');
    userList.add($input.value);
    renderGames(userList.games);
    $input.value = "";
})

$output.addEventListener('click',function(event){
    if(event.target.textContent == 'Remove'){
        const id = event.target.closest('li').dataset.id;
        remove(id);
    }
})