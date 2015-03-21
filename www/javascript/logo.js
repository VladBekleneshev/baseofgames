var c = document.getElementById("logo");
var ctx = c.getContext("2d");
/*circle:*/
ctx.beginPath();
ctx.arc(55,59,50,0,2*Math.PI);
ctx.fillStyle = "darkblue";
ctx.fill();
/*text:*/
ctx.fillStyle = "white";
ctx.font = "30px Arial";
ctx.fillText("Base",21,70);
/*****************/
/*small circle:*/
ctx.beginPath();
ctx.arc(125,99,10,0,2*Math.PI);
ctx.fillStyle = "darkblue";
ctx.fill();
/*****************/
/*circle:*/
ctx.beginPath();
ctx.arc(195,74,35,0,2*Math.PI);
ctx.fillStyle = "orange";
ctx.fill();
/*text:*/
ctx.fillStyle = "white";
ctx.font = "30px Arial";
ctx.fillText("of",181,85);
/*****************/
/*small circle:*/
ctx.beginPath();
ctx.arc(265,99,10,0,2*Math.PI);
ctx.fillStyle = "orange";
ctx.fill();
/*****************/
/*circle:*/
ctx.beginPath();
ctx.arc(335,59,50,0,2*Math.PI);
ctx.fillStyle = "#66CCFF";
ctx.fill();
/*text:*/
ctx.fillStyle = "white";
ctx.font = "30px Arial";
ctx.fillText("games",291,70);
/*****************/
/*small circle:*/
ctx.beginPath();
ctx.arc(405,99,10,0,2*Math.PI);
ctx.fillStyle = "#66CCFF";
ctx.fill();