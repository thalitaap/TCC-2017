<!DOCTYPE html>
<?php
session_start();
$connect = new mysqli("localhost","adminuser","password","tccjogo");
$login = $_SESSION['login'];

?>

<html lang="en">
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
<!-- Topo -->
    <div class="container-fluid"><!-- topo 01 -->
   	 	<div class="row"><!-- topo 02 -->
    		<div class="col-md-12 espaçoTopo"><!-- topo 03 -->
    		</div><!-- fim topo 03 -->
  		</div><!-- fim topo 02 --> 
	</div><!-- fim topo 01 -->
    
 <!-- Avatares : -->
 <br><p class="texto-char">
    Selecione seu avatar :
 </p><br>
<form method="post" action="criarchar.php">
<center><input type="radio" name="chars" id="c1" value="1" checked>
<label for="c1"><img class="avatares" src="images/char1.png" alt=""></label>
<input type="radio" name="chars" id="c2" value="2">
<label for="c2"><img class="avatares" src="images/char2.png" alt=""></label>
<input type="radio" name="chars" id="c3" value="3">
<label for="c3"><img class="avatares" src="images/char3.png" alt=""></label>
<input type="radio" name="chars" id="c4" value="4">
<label for="c4"><img class="avatares" src="images/char4.png" alt=""></label></center><br><br>
<center><input type="submit" value="Selecionar" id="selecionar" name="selecionar"></center>
</form>
<br><br><br>
<?php

	if (isset($_POST['selecionar'])) {
			$corpo = $_POST['chars'];
			$query1 = "UPDATE usuarios SET corpoID = $corpo WHERE login = '$login' ";
            $insert = mysqli_query($connect,$query1);
		if($insert){ header("Location:index.php"); }
	}
?>

<!-- Após selecionar exibe: -->
<!-- Rodapé -->
<footer class="container-fluid text-center rodape"> 
  <p>Website RPG - 2017</p>
</footer>

<!-- FIM --------------------------------------------------------------------------------->
  </body>
</html>