var main = function(){
	"use strict";
	$("a.caption").mouseover(function(event){
		$(this).css("margin-left", "-30px");
	});
	$("a.caption").mouseout(function(event){
		$(this).css("margin-left","0px");
	});
};
$(document).ready(main);