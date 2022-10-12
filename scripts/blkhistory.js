const options = {
  method: 'GET', 
  headers: {
    'accept': 'application/json',
    'x-api-key':'c2hheW5lbWNncmVnb3IxVHVlIE9jdC'
  },
  // body: JSON.stringify(data),
};

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