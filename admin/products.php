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

<body id="reportsPage">
  <div class="container">
    <?php
    session_start();

    include('./includes/sidebar.php');
    include('../middleware/adminMiddleware.php');
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
                <th scope=" col">&nbsp;</th>
                <th scope="col">ID</th>
                <th scope="col">NOME DO ALBUM</th>
                <th scope="col">ARTISTAS</th>
                <th scope="col">CAPA</th>
                <th scope="col">PREÇO</th>
                <th scope="col">QTD</th>
                <th scope="col">ANO DE LANÇAMENTO</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $produtos = getAll("Produtos");

              if (mysqli_num_rows($produtos) > 0) {
                foreach ($produtos as $item) {
              ?>
                  <tr>
                    <th scope="row"><input type="checkbox" class="custom-checkbox" /></th>
                    <td><?= $item['ID']; ?></td>
                    <td><?= $item['NomeAlbum']; ?></td>
                    <td><?= $item['Artistas']; ?></td>
                    <td>
                      <img src="../uploads/<?= $item['Capa']; ?>" alt="<?= $item['NomeAlbum']; ?>" style="width: 50px; margin: 0 auto;">
                    </td>
                    <td><span>$ </span><?= $item['Preco']; ?></td>
                    <td><?= $item['Qtd']; ?></td>
                    <td><?= $item['AnoLacamento']; ?></td>
                    <td>
                      <a href="edit-product.php?id=<?= $item['ID']; ?>">
                        <!-- <form action="code.php" method="POST">
                          <input type="hidden" name="id_produto" value="<?= $item['ID']; ?>">
                        </form> -->
                        <button class="edit-btn" name="edit_produto-btn">
                          Editar
                        </button>
                      </a>
                    </td>
                    <td class="text-center">
                      <a>
                        <form action="code.php" method="POST">
                          <input type="hidden" name="id_produto" value="<?= $item['ID']; ?>">
                          <button type="submit" class="delete-produto" name="delete_produto-btn">
                            <span class="material-symbols-outlined">
                              delete
                            </span>
                          </button>
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
        <div style="display: flex; justify-content: space-around; align-items: center; width: 45%;margin: 0 auto;">
          <button style="width: auto; background-color: green;">
            <a style="margin: unset;color: white; font-weight: 700;" href="add-product.php">Adicionar novo produto</a>
          </button>
          <button class="delete-prod-sele" style="width: auto;">
            Deletar produtos selecionado
          </button>
        </div>
      </div>
    </main>
    <!-- table container -->
    <!-- Product Categories======================================= -->
    <div class="right">
      <div class="top">
        <button id="menu-btn">
          <span class="material-symbols-outlined">
            menu
          </span>
        </button>
        <div class="theme-toggler">
          <span class="material-symbols-outlined active">
            light_mode
          </span>
          <span class="material-symbols-outlined">
            dark_mode
          </span>
        </div>
        <div class="profile">
          <div class="info">
            <p>Ola, <b>Fred</b></p>
            <small class="text-muted">Admin</small>
          </div>
          <div class="profile-photo">
            <img src="./images/IMG_1508.JPG" alt="profile">
          </div>
        </div>
      </div>
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
                        <button type="submit" class="delete-genero" name="delete_genero-btn">
                          <span class="material-symbols-outlined">
                            delete
                          </span>
                        </button>
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
        <!-- table container -->
        <a href="add-product.php">
          <button>
            Adicionar Nova Categoria
          </button>
        </a>
      </div>
    </div>
</body>
<script src="index.js"></script>

</html>