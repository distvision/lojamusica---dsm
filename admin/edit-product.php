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
  <title>Add Product - Dashboard HTML Template</title>
</head>

<body>
  <div class="container">
    <?php
    session_start();

    include('./includes/sidebar.php');
    include('../middleware/adminMiddleware.php');

    ?>
    <main>
      <div>
        <h1 id="titulo">Edit Product</h1>
      </div>
      <div>
        <?php if (isset($_SESSION['message'])) { ?>
          <div class="alert" id="senha-error" role="alert">
            <?= $_SESSION['message']; ?>
            <a href="add-product.php">
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
      <div>
        <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $produto = getByID("Produtos", $id);
          if (mysqli_num_rows($produto) > 0) {
            $data = mysqli_fetch_array($produto);
        ?>
            <div>
              <form action="code.php" method="POST" class="tm-login-form" enctype="multipart/form-data">
                <input type="hidden" name="id_produto" value="<?= $data['ID']; ?>">
                <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 2rem;">
                  <div>
                    <label for="nomealbum">Nome do Album</label>
                    <input name="nomealbum" type="text" value="<?= $data['NomeAlbum']; ?>" required />
                    <label for="artistas">Artistas Envolvidos</label>
                    <input name="artistas" type="text" value="<?= $data['Artistas']; ?>" required />
                  </div>
                  <div>
                    <label for="capa">Adicionar Capa</label>
                    <div style="display: flex; margin-bottom: .5rem;">
                      <input type="hidden" name="capa_antiga" value="<?= $data['Capa']; ?>">
                      <input type="file" name="image" style="border: 2px solid black; padding: 0 1rem; width: 50%;">
                      <img src="../uploads/<?= $data['Capa']; ?>" alt="<?= $data['NomeAlbum']; ?>" style="width: 50px;height: 50px; margin: 0 auto;">
                    </div>
                    <label for="slug">Slug</label>
                    <input name="slug" type="text" value="<?= $data['Slug']; ?>" required />
                  </div>
                  <div>
                    <div>
                      <label for="preco">Preço:</label>
                      <input type="number" name="preco" id="ipreco" value="<?= $data['Preco']; ?>">
                    </div>
                    <div>
                      <label for="qtd">QTD</label>
                      <input type="number" name="qtd" id="iqtd" value="<?= $data['Qtd']; ?>">
                    </div>
                  </div>
                </div>
                <div style="display: flex; gap: 10px; align-items: center; justify-content: space-between;">
                  <div>
                    <label for="">Genero</label>
                    <select style="border: 2px solid red; padding: 1rem;" name="genero" id="genero">
                      <option selected>Selecione o Genero</option>
                      <?php
                      $genero = getAll("Generos");
                      if (mysqli_num_rows($genero) > 0) {
                        foreach ($genero as $value) { ?>
                          <option value="<?= $value['ID']; ?>" <?= $data['Genero'] == $value['ID'] ? 'selected' : '' ?>>
                            <?= $value['NomeGenero']; ?>
                          </option>
                        <?php
                        }
                      } else { ?>
                        <option value="">Nenhum dado encotrado</option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                  <div>
                    <label for="anolacamento">Ano de lancamento</label>
                    <input type="date" name="anolacamento" value="<?= $data['AnoLacamento']; ?>" style="padding: 18px; font-size: 1rem;">
                  </div>
                  <div>
                    <label for="numfaixas">Numero de Faixas</label>
                    <input type="number" name="numfaixas">
                  </div>
                </div>
                <!-- tipomedia -->
                <fieldset style="border: 2px solid red; padding: 1rem;">

                  <legend for="tipomedia" style="padding: 0 .5rem;">Tipo de Media</legend>
                  <div class="tipomedia">
                    <input type="checkbox" name="media" id="icassete" <?= $data['Media'] == "cassete" ? 'checked' : '' ?> value="<?= $data['Media']; ?>">
                    <label for="icassete">Cassete</label>
                    <!--  -->
                    <legend>Tipo de Fita: </legend>
                    <input type="radio" name="tipofita" id="itipofitanormal" <?= $data['Tipofita'] == "normal" ? 'checked' : '' ?> value="<?= $data['Tipofita']; ?>">
                    <label for="itipofitanormal">Normal</label>

                    <input type="radio" name="tipofita" id="itipofitacromada" <?= $data['Tipofita'] == "cromada" ? 'checked' : '' ?> value="<?= $data['Tipofita']; ?>">
                    <label for="itipofitacromada">Cromada</label>
                  </div>
                  <div class="tipomedia">
                    <input type="checkbox" name="media" id="ividecassete" <?= $data['Media'] == "videocassete" ? 'checked' : '' ?> value="<?= $data['Media']; ?>">
                    <label for="ividecassete">Video Cassetes</label>

                    <legend>Modos de gravação:</legend>
                    <input type="radio" name="modograv" id="ilp" <?= $data['Modograv'] == "lp" ? 'checked' : '' ?> value="<?= $data['Modograv']; ?>">
                    <label for="ilp">LP</label>
                    <input type="radio" name="modograv" id="isp" <?= $data['Modograv'] == "sp" ? 'checked' : '' ?> value="<?= $data['Modograv']; ?>">
                    <label for="isp">SP</label>
                    <input type="radio" name="modograv" id="iep" <?= $data['Modograv'] == "ep" ? 'checked' : '' ?> value="<?= $data['Modograv']; ?>">
                    <label for="iep">EP</label>
                  </div>
                  <div class="tipomedia">
                    <input type="checkbox" name="media" id="icd" <?= $data['Media'] == "cd" ? 'checked' : '' ?> value="<?= $data['Media']; ?>">
                    <label for="icd" style="margin-right: 2rem;">CD</label>
                    <label for="cdcapmax">Capacidade maxima</label>
                    <input type="number" name="cdcapmax" value="<?= $data['Capmax']; ?>" style="width: 60%;">
                  </div>
                  <div class="tipomedia">
                    <input type="checkbox" name="media" id="icdvideo" <?= $data['Media'] == "cdvideo" ? 'checked' : '' ?> value="<?= $data['Media']; ?>">
                    <label for="icdvideo" style="margin-right: 2rem;">CD Video</label>
                    <label for="cdvcapmax">Capacidade maxima</label>
                    <input type="number" name="cdvcapmax" id="icdvcapmax" value="<?= $data['Capmax']; ?>" style="width: 60%;">
                  </div>
                  <div class="tipomedia">
                    <input type="checkbox" name="media" id="idvd" <?= $data['Media'] == "dvd" ? 'checked' : '' ?> value="<?= $data['Media']; ?>">
                    <label for="idvd" style="margin-right: 2rem;">DVD</label>
                    <label for="dvdcapmax">Capacidade maxima</label>
                    <input type="number" name="dvdcapmax" id="idvdcapmax" value="<?= $data['Capmax']; ?>" style="width: 30%;">
                    <legend>Tipo:</legend>
                    <input type="radio" name="dvdtipo" id="isimples" <?= $data['Dvdtipo'] == "simples" ? 'checked' : '' ?> value="<?= $data['Dvdtipo']; ?>">
                    <label for="isimples">Simples</label>
                    <input type="radio" name="dvdtipo" id="iduplaface" <?= $data['Dvdtipo'] == "duplaface" ? 'checked' : '' ?> value="<?= $data['Dvdtipo']; ?>">
                    <label for="iduplaface">Dupla face</label>
                  </div>
                </fieldset>
                <button type="submit" name="update-prod-btn">Atualizar Produto</button>
              </form>
            </div>
        <?php
          } else {
            echo "Produto nao encontrado, para o id dado";
          }
        } else {
          echo "id nao encontrado";
        }
        ?>
      </div>
    </main>
    <!--  -->
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
    </div>

    <script src=" index.js"></script>
</body>

</html>