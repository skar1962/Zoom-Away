$(function() {

	// Set the first tab as the active one
	$( "#tabs" ).tabs({active: 0});
	
	var myPictures = "#tabsPictures";	
	var myTabTotal=$('#tabs >ul >li').length;
	var myPictures = 0;
	var mySiteName = "";
	var mySiteAddress = "";
	
	// Loop through the list items until we find the one that has text of "Pictures". Assign the index to a variable
	$( "li" ).each(function( index ) {
		if ($( this ).text() === "Pictures") {
			myPictures = index;
		}
	});
	
	// Select a DOM element by ID.  If the mainPic is clicked, switch to the pictures tab
	$('#mainPic').click(function() {
		$("#tabs").tabs({active: myPictures});
	});	
	
	$.ajax({
		url: "CaravanSiteDetails.json",
		dataType: "json",
		success: function(data) {
			// Define an array
			var caravanArray=[];
			
			// Read through each data item in the json file			
			$.each(data, function(key, val) {
				if (key === "SiteName") {
					mySiteName = val;
				}
				if (key === "SiteAddress") {
					mySiteAddress = val;
				}
				
					
			});

			
			// Get hold of the HTML with an id of SiteName
			$("#SiteName").text(mySiteName);
			$("#SiteAddress").text(mySiteAddress);
			},
		statusCode: {
			404: function() {
				alert("There was a problem with the sudu server. Try again soon");
			}	
		}		
	});
	
	
});


