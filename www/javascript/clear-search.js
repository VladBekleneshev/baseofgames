var main = function(){
	"use strict";
	$(".search").on("click", function(event){
		$(this).val("");
	});
	$(".search").focusout(function(){
		$(this).val("поиск...");
	});
};
$(document).ready(main);