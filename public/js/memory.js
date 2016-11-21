 "use strict";
$(document).ready(function() {
	var pictures = ["rigby", "mordecai","pops", "highfive",
		"muscleman","benson","thomas","skipps","eileen",
		"cloudyjane","margaret","partyhorse","rigby", "mordecai","pops", "highfive",
		"muscleman","benson","thomas","skipps","eileen",
		"cloudyjane","margaret","partyhorse"];

	var shufflePictures = function(listOfPictures){
		//for each element in the listOfPictures array, create an empty string
		//element
		var shuffled = [for (x of listOfPictures) ""];
		var i;
		for(i=0;i<listOfPictures.length;i+=1){

		}


		return shuffled;
	}

	$('.start').click(function(){
		//start button fades out after it is pressed
		$('.start').fadeOut();
		// cards only become clickable after "start" button has been pressed
		$('.card').click(function(){
		// when a card is clicked, background-image of card changes
		$(this).css('background-image', 'url("/img/rigby.png")');
		 
		});
	});





 });