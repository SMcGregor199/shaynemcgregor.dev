var games = [];

function update(){
    console.log(`games`, games);
}

function add(content){
    var game = {
        content: content
    }
    games.push(game);
    update();
}

function remove(id){
    games.splice(id,1);
    update();
}

add("God of War");
add('Uno');
add('Monopoly');
remove(1);




