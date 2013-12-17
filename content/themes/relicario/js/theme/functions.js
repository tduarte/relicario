// Masonry
$('#container').masonry({
  columnWidth: '.box',
  itemSelector: '.box',
  isAnimated: true
});

// Side Menu

$(document).ready(function() {
	$('#menu').sidr({
		side: 'right'
	});
});

// Parallax 

$(document).ready(function(){
	$('.featured-image').each(function(){
		var $obj = $(this);
		$(window).scroll(function() {
			var yPos = -($(window).scrollTop() / $obj.data('speed')); 
			var bgpos = '50% '+ yPos + 'px';
			$obj.css('background-position', bgpos );
		}); 
	});
});

// comment form values
$(document).ready(function(){
	$("#comment-form input").focus(function () {
		var origval = $(this).val();	
		$(this).val("");	
		//console.log(origval);
		$("#comment-form input").blur(function () {
			if($(this).val().length === 0 ) {
				$(this).val(origval);	
				origval = null;
			}else{
				origval = null;
			};	
		});
	});
});


// clear text area
$('textarea.comment-input').focus(function() {
	 $(this).val('');
});