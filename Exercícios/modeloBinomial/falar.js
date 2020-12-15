function speak(vezes, nrFace, op1, op2, op3, op4)
{
	var texto = "Dado um tetraédrico equilibrado, com as faces numeradas de 1 a 4, lança-se dez vezes esse dado e, em cada lançamento, regista-se o número da face que fica voltada para baixo. Qual é a probabilidade, arredondada às milésimas, de sair exatamente " + vezes + " vezes a face com o número " + nrFace + "? As opções de resposta são: A: " + op1 + " B: " + op2 + " C: " + op3 + " e D: " + op4;
	console.log(texto);
	return texto;
}