function speak(mult, op1, op2, op3, op4)
{
	var texto = "Considere todos os números naturais de quatro algarismos que se podem formar com os algarismos de 1 a 9. Destes números, quantos são múltiplos de " + mult + "? As opções de resposta são: A: " + op1 + " B: " + op2 + " C: " + op3 + " e D: " + op4;
	console.log(texto);
	return texto;
}