// window.addEventListener("click",function(event){
// 	console.log(event);
// })

var textArea = document.querySelector('textarea');

function getSelectedText() {
	 var selectedText = '';

	if (document.getSelection()) {
	    selectedText = document.getSelection();
	    console.log(selectedText);
	    console.log("it worked!");
	 }
	 else {
	 	console.log("it didn't work");
	 }
 	textArea.value = selectedText;
}