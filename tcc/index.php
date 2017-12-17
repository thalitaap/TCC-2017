<?php 
	session_destroy(); 
?>
<!DOCTYPE html>
<html lang="en">
<!-- SITE SEM NOME DE RPG - V1.3 - Pág. index/login
  -- Desenvolvido para o TCC que apresenta um website para ensinar programação
  -- através de um jogo estilo RPG com missões fazendo o papel de aulas.
  -- Log atualizado das versões:
  -- V1.0: Estrutura base do site, ainda sem imagens ou conteúdo back-end;
  -- V1.1: Ainda utilizando a estrutura base, adicionar uma animação no container central e algumas infos no lateral;
  --	  *A animação é apenas para teste e contém erros.
  -- V1.2: Inserção das novas páginas e testes para o conteúdo que cada uma terá;
  -- V1.3: Criação de página inicial para login e cadastro de usuários
  -->
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPG - Site Teste</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

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

<!-- TOPO -->
    <div class="container-fluid"><!-- topo 01 -->
   	 	<div class="row"><!-- topo 02 -->
    		<div class="col-md-12 espaçoTopo"><!-- topo 03 -->
    		</div><!-- fim topo 03 -->
  		</div><!-- fim topo 02 --> 
	</div><!-- fim topo 01 -->
<br><br>
<!-- Colunas -->
  <div class="container-fluid"> <!-- coluna 01 -->
  <div class="row"> <!-- coluna 02 -->
  
<!-- Esquerda -->
	<div class="col-md-6 prints"><!-- coluna esquerda 01 -->
    <!-- Imagem ficará como background do container -->	
    </div><!-- fim coluna esquerda 01 -->
<!-- Direita -->
	<div class="col-md-offset-6"><!-- coluna direita 01 -->
    <p class="texto-info text-justify">
	Bem-vindo a um mundo mágico onde programação e jogos andam lado a lado! Neste universo você pode aprender mais
sobre como é programar, descobrir linguagens de programação, e ainda se diverte com pequenos jogos educativos que usam 
como base o universo RPG (<i>Role Playing Game</i>).
    </p>	
    <br><br><br>
    <p class="texto-info text-justify">Embarque nessa aventura!
    <br><a href="#logincadastro"><font color="#D01B1E">Clique aqui</font></a> para se conectar ou criar a sua conta!
    </p>
    </div><!-- fim coluna direita 01 --> 
  </div><!-- fim coluna 02 -->
  </div><!-- fim coluna 01 -->
  <br><br><br><br>
<!-- Parte abaixo da âncora -->
  <div class="container-fluid"> <!-- login/cadastro 01 -->
  <div class="row centrar"> <!-- login/cadastro 02 -->
  <div class="col-md-9" id="logincadastro"> <!-- login/cadastro 03 -->
  <!-- Login -->
  <div class="col-md-3 logcad_base"> <!-- login 01 -->
  <h2 class="titulo_logcad">Login</h2>
  <br><br>
  <form method="POST" action="login.php"> <!-- formulario login -->
  <p class="texto_logcad text-justify">
  Usuário: </p>
 <input type="text" name="login" id="login"><br><br>
  <p class="texto_logcad text-justify">
  Senha: </p>
  <input type="password" name="senha" id="senha"><br><br>
  <input type="submit" value="Entrar" id="entrar" name="entrar">
  </form> <!-- fim formulario login -->
  </div><!-- fim login 01 -->
  
  <div class="col-md-1 divisor"></div>
  <!-- Cadastro -->
   <div class="col-md-3 logcad_base"> <!-- cadastro 01 -->
  <h2 class="titulo_logcad">Cadastro</h2>
  <br>
  <form method="POST" action="cadastro.php"> <!-- formulario cadastro -->
  <p class="texto_logcad text-justify">
  Usuário: </p>
 <input type="text" name="login_c" id="login_c"><br><br>
  <p class="texto_logcad text-justify">
  Senha: </p>
  <input type="password" name="senha_c" id="senha_c"><br><br>
  <p class="texto_logcad text-justify">
  E-mail: </p>
  <input type="email" name="email_c" id="email_c"><br><br>
  <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
  </form> <!-- fim formulario cadastro -->
  </div><!-- fim cadastro 01 -->
  </div> <!-- fim login/cadastro 03 -->
  </div> <!-- fim login/cadastro 02 -->
  </div> <!-- fim login/cadastro 01 -->
  <br><br>
<!-- Rodapé -->
<footer class="container-fluid text-center rodape"> 
  <p>Website RPG - 2017</p>
</footer>
  
<!-- FIM --------------------------------------------------------------------------------->
  </body>
</html>