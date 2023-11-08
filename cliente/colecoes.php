<?php
include('../includes/header.php');
?>
<main>
  <h1 style="text-transform: uppercase;">Coleções</h1>
  <section>
    <div class="grupo-colecoes">
      <?php
      $generos = getAllDisponiveis("Generos");
      if (mysqli_num_rows($generos) > 0) {
        foreach ($generos as $item) {
      ?>
          <a draggable="false" class="genero-banner" href="clientes-produtos.php?genero=<?= $item['Slug']; ?>">
            <div>
              <h4><?= $item['NomeGenero']; ?></h4>
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
<?php include('../includes/footer.php'); ?>