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
  <link rel="stylesheet" href="./styles.css">
  <title>Product Page - Admin HTML Template</title>
</head>

<body>
  <div class="container">
    <?php
    session_start();

    include('includes/sidebar.php');
    include('./controller/funcoescliente.php');
    ?>
    <main class="main-prod">
      <div>
        <h1 id="titulo">Produtos</h1>
      </div>
      <div>
        <?php if (isset($_SESSION['message'])) { ?>
          <div class="alert" id="senha-error" role="alert">
            <?= $_SESSION['message']; ?>
            <a href="products.php">
              <button class="alert-btn" type="button" id="closeDiv">
                X
              </button>
            </a>
          </div>
        <?php
          unset($_SESSION['message']);
        }
        ?>
      </div>
      <div id="Produtos" class="recent-orders produtos">
        <div class="table-wrapper">
          <table class="table-prod">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME DO ALBUM</th>
                <th scope="col">ARTISTAS</th>
                <th scope="col">CAPA</th>
                <th scope="col">PREÇO</th>
                <th scope="col">QTD</th>
                <th scope="col">ANO DE LANÇAMENTO</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $produtos = getAll("Produtos");

              if (mysqli_num_rows($produtos) > 0) {
                foreach ($produtos as $item) {
              ?>
                  <tr>
                    <td><?= $item['ID']; ?></td>
                    <td><?= $item['NomeAlbum']; ?></td>
                    <td><?= $item['Artistas']; ?></td>
                    <td>
                      <img src="./uploads/<?= $item['Capa']; ?>" alt="<?= $item['NomeAlbum']; ?>" style="width: 50px; margin: 0 auto;">
                    </td>
                    <td><span>$ </span><?= $item['Preco']; ?></td>
                    <td><?= $item['Qtd']; ?></td>
                    <td><?= $item['AnoLacamento']; ?></td>
                  </tr>
              <?php
                }
              } else {
                echo "no records found";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <!-- table container -->
    <!-- Product Categories======================================= -->
    <div class="right" style="margin-top: 5rem;">
      <!--  -->
      <div class="recent-orders">
        <h2 style="padding: 0 0 1rem 0;">Generos Musicais Disponiveis</h2>
        <table>
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">GENEROS</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $genero = getAll("Generos");

            if (mysqli_num_rows($genero) > 0) {
              foreach ($genero as $item) {
            ?>
                <tr>
                  <td><?= $item['ID']; ?></td>
                  <td><?= $item['NomeGenero']; ?></td>
                  <td class="text-center">
                    <a href="edit-genero.php?id=<?= $item['ID']; ?>">
                      <form action="code.php" method="POST">
                        <input type="hidden" name="id_genero" value="<?= $item['ID']; ?>">
                      </form>
                    </a>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "no records found";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
</body>
<script src="index.js"></script>

</html>