
function speak(nrRaiz, nrLados, z, zi, a, b, c, d)
{
	var texto = "Qual a " + numeral(nrRaiz) + " raíz " + nrLados + " de " + z + " mais " + zi + " vezes i?As opções de resposta são: (A)" + a + " (B)" + b + " (C)" + c + " (D)" + d;
	console.log(texto);
	return texto;
}