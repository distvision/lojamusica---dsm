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
  <link rel="stylesheet" href="./cliente/stylecliente.css">
  <title>Login Page - Product Admin Template</title>
</head>


<body>
  <div class="container">
    <?php
    session_start();

    if (isset($_SESSION['auth'])) {
      $_SESSION['message'] = "Ja Estas com a Seccao iniciada";
      header('Location: index.php');
      exit();
    }

    ?>
    <main>
      <div style="height: 100vh; padding: 10% 0; text-align: center;">
        <h1 id="titulo">Formulario de Registro</h1>
        <form action="controller/autenticacao.php" method="POST" class="tm-login-form">
          <div style="text-align: left;">
            <label for="nome">Nome de Usuario</label>
            <input name="nome" type="text" placeholder="Digite o Seu Nome" required />
            <label for="celular">Numero de Celular</label>
            <input name="celular" type="number" placeholder="Digite o Seu Numero de Celular" required />
            <label for="email">Endereço de Email</label>
            <input name="email" type="email" placeholder="Digite o Seu Email" required />
            <label for="senha">Senha</label>
            <input name="senha" id="senha" type="password" minlength="8" placeholder="Digite a sua Senha" required />
            <label>Confirmar a Senha</label>
            <input name="csenha" id="csenha" type="password" minlength="8" placeholder="Digite a sua Senha" required />
          </div>
          <div>
            <button type="submit" name="btn_registro">Registrar Conta</button>
          </div>
        </form>
        <a class="criar-conta" href="entrar.php"><button>Iniciar Sessão</button>
        </a>
      </div>
    </main>
    <div class="right">
      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert" id="senha-error" role="alert">
          <strong>Desculpa :(</strong>, <?= $_SESSION['message']; ?>
          <button class="alert-btn" type="button" id="closeDiv">X</button>
        </div>
      <?php
        unset($_SESSION['message']);
      }
      ?>
    </div>
</body>
<script src="index.js"></script>

</html>