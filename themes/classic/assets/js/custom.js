/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

$(document).ready(function () {
	$(".category-sub-menu li").each(function() {
		$(this).children(".navbar-toggler").click();
	});
});