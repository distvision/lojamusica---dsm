<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
  <!-- materila CDN -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- styles -->
  <!-- <link rel="stylesheet" href="./styles.css"> -->
  <link rel="stylesheet" href="./cliente/stylecliente.css">
  <title>Login Page - Product Admin Template</title>
</head>

<body>
  <?php
  session_start();

  if (isset($_SESSION['auth'])) {
    $_SESSION['message'] = "Ja Estas com a Seccao iniciada";
    header('Location: index.php');
    exit();
  }
  ?>
  <main>
    <div style="height: 100vh; padding: 15% 0; text-align: center;">
      <h1>Iniciar Sessão</h1>
      <form action="controller/autenticacao.php" method="POST" style="width: 500px;">
        <div>
          <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>
          </div>
          <div>
            <label for="senha">Senha:</label>
            <input type="password" maxlength="8" id="senha" name="senha" required>
          </div><br>
          <div class="grupo-form">
            <input type="submit" name="btn_login" value="Enviar">
          </div>
        </div>
      </form>
      <a class="criar-conta" href="registrarconta.php">
        <button>Criar Conta</button>
      </a>
    </div>
  </main>
  <div class="box">
    <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert" id="senha-error" role="alert">
        <strong>Desculpa :(</strong>, <?= $_SESSION['message']; ?>
        <button class="btn" type="button" id="closeDiv">X</button>
      </div>
    <?php
      unset($_SESSION['message']);
    }
    ?>
  </div>
</body>
<script src="index.js"></script>

</html>