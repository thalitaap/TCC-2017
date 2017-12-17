<?php
session_start();
$login = $_SESSION['login'];
$moedaOuro = $_SESSION['moedaOuro'];
$moedaPrata = $_SESSION['moedaPrata'];
$experiencia = $_SESSION['experiencia'];

$moedaOuro +=1;
$moedaPrata +=100;
$experiencia +=100;

$connect = new mysqli("localhost","adminuser","password","tccjogo");

$query_select = "UPDATE usuarios SET moedaOuro = '$moedaOuro', moedaPrata = '$moedaPrata', experiencia = '$experiencia'  WHERE login = '$login'";
$insert = mysqli_query($connect,$query_select);
if($insert){
          $_SESSION['moedaOuro'] = $moedaOuro;
	  $_SESSION['moedaPrata'] = $moedaPrata;
          $_SESSION['experiencia'] = $experiencia;
?>

	  <a href="inicio.php">Clique aqui para voltar para a pagina principal </a>

<?php
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='inicio.php'</script>";
        }

?>
