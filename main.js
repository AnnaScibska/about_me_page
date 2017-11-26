$(document).ready(function(){   

  $(document).scroll(function() { 
    var scroll_start = $(this).scrollTop();
    var windowsize = $(window).width();	  
    if((scroll_start > 40) || ((scroll_start <= 40)&&(windowsize <= 768))){
      $('#colorChange').css('background-color', 'rgba(91, 91, 91, 0.9)');
    } else if ((scroll_start <= 40)&&(windowsize > 768)){
      $('#colorChange').css('background-color', 'transparent');
    }
  });
   
  $(window).resize(function() {
    var windowsize = $(window).width();
    var scroll_start = $(this).scrollTop();
    if(windowsize <= 768) {   
      $('#colorChange').css('background-color', 'rgba(91, 91, 91, 0.9)');
    } else if ((windowsize > 768)&&(scroll_start <= 40)){
      $('#colorChange').css('background-color', 'transparent');
    }
  });
  
  $('a').click(function() {
    $('.navbar-collapse').collapse('hide');
  });
  
  if ($("p.thxMessage").length) {
	$("form").css("display", "none");
  }
  
});


