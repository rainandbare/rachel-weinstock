rachel = {};
$(function(){
	rachel.init();
});
rachel.init = function(){
	console.log("It's working");
	rachel.carosel();
	rachel.mobileMenu();
}
rachel.carosel = function(){
	 setInterval(swapText,2500);
        
    function swapText(){
   		var active = $('.active'); 
    	var next = ($('.active').next().length > 0) ? $('.active').next() : $('ul.carosel li:first');

    	active.removeClass('active');
    	next.addClass('active');
	}
}
rachel.mobileMenu = function(){
	$("div.mobile-icon").on("click", function(){
		$("ul#menu-menu").toggleClass('mobile-view');
		console.log("clicked");
	});
}