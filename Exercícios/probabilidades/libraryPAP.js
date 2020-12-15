// Dado um operador (String)op, um vector vector e um número a comparar
// devolve as posições do vector que respeitam o operador
function operatorVector(operador, vector, num)
{
	var resultado = [];

	console.log("Vector: " + vector);
	
	for (var i=0; i<vector.length; i++)
	{
		if (operador == ">")
		{
			if (vector[i] > num)
				resultado[resultado.length] = i;
		}
		
		if (operador == ">=")
		{
			if (vector[i] >= num)
				resultado[resultado.length] = i;
		}
		
		if (operador == "<")
		{
			if (vector[i] < num)
				resultado[resultado.length] = i;
		}
		
		if (operador == "<=")
		{
			if (vector[i] <= num)
				resultado[resultado.length] = i;
		}
		
		if (operador == "=")
		{
			if (vector[i] == num)
				resultado[resultado.length] = i;
		}
	}
	
	console.log("Resultado: " + resultado);
	
	return resultado;
}

// Valores comuns entre vectores
function intersection(vetor1, vetor2)
{
	var comuns = [];
	
	for (var i=0; i<vetor1.length;i++)
	{
		for (var j=0; j<vetor2.length; j++)
		{
				if (vetor1[i] == vetor2[j])
					comuns[comuns.length] = vetor1[i];
		}	
	}
	return comuns;
}

//soma de fraçoes
function soma(vNum, vDen)
{
	var mult = lcmV(vDen);
	
	
	for (var i=0; i<vNum.length;i++)
	{
		vNum[i] = vNum[i] * mult / vDen[i];
				
	}
	
	var soma = 0;
	
	for (var i=0; i<vNum.length; i++)
	{
		soma += vNum[i];
	}
	
	return simplifica(soma, mult);
}

function simplificaV(vec)
{
	return simplifica(vec[0], vec[1]);
}


function simplifica(num, den)
{
	var dividir = gdc(num,den);	
			
	if (dividir != 1)
	{
		num = num / dividir;
		den = den / dividir;
	}
	
	return [num, den];
}

function valoresV(pos, vector)
{
	var resultado = [];
	for (var i=0; i<pos.length; i++)
	{		
		resultado[resultado.length] = vector[pos[i]];
	}
	return resultado;
}

function divide(v1, v2)
{
	return [v1[0] * v2[1], v1[1] * v2[0]];
}
