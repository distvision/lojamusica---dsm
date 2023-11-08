<?php include('../includes/header.php') ?>
<main class="registrar">
  <h1>Formulário de Subscrição</h1>
  <form action="processar.php" method="post">
    <!-- Informações Pessoais -->
    <div>
      <div class="grupo-form">
        <div>
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required>
        </div><br>
        <div>
          <label for="numero_bi">Número de BI:</label>
          <input type="text" id="numero_bi" name="numero_bi" required><br><br>
        </div>
      </div>
      <div class="grupo-form">
        <div>
          <label for="senha">Senha:</label>
          <input type="password" maxlength="8" id="senha" name="senha" required>
        </div><br>
        <div>
          <label for="confsenha">Confirmar Senha:</label>
          <input type="password" maxlength="8" id="confsenha" name="confsenha" required><br><br>
        </div>
      </div>

      <div>
        <fieldset style="padding: .5rem;">
          <legend style="padding:0 .5rem;">Gênero:</legend>
          <input type="radio" id="masculino" name="genero" value="Masculino">
          <label for="masculino">Masculino</label>
          <input type="radio" id="feminino" name="genero" value="Feminino">
          <label for="feminino">Feminino</label>
        </fieldset><br>
        <div>
          <label for="data_nascimento">Data de Nascimento:</label>
          <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>
        </div>
      </div>

      <!-- Endereço -->
      <div class="grupo-form">
        <div>
          <label for="endereco">Endereço*:</label>
          <input type="text" id="endereco" name="endereco" required>
        </div>
        <div>
          <label for="cidade">Cidade*:</label>
          <input type="text" id="cidade" name="cidade" required>
        </div>
      </div>

      <!-- Informações de Contato -->
      <div class="grupo-form">
        <div>
          <label for="telefone">Telefone*:</label>
          <input type="tel" id="telefone" name="telefone" required><br><br>
        </div>
        <div>
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required><br><br>
        </div>
      </div>

      <!-- Local de Trabalho ou Estudo -->
      <div class="grupo-form">
        <div>
          <label for="local_trabalho">Nome da Empresa ou Instituição:</label>
          <input type="text" id="local_trabalho" name="local_trabalho"><br><br>
        </div>
        <div>
          <label for="endereco_local_trabalho">Endereço da Empresa ou Instituição:</label>
          <input type="text" id="endereco_local_trabalho" name="endereco_local_trabalho"><br><br>
        </div>
      </div>

      <!-- Autorização e Consentimento -->
      <label for="termos">Eu aceito os termos e condições:</label>
      <input type="checkbox" id="termos" name="termos" required><br><br>

      <input type="submit" value="Enviar">
    </div>
  </form>
</main>
<?php include('../includes/footer.php') ?>