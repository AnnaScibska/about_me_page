$(document).ready(function(){
		
	var scroll = $(this).scrollTop();
	if (scroll > 40) {
		$('#colorChange').css('background-color', 'rgba(91, 91, 91, 0.9)');
		$('#colorChange').css('border-bottom', '1px solid #000');
	}

	$(document).scroll(function() { 
		var scroll_start = $(this).scrollTop();
		var windowsize = $(window).width();	  
		if((scroll_start > 40) || ((scroll_start <= 40)&&(windowsize <= 767))){
			$('#colorChange').css('background-color', 'rgba(91, 91, 91, 0.9)');
			$('#colorChange').css('border-bottom', '1px solid #000');
		} else if ((scroll_start <= 40)&&(windowsize > 767)){
			$('#colorChange').css('background-color', 'transparent');
			$('#colorChange').css('border', 'none');
		}
	});
   
	$(window).resize(function() {
		var windowsize = $(window).width();
		var scroll_start = $(this).scrollTop();
		if(windowsize <= 767) {   
			$('#colorChange').css('background-color', 'rgba(91, 91, 91, 0.9)');
			$('#colorChange').css('border-bottom', '1px solid #000');
		} else if ((windowsize > 767)&&(scroll_start <= 40)){
			$('#colorChange').css('background-color', 'transparent');
			$('#colorChange').css('border', 'none');
		}
	});
  
	$('a').click(function() {
		$('.navbar-collapse').collapse('hide');
	});
  
	if ($('p.thxMessage').length) {
		$('form').css('display', 'none');
		$('#submitBtn').css('display', 'none');
	}
  
	// lightbox gallery: http://ashleydw.github.io/lightbox/
  
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});
  
});


