<?php
include('../includes/header.php');

if (isset($_GET['genero'])) {

  $genero_slug = $_GET['genero'];
  $genero_dado = getSlug("Generos", $genero_slug);
  $genero = mysqli_fetch_array($genero_dado);
  $genID = $genero['ID'];
?>
  <main>
    <h1 style="text-transform: uppercase;">Coleçoes / <?= $genero['NomeGenero']; ?></h1>
    <section>
      <div class="grupo-colecoes">
        <?php
        $produtos = getProdByGeneros($genID);

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
    </section>
  </main>

<?php
} else {
  echo "Algo deu errado";
}
include('../includes/footer.php'); ?>