const gamesToPlay = {
    games: [],
    gamesIDMaker: 0,

    dump: function(note = "Hello") {
        console.log(`-----------${note}`);
        console.log(`games`, this.games);
    },

    add: function(content){
        const game = {
            id:`a${this.gamesIDMaker++}`,
            title: content
        }
        this.games.push(game);
        this.dump(`Added ${content}`);
    },
    remove: function(id){
        this.dump(`Removed ${this.games[id].title}`);
        this.games.splice(id,1);
    },
    complete: function(id){
        this.games[id].complete = true;
        this.dump(`Completed ${this.games[id].title}`);
    },
    udpate: function(id,property,value){
        this.games[id][property] = value;
        this.dump(`Updated the ${property} of ${this.games[id].title}`);
    }

}

console.log(gamesToPlay.add('God of War'));
console.log(gamesToPlay.add('UNO'));
console.log(gamesToPlay.complete(1));
console.log(gamesToPlay.udpate(1,'complete',false));












