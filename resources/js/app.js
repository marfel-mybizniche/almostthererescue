(function($){

    var app = {
        onReady: function(){
            $('.dogs_slider').slick({
              infinite: true,
              slidesToShow: 4,
              slidesToScroll: 1,
              arrows:true,
              responsive: [
                {
                  breakpoint: 1100,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true
                  }
                }]
            });
        },	
        onLoad: function(){
			$(document).foundation();

           

		}
		
    }

    document.addEventListener('DOMContentLoaded', app.onReady);
	window.addEventListener('load', app.onLoad);
	

})(jQuery);
