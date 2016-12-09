 "use strict";
$(document).ready(function() {
	var pictures = ["rigby", "mordecai","pops", "highfive",
		"muscleman","benson","thomas","skips","eileen",
		"cloudyjane","margaret","partyhorse","rigby", "mordecai","pops", "highfive",
		"muscleman","benson","thomas","skips","eileen",
		"cloudyjane","margaret","partyhorse"];

	var shufflePictures = function(listOfPictures){
		//for each element in the listOfPictures array, create an empty string
		//element
		var shuffled = [];
		var j;
		var i;

		for (j = 0;j < listOfPictures.length; j+=1){
			shuffled[j] = "";
		}

		//Iterate through the loop the same amount of times as the amount of characters we have in pictures array and assign elements to the shuffled array 
		//at random by choosing random indeces from the pictures array and assigning them in that order
		for(i=0;i<listOfPictures.length;i+=1){
			var randomNumber = parseInt((Math.random()*listOfPictures.length)+0);

			while(shuffled[randomNumber] != ""){
				randomNumber = parseInt((Math.random()*listOfPictures.length)+0);
			}

			shuffled[randomNumber] = listOfPictures[i];
		}

		return shuffled;
	}

	var shuffled = shufflePictures(pictures);

	//assigns characters from the shuffled array to div elements at random
	shuffled.forEach(function(element,index, array){
		if(index % 2 == 0){
			$("#firstContainer").prepend("<div class=\"col-xs-10 col-sm-6 col-lg-3\"><div class=\"card \" data-character=\""+element+"\"></div>	</div>");
		}else{
			$("#secondContainer").prepend("<div class=\"col-xs-10 col-sm-6 col-lg-3\"><div class=\"card \" data-character=\""+element+"\"></div></div>");
		}
	});

	$('.start').click(function(){
		//start button fades out after it is pressed
		$('.start').fadeOut();
		// cards only become clickable after "start" button has been pressed
		$('.card').click(function(){
		// when a card is clicked, background-image of card changes
		// $(this).css('background-image', 'url("/img/rigby.png")');
		$.ajax({
			url: 'API.php',
			data: "name=" + $(this).attr("data-character"),

			dataType: 'json',
			success: function(data)
			{
				var imageUrl = data[2];

				// $(this).css('background-image', 'url("'+imageUrl+'")');
				 $(this).css('background-image', 'url(" '+imageUrl+' ")');

				console.log(imageUrl);

			}
		});
		 
		});
	});





 });