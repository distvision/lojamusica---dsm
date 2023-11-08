<?php include('../includes/header.php') ?>
<main>
  <div style="height: 100vh; padding: 15% 0;">
    <h1>Iniciar Sessão</h1>
    <form style="width: 500px;" action="processar.php" method="post">
      <div>
        <div>
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required><br><br>
        </div>
        <div>
          <label for="senha">Senha:</label>
          <input type="password" maxlength="8" id="senha" name="senha" required>
        </div><br>
        <input type="submit" value="Enviar">
      </div>
  </div>
  </form>
</main>
<?php include('../includes/footer.php') ?>