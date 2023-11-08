<?php
include('../controller/funcoes.php');

if (isset($_SESSION['auth'])) {
  if ($_SESSION['role_as'] != 1) {

    if ($_SESSION['role_as'] == 0) {
      redirect("../home.php", "Acesso Não Autorizado");
    }
  }
} else {
  redirect("../login.php", "Inicie Sessão para continuar");
}
