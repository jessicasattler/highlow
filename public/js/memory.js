 "use strict";
$(document).ready(function() {

	$('.start').click(function(){
	// cards only become clickable after "start" button has been pressed
		alert('start button was clicked');
		$('.card').click(function(){
		// when a card is clicked, background-image of card changes
		$(this).css('background-image', 'url("/img/rigby.png")');
		 
		});
	});





 });