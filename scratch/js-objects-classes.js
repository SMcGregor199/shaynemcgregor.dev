// This is a JavaScript Object. Yay!!!! 
// The cool thing about javascript objects is that they can 
// include functions.

var garfield = {
	name: "Garfield",
	color: ["orange","black"],
	hates: "Mondays",
	loves: ["sleeping","lasagna"],
	owner_name: "Tom",
	 sayQuote:  function() {
	 	var heading = document.createElement("h1");
		heading.textContent = "I'm not known for my compassion";
		document.body.appendChild(heading);
	},
	printQuote: function(quote) {
		document.body.insertAdjacentText("beforeend",quote);
	}
};

//With newer versions of JavaScript, you can now remove the
//function keyword and just include the function names
//Here we've explicitly defined an object called Garfield.
var garfield = {
	name: "Garfield",
	color: ["orange","black"],
	hates: "Mondays",
	loves: ["sleeping","lasagna"],
	owner_name: "Tom",
	 sayQuote() {
	 	var heading = document.createElement("h1");
		heading.textContent = "I'm not known for my compassion";
		document.body.appendChild(heading);
	},
	printQuote(quote) {
		document.body.insertAdjacentText("beforeend",quote);
	}
};

//This is a constructor function. It's a function that generates objects.  
function CartoonCat(name, age) {
	//var this = {} is kind of happening behind the scenes

	this.name = name;
	this.age = age;

	this.roar = function(){
		alert(`${name}!!!`);
	}
}

var Tom = new CartoonCat('TOM',"16");
Tom.roar();



