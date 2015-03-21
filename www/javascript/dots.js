	var elements = document.getElementsByClassName('canvas_for_dots');
	for(var i = 0; i< elements.length;i++){
		var ctx = elements[i].getContext("2d")
		/*small darkblue circle:*/
		var step = 70;
		var left_dot_position = 130;
		ctx.beginPath();
		ctx.arc(left_dot_position,20,10,0,2*Math.PI);
		ctx.fillStyle = "darkblue";
		ctx.fill();
		/*small orange circle:*/
		ctx.beginPath();
		ctx.arc(left_dot_position+step,20,10,0,2*Math.PI);
		ctx.fillStyle = "orange";
		ctx.fill();
		/*small lightblue circle:*/
		ctx.beginPath();
		ctx.arc(left_dot_position+2*step,20,10,0,2*Math.PI);
		ctx.fillStyle = "#66CCFF";
		ctx.fill();
	}
