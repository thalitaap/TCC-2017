<!DOCTYPE html>
<?php
  session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:index.html');
	}
$logado = $_SESSION['login'];
$moedaOuro = $_SESSION['moedaOuro'];
$moedaPrata = $_SESSION['moedaPrata'];
$experiencia = $_SESSION['experiencia'];
$corpo = $_SESSION['corpoID'];

?>
<html lang="en">
<!-- SITE SEM NOME DE RPG - V1.2 - Página do jogo tutorial 
  -- Desenvolvido para o TCC que apresenta um website para ensinar programação
  -- através de um jogo estilo RPG com missões fazendo o papel de aulas.
  -- Log atualizado das versões:
  -- V1.0: Estrutura base do site, ainda sem imagens ou conteúdo back-end;
  -- V1.1: Ainda utilizando a estrutura base, adicionar uma animação no container central e algumas infos no lateral;
  --	  *A animação é apenas para teste e contém erros.
  -- V1.2: Inserção das novas páginas e testes para o conteúdo que cada uma terá;
  -->
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPG - Site Teste</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/complementar.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
    
<!-- INICIO ---------------------------------------------------------------------------->
<!-- Topo - acima do menu -->
    <div class="container-fluid"><!-- topo 01 -->
   	 	<div class="row"><!-- topo 02 -->
    		<div class="col-md-12 espaçoTopo"><!-- topo 03 -->
    		</div><!-- fim topo 03 -->
  		</div><!-- fim topo 02 --> 
	</div><!-- fim topo 01 -->
    
<!-- Topo - Menu -->
    <nav class="navbar navbar-default"> <!-- menu 01 -->
    	<div class="container-fluid"> <!-- menu 02 -->
         <div class="navbar-header"> <!-- menu 03 -->
    <!-- O trecho abaixo cria um botão lateral para menu, usado em dispositivos mobile -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menuprincipal"><span class="sr-only">Navegar</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <!-- Fim do trecho para botão menu mobile -->

   </div><!-- fim menu 03 -->
     <div class="collapse navbar-collapse" id="menuprincipal"> <!-- menu 04 -->
      <ul class="nav navbar-nav menu-itens navbar-btn"> <!-- lista menu -->
        <li><a href="inicio.php">Início</a></li>
        <li class="active"><a href="missoes.php">Missões</a></li>
        <li><a href="conquistas.php">Conquistas</a></li>
        <li><a href="personalizar.php">Personalizar</a></li>
    </ul><!-- fim lista menu -->
    <ul class="nav navbar-nav navbar-right menu-itens"> <!-- logout menu --> 
      	<li class="navbar-btn"><a href="logout.php"><span class="glyphicon glyphicon-remove"></span> Logout</a></li>
      </ul> <!-- fim logout menu -->
     
    	</div><!-- fim menu 04 -->
      </div> <!-- fim menu 02 -->
    </nav> <!-- fim menu 01 -->
    
<!-- Colunas -->
  <div class="container-fluid"> <!-- coluna 01 -->
  <div class="row"> <!-- coluna 02 -->
<!-- Esquerda -->
    <div class="col-md-3 espaçoEsquerdo"><!-- coluna esquerda 01 -->
    	<div class="col-md-1 quadro-char"><!-- quadro personagem -->
                <?php 
		switch ("$corpo") {
		case "1":
		?><img src="images/char1.png" class="avatares"><?php
		break;
		case "2":
		?><img src="images/char2.png" class="avatares"><?php
		break;
		case "3":
		?><img src="images/char3.png" class="avatares"><?php
		break;
		case "4":
		?><img src="images/char4.png" class="avatares"><?php
		break;
		}
		?>
        
        </div><!-- fim quadro personagem -->
    </div><!-- fim coluna esquerda 01 -->
<!-- Central -->
    <div class="col-md-6 centro-palco"><!-- coluna centro 01 -->
	<iframe src="jogoTutorial.html" id="animacao" scrolling="no"></iframe> 
    </div><!-- fim coluna centro 01-->
<!-- Direita -->
    <div class="col-lg-offset-9 quadro-info"><!-- coluna direita 01 -->
    <p class="texto-info"> Bem-vindo de volta <b><?php echo"$logado"; ?></b> !<br></p>
     <span class="texto-dados" style="font-size:16px;"><span class="glyphicon glyphicon-star"></span> Nível: 1 <br></span>
     <span class="texto-dados"> Experiência:</span>
     <div class="progress"> <!-- barra exp 0 -->
    <div class="progress-bar-info progress-bar progress-bar-striped barra-exp" style=" width:<?php echo $experiencia/10 ?>% ;" role="progressbar" aria-valuenow="<?php echo "$experiencia"; ?>" aria-valuemin="0" aria-valuemax="1000"><!-- barra exp 1 -->
     <span><?php echo"$experiencia" ?>/1000</span>
    </div><!-- fim barra exp 1--> 
    </div><!-- fim barra exp 0-->
    <br>
    <span class="texto-dados"> Moedas: </span><span id="ouro"><?php echo"$moedaOuro"; ?> <span class="glyphicon glyphicon-copyright-mark"></span></span><span id="prata"> <?php echo"$moedaPrata"; ?> <span class="glyphicon glyphicon-copyright-mark"></span></span><br><br>
    <span class="texto-dados"> Conquistas:</span>
    </div><!-- fim coluna direita 01 -->
  </div><!-- fim coluna 02 -->
  </div><!-- fim coluna 01 -->
  
<!-- Rodapé -->
<footer class="container-fluid text-center rodape"> 
  <p>Website RPG - 2017</p>
</footer>
  
<!-- FIM --------------------------------------------------------------------------------->
  </body>
</html>