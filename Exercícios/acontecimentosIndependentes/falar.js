function speak(pA, pB, op1, op2, op3, op4)
{
	var texto = "Seja omega o espaço de resultados associado a uma certa experiência aleatória. Sejam A e B dois acontecimentos, sabendo-se que: A e B são acontecimentos independentes; e a probabilidade de A é igual a " + pA + " e a probabilidade de B é igual a " + pB + ". Qual é a probabilidade de A reunido com B, arredondado a duas casas decimais? As opções de resposta são: A: " + op1 + " B: " + op2 + " C: " + op3 + " e D: " + op4;
	console.log(texto);
	return texto;
}