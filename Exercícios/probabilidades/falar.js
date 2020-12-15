function speak(x1, x2, x3, x4, operador1, p1, operador2, p2, op1, op2, op3, op4)
{
	var texto = "Sabendo que a probabilidade de X ser igual a 1 é " + x1 + ", a probabilidade de X ser igual a 2 é " + x2 + ", a probabilidade de X ser igual a 3 é " + x3 + " e a probabilidade de X ser igual a 4 é " + x4 + ". Qual é o valor da probabilidade condicionada de X ser " + operador1 + " do que " + p1 + " sabendo que X é " + operador2 + " do que " + p2 + "? As opções de resposta são: A: " + op1 + " B: " + op2 + " C: " + op3 + " e D: " + op4;
	console.log(texto);
	return texto;
}