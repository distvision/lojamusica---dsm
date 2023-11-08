<?php include('../includes/header.php') ?>
<main>
  <div class="destaques">
    <div class="banner">
      <h1 class="titulo">BEM-VINDO</h1>
      <h2>Gêneros Musicais Disponiveis</h2>
      <div class="generos">
        <?php
        $generos = getAllDisponiveis("Generos");
        if (mysqli_num_rows($generos) > 0) {
          foreach ($generos as $item) {
        ?>
            <a href="clientes-produtos.php?genero=<?= $item['Slug']; ?>">
              <span><?= $item['NomeGenero']; ?></span>
            </a>
        <?php
          }
        } else {
          echo "Dados Nao disponiveis";
        }
        ?>
      </div>
    </div>
    <div>
      <h2>Novidades</h2>
      <div class="produtos">
        <?php
        $produtos = getApenas3("Produtos");

        if (mysqli_num_rows($produtos) > 0) {
          foreach ($produtos as $item) {
        ?>
            <a href="#">
              <div class="album">
                <img src="../uploads/<?= $item['Capa']; ?>" alt="<?= $item['NomeAlbum']; ?>">
                <p><strong>Nome do Disco/Artista:</strong> <?= $item['NomeAlbum']; ?> - <?= $item['Artistas']; ?></p>
                <div class="detalhes-album">
                  <div>
                    <p><strong>Ano:</strong> <?= $item['AnoLacamento']; ?></p>
                    <p><strong>Preço:</strong> <?= $item['Preco']; ?></p>
                  </div>
                  <div>
                    <p><strong>Tipo de Item:</strong> <?= $item['Media']; ?></p>
                    <p><strong>Número de Faixas:</strong> </p>
                    <p><strong>Capacidade Máxima:</strong> <?= $item['Capmax']; ?></p>
                  </div>
                </div>
              </div>
            </a>
        <?php
          }
        } else {
          echo "Dados Nao disponiveis";
        }
        ?>
      </div>
    </div>
    <a class="link-btn" href="colecoes.php">
      Ver Mais
    </a>
  </div>
  <h2>Conheça a equipe</h2>
  <div id="equipe" class="equipe">
    <ul>
      <li>
        <img src="https://randomuser.me/api/portraits/men/24.jpg" alt="">
        <span> João Silva <br> Gerente</span>
      </li>
      <li>
        <img src="https://randomuser.me/api/portraits/women/35.jpg" alt="">
        <span> Maria Santos <br> Seção de Videos</span>
      </li>
      <li>
        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="">
        <span> Carlos Oliveira <br> Seção de Audiso</span>
      </li>
    </ul>
  </div>
  <h2>Fotos do Local</h2>
  <div id="sobre" class="sobre">
    <img src="../admin/images/Local.webp" alt="Foto do interior da loja">
  </div>
</main>
<?php include('../includes/footer.php') ?>