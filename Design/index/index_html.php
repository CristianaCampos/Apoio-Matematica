<?php
	session_start();
?>

<html>
<head>
	<title>Apoio à Matemática</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
	
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="index.css?v=2.3">
	
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
	
  <br><br><br>	

	<div class="container" style="background-image: url('background.png'); background-size: 100% 100%; background-repeat: no-repeat;">
		
	<br><br>
	
	<div class="row">
			<div class="col">
				<button id="slogan" disabled>
					<h3>Aprende Connosco!</h3>
					<h5 style="color:grey;">Descobre uma forma mais engraçada de aprenderes. Estuda connosco e irás ter sucesso!</h5>
				</button>
			</div>
		</div>
		
		<br>

		<div class="row">
			<div class="col">
				<button id="btnComecar" onclick="javascript:window.location='../createAccount/createAccount.html'">
					<h6><b>Começa Agora!</b></h6>
				</button>
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col">
				<button id="btnComecar" onclick="javascript:window.open('../../Manual Apoio/manualApoio.html')">
					<h6><b>Conhece melhor o nosso site!</b></h6>
				</button>
			</div>
		</div>
		
	</div>

	<div class="container">
		<br>
		<div class="row">		
			<div class="col">				
				<div class="text-center"><img src="../../Icons/iconExames.png"/></div>
				<p>Treina a tua <b>matemática</b>!</p>
			</div>

			<div class="col">				
				<div class="text-center"><img src="../../Icons/iconExamesCat.png"/></div>
				<p>Pratica a <b>categoria</b> em que tens mais dificuldades!</p>				
			</div>

			<div class="col">				
				<div class="text-center"><img src="../../Icons/iconPerguntasAleatorias.png"/></div>
				<p>Aprova a tua matemática com <b>perguntas aleatórias</b>!</p>				
			</div>
		
		</div>	

	</div>  
</body>
</html>