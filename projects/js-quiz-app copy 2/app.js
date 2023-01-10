
var games = [];
var gamesIdMaker = 0;

function print(note = ""){
    console.log(`-----------${note}`);
    console.log(`games`, games);
}

function add(content){
    const game = {
        id:`a${gamesIdMaker++}`,
        title: content
    }
    games.push(game);
    print(`Added ${content}`);
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

add('God of War');
add('Uno');
add(`Monopoly`);

udpate(0, "title", "Super Mario");
udpate(1, "id", "b57");





