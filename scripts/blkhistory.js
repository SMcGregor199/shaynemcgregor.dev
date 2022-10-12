
const apiKey = "c2hheW5lbWNncmVnb3IxVHVlIE9jdC";

var promise = fetch("https://rest.blackhistoryapi.io/template/people");
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