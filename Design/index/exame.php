<?php
	session_start();
?>

<html>
    <head>
        <title>Apoio à Matemática - Exame</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
        
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="index.css?v=2.5">
        
        <link rel="icon" href="logo_icon.ico">

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
    </head>
    <body id="page-top">
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
    <div class="container" id="exercicios"></div>
    <script>
        var paptest = 0;
        var listaExercicios = ["../../Exercícios/acontecimentosIndependentes (falar)/index.html", "../../Exercícios/arranjos (falar)/index.html", "../../Exercícios/complexos (falar)/index.html", "../../Exercícios/estudoElipse/index.html", "../../Exercícios/geometria (falar)/index.html", "../../Exercícios/probabilidadeFatoriais (falar)/index.html", "../../Exercícios/produtoEscalar (falar)/index.html", "../../Exercícios/progressaoAritmetica/index.html", "../../Exercícios/sucessoes/index.html"];            
        var altura = [380, 300, 350, 350, 650, 350, 350, 200, 200];

		console.log("T: " + listaExercicios.length);
		console.log(listaExercicios[listaExercicios.length-1]);
		console.log(altura[listaExercicios.length-1]);
		
        var total_exercicios = 5;
        var respostas_certas = 0;
        var respostas_erradas = 0;
    
        var exercicios=[];

        function randomNeM(n, m)
        {
            return Math.floor(Math.random() * (m-n+1))+(n);
        }
    
        while (exercicios.length < total_exercicios)
        {
            exercicio= randomNeM(0, 8);
            inserir(exercicio, exercicios);
        }
        for (var i=0; i<exercicios.length; i++)
        {
            document.getElementById("exercicios").innerHTML += "<iframe id='iframe' scrolling='no' frameBorder='0' width='100%' height='" + altura[exercicios[i]] + "' src='" + listaExercicios[exercicios[i]] + "'></iframe>";
        }

        function inserir(n,v)
        {
            var pos = 0;
            var encontrou = false;
            
            while (pos < v.length && !encontrou)
            {
                if (v[pos] == n)
                    encontrou = true;
        
                pos++;				
            }
            
            if (!encontrou)
                v[v.length] = n;

            return v;			
        }
    </script>
	</body>
</html>


