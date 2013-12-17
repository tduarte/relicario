$(document).ready(function(){

	// Masonry
	$('#container').masonry({
		columnWidth: '.box',
		itemSelector: '.box',
		isAnimated: true
	});

	// Side Menu
	$('#menu').sidr({
		side: 'right'
	});

	// Parallax 
	$('.featured-image').each(function(){
		var $obj = $(this);
		$(window).scroll(function() {
			var yPos = -($(window).scrollTop() / $obj.data('speed')); 
			var bgpos = '50% '+ yPos + 'px';
			$obj.css('background-position', bgpos );
		}); 
	});
});