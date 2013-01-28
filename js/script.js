$(document).ready(function() {
   $('ul#menu').superfish({
      delay:       400,
      animation:   {opacity:'show',height:'show'},
      speed:       400,
      autoArrows:  false,
      dropShadows: false
   });
 });



$(function(){
		$("#faded").faded({
			speed: 400,
			crossfade: false,			
			sequentialloading: true,
			autoplay: 4000	});
		
		$("#faded li img").show();

	});
