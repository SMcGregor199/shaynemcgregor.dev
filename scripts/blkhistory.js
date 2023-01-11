import { apiKey } from "./secret.js";

const options = {
  method: 'GET', 
  headers: {
    'accept': 'application/json',
    'x-api-key': apiKey
  }
};

var $projectCard = document.querySelector('picture');
console.log($projectCard.offsetWidth,$projectCard.offsetHeight);



var promise = fetch("https://rest.blackhistoryapi.io/template/people", options);
promise.then(function(bodyOfResponse){
	return bodyOfResponse.json();
})
.then(function(data){
	console.log(data);
})
.catch( function(error){
	console.log('something went wrong');
})
.finally (function(){
	console.log("promise is done and gone");
})