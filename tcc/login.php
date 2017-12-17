<?php 
  session_start();	
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = new mysqli("localhost","admin","password","tccjogo");
    if (isset($entrar)) {         
      $verifica = mysqli_query($connect,"select * from usuarios where login = '$login' and senha = '$senha'") or die("Erro ao selecionar login");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
          die();
        }else{
          $sql = mysqli_query($connect,"SELECT * FROM usuarios where login = '$login'");
	  $row = mysqli_fetch_assoc($sql);
          $_SESSION['login'] = $login;
	  $_SESSION['senha'] = $senha;
	  $_SESSION['moedaOuro'] = $row['moedaOuro'];
	  $_SESSION['moedaPrata'] = $row['moedaPrata'];
	  $_SESSION['experiencia'] = $row['experiencia'];
	  $_SESSION['corpoID'] = $row['corpoID'];
          header("Location:inicio.php");
        }
    }
?>