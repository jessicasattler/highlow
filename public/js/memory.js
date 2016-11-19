 "use strict";
$(document).ready(function() {

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