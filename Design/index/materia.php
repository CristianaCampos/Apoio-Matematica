<?php
	session_start();
?>

<html>
    <head>
        <title>Apoio à Matemática - Matéria</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
        
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="index.css?v=1.0">
        
        <link rel="icon" href="logo_icon.ico">
    </head>
    <body>
        <script> 
            //MUDAR IMAGEM DO MENU AO PASSAR O RATO
            function mudaIMG()
            {
                document.getElementById("img").src="menuAfter.png";
            }
            function mudaIMG2()
            {
                document.getElementById("img").src="menu.png";
            }
        </script>

        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar fixed-top navbar-expand-sm navbar-light" id="mainNav">     
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index_html.php">
                                    <img width="120px" src="../logo_site.png"/>
                                </a>
                            </li>
                        </ul>

                <ul class="ml-auto nav navbar-nav">     
                    <li class="nav-item">
                        <a class="nav-link" href=""></a>
                    </li>
                    
                    <!-- session Login -->
                    <?php                      
                        if (isset($_SESSION["nome"])) 
                        {
                            include("menuLogado.php");  
                            include("opcaoMenuLogado.html");
                        }             
                                                            
                        else
                        {
                            include("menuNLogado.html");     
                    ?>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href=""></a>
                        </li>
                                                
                        <!-- session Registo -->
                        <?php
                            if (isset($_SESSION["nome"])) 
                            {
                                //INCLUIR MENU 
                                include("opcaoMenuLogado.html");
                                
                                include("menuCreateLogado.php"); 
                            }
                                                                
                            else
                            {
                                include("menuCreateNLogado.html");  
                                include("opcaoMenuNLogado.html");
                            }
                                                    
                        ?>
                        </ul>
                        <?php
                            }
                        ?>                                 
                    </ul>		
                    </nav>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="container">
            <p>  Aqui, podes aprender um pouco mais sobre cada tema da matemática. Assim, irás conseguir ser bem sucedido nos nossos exercícios.</p>
            <br>
            <button type="button" class="btn btn-lg btn-block btnMateria" data-toggle="modal" data-target="#modalAcontecimentosIndependentes">Acontecimentos Independentes</button>   
            <button type="button" class="btn btn-lg btn-block btnMateria" data-toggle="modal" data-target="#modalArranjos">Arranjos</button>
            <button type="button" class="btn btn-lg btn-block btnMateria" data-toggle="modal" data-target="#modalDistribuicaoBinomial">Distribuição Binomial</button>
            <button type="button" class="btn btn-lg btn-block btnMateria" data-toggle="modal" data-target="#modalNumerosComplexos">Números Complexos</button>
            <button type="button" class="btn btn-lg btn-block btnMateria" data-toggle="modal" data-target="#modalProgressaoAritmetica">Progressão Aritmética</button>  
        </div>

        <!-- Numeros Complexos -->
        <div class="modal fade" id="modalNumerosComplexos" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><b>Números Complexos</b></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>                      
                    </div>
                    <div class="modal-body">
                        <p>Os números complexos são números compostos por uma parte real e uma imaginária.</p>
                        <p>O conjunto dos números complexos é indicado por C.</p>
                        <p><b>--> Unidade Imaginária (i)</b></p>
                        <p>Indicado pela letra i, a unidade imaginária é o par ordenado (0, 1).</p>
                        <p>Logo, i . i = –1 <=> i<sup>2</sup> = –1</p>
                        <p>Assim, i é a raiz quadrada de –1.</p>
                        <p><b>--> Forma Algébrica de Z</b></p>
                        <p>A forma algébrica de Z é utilizada para representar um número complexo através da fórmula: Z = x + yi</p>
                        <p>Onde:</p>
                        <p>- x é um número real indicado por x = Re (Z), sendo chamado de parte real de Z.</p>
                        <p>- y é um número real indicado por y = Im (Z), sendo chamado de parte imaginária de Z.</p>
                        <p><b>--> Conjugado de um Número Complexo</b></p>
                        <p>O conjugado de um número complexo é indicado por z, definido por z = a – bi. Assim, troca-se o sinal de sua parte imaginária.</p>
                        <p>Então, se z = a + bi, logo z = a – bi</p>
                        <p>Quando multiplicamos um número complexo por seu conjugado, o resultado será um número real.</p>
                        <p><b>--> Igualdade entre Números Complexos</b></p>
                        <p>Sendo dois números complexos Z1 = (a, b) e Z2 = (c, d), eles são iguais quando a = c e b = d. Isso porque eles possuem partes reais e imaginárias idênticas. </p>
                        <p>Assim, a + bi = c + di quando a = c e b = d</p>
                        <p><b>--> Operações com Números Complexos</b></p>
                        <p>Com os números complexos é possível realizar as operações de adição, subtração, multiplicação e divisão.</p>
                        <p><b>- Adição</b></p>
                        <p>Z1 + Z2 = (a + c, b + d)</p>
                        <p>Na forma algébrica, temos: (a + bi) + (c + di) = (a + c) + i (b + d)</p>
                        <p><i>Exemplo:</i></p>
                        <p>(2 + 3i) + (–4 + 5i) = (2 – 4) + i (3 + 5) = –2 + 8i</p>
                        <p><b>- Subtração</b></p>
                        <p>Z1 – Z2 = (a – c, b – d)</p>
                        <p>Na forma algébrica, temos: (a + bi) – (c + di) = (a – c) + i (b – d)</p>
                        <p><i>Exemplo:</i></p>
                        <p>(4 – 5i) – (2 + i) = (4 – 2) + i (–5 –1) = 2 – 6i</p>
                        <p><b>- Multiplicação</b></p>
                        <p>(a, b) . (c,d) = (ac – bd, ad + bc)</p>
                        <p>Na forma algébrica, usamos a propriedade distributiva:(a + bi) . (c + di) = ac + adi + bci + bdi<sup>2</sup> (i<sup>2</sup> = –1) <=> (a + bi) . (c + di) = ac + adi + bci – bd <=> (a + bi) . (c + di) = (ac – bd) + i (ad + bc)</p>
                        <p><i>Exemplo:</i></p>
                        <p>(4 + 3i) . (2 – 5i) = 8 – 20i + 6i – 15i<sup>2</sup> = 8 – 14i + 15 = 23 – 14i</p>
                        <p><b>- Divisão</b></p>
                        <p>Z1/Z2 = Z3</p>
                        <p>Z1 = Z2 . Z3</p>
                        <p>Na igualdade acima, se Z3 = x + yi, temos: Z1 = Z2 . Z3</p>
                        <p>a + bi = (c + di) . (x + yi) <=> a + bi = (cx – dy) + i (cy + dx)</p>
                        <p>Pelo sistema das incógnitas x e y temos: cx – dy = a e dx + cy = b</p>
                        <p>Logo, Logo, x = ac + bd/c<sup>2</sup> + d<sup>2</sup> e y = bc – ad/c<sup>2</sup> + d<sup>2</sup></p>
                        <p><i>Exemplo:</i></p>
                        <p>2 – 5i/i = 2 – 5i/ . (– i) / (– i) = –2i + 5i<sup>2</sup>/–i<sup>2</sup> = 5 – 2i</p>
                    </div>
                    <div class="modal-footer">
                        <p style="font-size: 13px">https://www.todamateria.com.br/numeros-complexos</p>
                        <button type="button" class="btn btnModal" data-dismiss="modal">Fechar</button>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Arranjos -->
        <div class="modal fade" id="modalArranjos" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><b>Arranjos</b></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>                      
                    </div>
                    <div class="modal-body">
                        <p>Dado um conjunto com uma quantidade n de elementos distintos, chamamos de arranjo dos n elementos, tomados k a k, a qualquer sequência ordenada de k elementos distintos escolhidos entre os n elementos deste conjunto.</p>
                        <p><b>--> Fórmula para calcular o número de arranjos</b></p>
                        <img src="arranjosFormula.png"/>
                        <p>Onde:</p>
                        <p>A<sub>n,k</sub> = quantidade de arranjos <br>n = quantidade de elementos do conjunto <br>k = quantidade de elementos por arranjo <br>n = k</p>
                        <p><i>Exemplo: </i></p>
                        <p>Quantos arranjos de três letras podem ser formados através do conjunto A = {E, I, O, U}? <br>O primeiro passo é observar que o conjunto tem 4 elementos e que cada arranjo será formado por 3 deles. <br>Ou seja, n = 4 e k = 3. <br>Utilizando a fórmula: <img src="arranjosExemplo.png"/>
                    </div>
                    <div class="modal-footer">
                        <p style="font-size: 13px">https://sabermatematica.com.br/arranjos-simples.html</p>
                        <button type="button" class="btn btnModal" data-dismiss="modal">Fechar</button>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Progressão Aritmética -->
        <div class="modal fade" id="modalProgressaoAritmetica" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><b>Progressão Aritmética</b></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>                      
                    </div>
                    <div class="modal-body">
                        <p>O termo <b>progressão aritmética</b> remete a um desenvolvimento gradual de um processo ou uma sucessão. Em matemática, dizemos que esta sucessão é uma sequência.</p>
                        <p>Numa Progressão Aritmética, cada termo de uma sequência é a soma do elemento anterior com sua razão.</p>
                        <img src="progressaoAritmeticaRazao.png"/>
                        <p><b>--> Termo Geral de uma Progressão Aritmética</b></p>
                        <p style="font-size:20px;"><b>a<sub>n</sub> = a<sub>1</sub> + (n-1)r</b></p>
                        <p>E, supondo que não sabemos qual é o seu primeiro termo, podemos usar uma forma generalizada do termo geral da Progressão Aritmética. Sejam m e n posições quaisquer dos termos, temos:</p>
                        <p style="font-size:20px;"><b>a<sub>n</sub> = a<sub>m</sub> + (n-m)r</b></p>
                        <p><b>--> Propriedade Importante </b></p>
                        <p>Qualquer termo de uma Progressão Aritmética, a partir do segundo termo (a<sub>2</sub>), é sempre igual à média aritmética entre os termos anterior e posterior a ele. Então, para n ≥ 2, temos que: <img src="progressaoAritmeticaPropriedade.png"/>
                        <p><i>Exemplo: </i></p>
                        <p>Seja a sequência em progressão aritmética definida por (-7, -2, 3, 8, 13, 18). <img width="450px" src="progressaoAritmeticaExemplo.png"/></p>
                    </div>
                    <div class="modal-footer">
                        <p style="font-size: 13px">https://www.infoescola.com/matematica/progressao-aritmetica/</p>
                        <button type="button" class="btn btnModal" data-dismiss="modal">Fechar</button>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Acontecimentos Independentes -->
        <div class="modal fade" id="modalAcontecimentosIndependentes" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><b>Acontecimentos Independentes</b></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>                      
                    </div>
                    <div class="modal-body">
                        <p>De uma forma intuitiva somos levados a dizer que dois acontecimentos são independentes quando a realização de um deles não tem influência na realização do outro. Como avaliar esta influência? A Probabilidade condicional, um dos conceitos mais importantes da teoria da Probabilidade vai-nos permitir avaliar se, dados dois acontecimentos, a ocorrência de um deles condiciona, de alguma forma, a probabilidade de ocorrência do outro, conduzindo-nos, assim, à noção de independência entre acontecimentos.</p>
                        <p>Dados os acontecimentos A e B, com P(B)>0, diz-se que o acontecimento A é independente do acontecimento B, se <b>P(A) = P(A | B)</b></p>
                        <p>Se o acontecimento A é independente do acontecimento B, então o acontecimento B é independente de A, se P(A)>0. </p>
                        <p>Efetivamente, tendo em consideração a definição de probabilidade condicional, tem-se: <img width="400px" src="acontecimentosIndependentes.png"/></p>
                        <p>Dois acontecimentos A e B são <b>independentes</b> se e só se: <b>P(A∩B)=P(A)xP(B)</b></p>
                    </div>
                    <div class="modal-footer">
                        <p style="font-size: 13px">https://wikiciencias.casadasciencias.org/wiki/<br>index.php/Acontecimentos_independentes</p>
                        <button type="button" class="btn btnModal" data-dismiss="modal">Fechar</button>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Distribuição Binomial -->
        <div class="modal fade" id="modalDistribuicaoBinomial" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><b>Distribuição Binomial</b></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>                      
                    </div>
                    <div class="modal-body">
                        <p>Para construir o modelo binomial, introduzimos uma sequência de ensaios de Bernoulli. Tal sequência é definida por meio das seguintes condições:</p>
                        <p>- Em cada ensaio considera-se apenas a ocorrência ou não-ocorrência de um certo evento que será denominado sucesso (S) e cuja não-ocorrência será denominada falha (F).</p>
                        <p>- Os ensaios são independentes.</p>
                        <p>- A probabilidade de sucesso, que denotaremos por p é a mesma para cada ensaio. A probabilidade de falha será denotada por 1-p.</p>
                        <p>Se a variável aleatória X que contém o número de tentativas que resultam em sucesso tem uma distribuição binomial com parâmetros n e p escrevemos X ~ B(n, p). A probabilidade de ter exatamente k sucessos é dado pela função de probabilidade:</p>
                        <img src="distribuicaoBinomial.png"/>
                        <p>Colocando a função completa, incluindo a Combinação: <img src="distribuicaoBinomialCombinacao.png"/></p>
                        <p>Por meio do desenvolvimento do binómio e algumas operações com expoentes e fatoriais, é possível demonstrar que:</p>
                        <img src="distribuicaoBinomialFinal.png"/>
                        <p><i>Exemplo:</i></p>
                        <p>Três dados comuns e honestos serão lançados. A probabilidade de que o número 6 seja obtido mais de uma vez é: A probabilidade de que seja obtido 2 vezes mais a probabilidade de que seja obtido 3 vezes. Usando a distribuição binomial de probabilidade:</p>
                        <br>Acha-se a probabilidade de que seja obtido 2 vezes:
                        <br><img src="distribuicaoBinomialExemplo1.png"/>
                        <br>Agora a probabilidade de que seja obtido 3 vezes:
                        <br><img src="distribuicaoBinomialExemplo2.png"/>
                        <br>Assim, a resposta é:
                        <br><img src="distribuicaoBinomialExemplo3.png"/>
                    </div>
                    <div class="modal-footer">
                        <p style="font-size: 13px">https://pt.wikipedia.org/wiki/Distribui%C3%A7%C3%A3o_binomial</p>
                        <button type="button" class="btn btnModal" data-dismiss="modal">Fechar</button>
                    </div>
                </div>  
            </div>
        </div>
    </body>
</html>