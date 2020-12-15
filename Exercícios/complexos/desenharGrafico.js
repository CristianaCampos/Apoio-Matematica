function drawGraph(cx, cy, largura, altura, minX, maxX, minY, maxY, divX, divY)
{
	var largRisco = 6;
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	
	ctx.beginPath();
	ctx.moveTo(cx + minX, cy);
	ctx.lineTo(cx + maxX, cy);
	ctx.stroke();

	ctx.beginPath();
	ctx.moveTo(cx, cy + minY);
	ctx.lineTo(cx, cy + maxY);
	ctx.stroke();
	
	// Desenha os traços do eixo yy
	sY = maxY / divY;
	
	for (i=1; i<=divY; i++)
	{
		ctx.beginPath();
	
		y1 = cy + sY * i;
		ctx.moveTo(cx - largRisco, y1);
		ctx.lineTo(cx + largRisco, y1);
		ctx.stroke();
		
		ctx.font = '9pt Arial';
		ctx.fillStyle = 'black'; 
		ctx.fillText(-i, cx-20, y1 + 5);
				
		y1 = cy + sY * -i;
		
		ctx.moveTo(cx - largRisco, y1);
		ctx.lineTo(cx + largRisco, y1);
		ctx.stroke();
		
		ctx.font = '9pt Arial';
		ctx.fillStyle = 'black'; 
		ctx.fillText(i, cx-20, y1 +5);
	}
	
	
	sX = maxX / divX;

	console.log("SX: " + sX);

	
	for (i=1; i<=divX; i++)
	{
		ctx.beginPath();
	
		x1 = cx + sX * i;
		ctx.moveTo(x1, cy - largRisco);
		ctx.lineTo(x1 , cy + largRisco);
		ctx.stroke();
		
		ctx.font = '9pt Arial';
		ctx.fillStyle = 'black'; 
		ctx.fillText(i, x1-5, cy + 20);
		
		x1 = cx + sX * -i;
		ctx.moveTo(x1 , cy - largRisco);
		ctx.lineTo(x1 , cy + largRisco);
		ctx.stroke();
		
		ctx.font = '9pt Arial';
		ctx.fillStyle = 'black'; 
		ctx.fillText(-i, x1-5, cy + 20);		
	}	
}