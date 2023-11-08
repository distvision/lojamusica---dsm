<?php
session_start();

if (isset($_SESSION['auth'])) {
  unset($_SESSION['auth']);
  unset($_SESSION['auth_user']);
  $_SESSION['message'] = "Secacao Encerada com Sucesso";
}

header('Location: ./entrar.php');
