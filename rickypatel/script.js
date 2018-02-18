window.onload = function() {
// $(function() {
	// start up code goes here
   	// alert("We are in the jQuery function!");  
	$('.alert').alert()
	var figure = $(".video").hover( hoverVideo, hideVideo );
//	var myVideo = document.getElementById("video1"); 
}



function hoverVideo(e) {  
    $('video', this).get(0).play(); 
}

function hideVideo(e) {
    $('video', this).get(0).pause(); 
}

function playPause() { 
    if (myVideo.paused) 
		myVideo.play(); 
	else 
        myVideo.pause(); 
} 