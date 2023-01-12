
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
    print(`Added ${content}`);
    renderGames(games);

}

function remove(id){
    print(`Removed ${games[id].title}`);
    games.splice(id,1);
}

function complete(id){
    games[id].complete = true;
    print(`Completed ${games[id].title}`);
}
function udpate(id,property,value){
    games[id][property] = value;
    print(`Updated the ${property} of ${games[id].title}`);
}
function renderGame(game){
return `
    <li>
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





