
var games = [];
var gamesIdMaker = 0;

function print(note = ""){
    console.log(`-----------${note}`);
    console.log(`games`, games);
}

function add(content){
    const game = {
        id:`a${gamesIdMaker++}`,
        title: content,
        complete: false
    };
    games = [...games,game];
    renderGames(games);

}

function remove(id){
   const filtered = games.filter(function(game){
        return game.id != id;
    })
    games = [...filtered];
    renderGames(games);
}

function complete(id){
    games[id].complete = true;
    renderGames(games);
}
function udpate(id,property,value){
    games[id][property] = value;
    renderGames(games);
}
function renderGame(game){
return `
    <li data-id="${game.id}">
        <game-card>
            <h2>${game.title}</h2>
            <actions>
                <button>Remove</button>
            </actions>
        </game-card>
    </li>
`
}

function renderGames(games) {
    var template = "<ul>";
    games.forEach(function(game){
        template += renderGame(game); 
    });
    template += "</ul>";
    $output.innerHTML = template;
}



//rendering the data 
const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $output = document.querySelector('output');

$form.addEventListener('submit',function(event){
    event.preventDefault();
    add($input.value);
    $input.value = "";
})

$output.addEventListener('click',function(event){
    if(event.target.textContent == 'Remove'){
        const id = event.target.closest('li').dataset.id;
        remove(id);
    }
})




