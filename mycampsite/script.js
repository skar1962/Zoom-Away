window.onload = function() {
// $(function() {
	// start up code goes here
   	// alert("We are in the jQuery function!");  
		 // readCreds();  Dont know what this is for.  Delete later...

		 $( "#caravansites" ).selectmenu();
		 $( "#submit1" ).button();
}
function openTab(evt, TabName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(TabName).style.display = "block";
	evt.currentTarget.className += " active";
}