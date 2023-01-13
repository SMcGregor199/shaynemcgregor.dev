// This file contains a bunch of helpful helper functions

function double(number){
    return number * 2;
}

function tripple(number){
    return number * 3;
}

function render(where , what){
    where.innerHTML = what;
}

export {
    double,
    tripple,
    render,
}