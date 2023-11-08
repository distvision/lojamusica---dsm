<?php

session_start();
include('../config/dbconfig.php');
include('../controller/funcoes.php');

if (isset($_POST['btn_registro'])) {
  $nome = mysqli_real_escape_string($con, $_POST['nome']);
  $celular = mysqli_real_escape_string($con, $_POST['celular']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $senha = mysqli_real_escape_string($con, $_POST['senha']);
  $csenha = mysqli_real_escape_string($con, $_POST['csenha']);


  // checar se email esta registrado
  $check_email_query = "SELECT Email FROM Usuarios WHERE Email='$email' ";
  $check_email_query_run = mysqli_query($con, $check_email_query);

  if (mysqli_num_rows($check_email_query_run) > 0) {
    redirect("../registrarconta.php", "Email ja foi registrado");
    // 
  } else {
    // checar senha & Inserir os dados de Usuario
    if ($senha == $csenha) {
      $insert_query = "INSERT INTO Usuarios (Nome, Email, Celular, Senha) VALUES ('$nome', '$email', '$celular', '$senha' )";

      $insert_query_run = mysqli_query($con, $insert_query);

      if ($insert_query_run) {
        redirect("../login.php", "Registrado com Sucesso");
      } else {
        redirect("../registrarconta.php", "Algo Deu Errado");
      }
    } else {
      redirect("../registrarconta.php", "As senhas não são iguais");
    }
  }
} else if (isset($_POST['btn_login'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $senha = mysqli_real_escape_string($con, $_POST['senha']);

  $login_query = "SELECT * FROM Usuarios WHERE Email='$email' AND Senha='$senha' ";
  $login_query_run = mysqli_query($con, $login_query);

  if (mysqli_num_rows($login_query_run) > 0) {
    // 
    $_SESSION['auth'] = true;

    $dadosDoUsuario = mysqli_fetch_array($login_query_run);
    $nomeUsuario = $dadosDoUsuario['Nome'];
    $emailUsuario = $dadosDoUsuario['Email'];
    $role_as = $dadosDoUsuario['Role_as'];

    $_SESSION['auth_user'] = [
      'nome' => $nomeUsuario,
      'email' => $emailUsuario
    ];

    $_SESSION['role_as'] = $role_as;
    if ($role_as == 1) {
      redirect("../admin/index.php", "Logou com Sucesso");
    } else {
      redirect("../home.php", "Logou com Sucesso");
    }
  } else {
    redirect("../entrar.php", "Dados Invalidos");
  }
}
