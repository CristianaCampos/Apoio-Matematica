
function speak(nr, a, b, c, d)
{
	var texto = "Dispõe-se de catorze caracteres (a saber: os algarismos 1, 2, 3, 4, 5, 6, 7, 8, 9 e as vogais a, e, i, o, u) para formar códigos de " + nr + " caracteres. Quantos códigos iniciados por uma vogal seguida de " + (nr-1) + " algarismos diferentes se podem formar? As opções de resposta são:  (A)" + a + " (B)" + b + " (C)" + c + " (D)" + d;
	console.log(texto);
	return texto;
}