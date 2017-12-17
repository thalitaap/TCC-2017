<?php 
session_start();
$login = $_POST['login_c'];
$senha = $_POST['senha_c'];
$email = $_POST['email_c'];

$connect = new mysqli("localhost","adminuser","password","tccjogo");

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";

$select = mysqli_query($connect,$query_select);

$array = mysqli_fetch_array($select);

$logarray = $array['login'];


  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='index.php';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='index.php';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha,email) VALUES ('$login','$senha','$email')";
        $insert = mysqli_query($connect,$query);

        if($insert){
          $_SESSION['login'] = $login;
          header("Location:criarchar.php");
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='index.php'</script>";
        }
      }
    }
?>