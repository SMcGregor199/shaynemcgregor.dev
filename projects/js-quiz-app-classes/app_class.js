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
        this.games.push(game);
        this.dump(`Added ${content}`);
    }
    update(){

    }
    complete(){

    }
    remove(){

    }
    show(){

    }
    
}