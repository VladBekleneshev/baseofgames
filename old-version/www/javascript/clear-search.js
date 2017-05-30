var main = function(){
	"use strict";
	$(".search_box").on("click", function(event){
		$(this).val("");
	});
	$(".search_box").focusout(function(){
		$(this).val("поиск...");
	});
};
$(document).ready(main);