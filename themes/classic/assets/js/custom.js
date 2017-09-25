/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

 var temp_scroll = 0;

$(document).ready(function () {
	$(".category-sub-menu li").each(function() {
		$(this).children(".navbar-toggler").click();
	});
});

$(document).scroll(function() {
    if ($(document).scrollTop() > temp_scroll && $(document).scrollTop() > 90) {
    	$(".header-top").addClass("fixed_scroll");
    }
    else {
    	$(".header-top").removeClass("fixed_scroll");	
    }

    setTimeout(function() {
    	temp_scroll = $(document).scrollTop()
    }, 650);
});