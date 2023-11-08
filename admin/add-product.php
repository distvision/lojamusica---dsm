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
  <title>Adicionar produtos</title>
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
        <h1 id="titulo">Adicionar produtos</h1>
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
        <div>
          <form action="code.php" method="POST" class="tm-login-form" enctype="multipart/form-data">
            <div style="display: flex; align-items: flex-start; justify-content: space-between; gap: 2rem;">
              <div>
                <label for="nomealbum">Nome do Album</label>
                <input name="nomealbum" type="text" required />
                <label for="artistas">Artistas Envolvidos</label>
                <input name="artistas" type="text" required />
              </div>
              <div>
                <label for="capa">Adicionar Capa</label>
                <input type="file" name="image" style="border: 2px solid black; padding: 1rem;">
                <label for="slug">Slug</label>
                <input name="slug" type="text" required />
              </div>
              <div>
                <div>
                  <label for="preco">Preço:</label>
                  <input type="number" name="preco" id="ipreco">
                </div>
                <div>
                  <label for="qtd">QTD</label>
                  <input type="number" name="qtd" id="iqtd">
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
                      <option value="<?= $value['ID']; ?>"><?= $value['NomeGenero']; ?></option>
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
                <input type="date" name="anolacamento" style="padding: 18px; font-size: 1rem;">
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
                <input type="checkbox" name="media" id="icassete" value="cassete">
                <label for="icassete">Cassete</label>
                <!--  -->
                <legend>Tipo de Fita: </legend>
                <input type="radio" name="tipofita" id="itipofitanormal" value="normal">
                <label for="itipofitanormal">Normal</label>

                <input type="radio" name="tipofita" id="itipofitacromada" value="cromada">
                <label for="itipofitacromada">Cromada</label>
              </div>
              <div class="tipomedia">
                <input type="checkbox" name="media" id="ividecassete" value="videocassete">
                <label for="ividecassete">Video Cassetes</label>

                <legend>Modos de gravação:</legend>
                <input type="radio" name="modograv" id="ilp" value="lp">
                <label for="ilp">LP</label>
                <input type="radio" name="modograv" id="isp" value="sp">
                <label for="isp">SP</label>
                <input type="radio" name="modograv" id="iep" value="ep">
                <label for="iep">EP</label>
              </div>
              <div class="tipomedia">
                <input type="checkbox" name="media" id="icd" value="cd">
                <label for="icd" style="margin-right: 2rem;">CD</label>
                <label for="cdcapmax">Capacidade maxima</label>
                <input type="number" name="cdcapmax" style="width: 60%;">
              </div>
              <div class="tipomedia">
                <input type="checkbox" name="media" id="icdvideo" value="cdvideo">
                <label for="icdvideo" style="margin-right: 2rem;">CD Video</label>
                <label for="cdvcapmax">Capacidade maxima</label>
                <input type="number" name="cdvcapmax" id="icdvcapmax" style="width: 60%;">
              </div>
              <div class="tipomedia">
                <input type="checkbox" name="media" id="idvd" value="dvd">
                <label for="idvd" style="margin-right: 2rem;">DVD</label>
                <label for="dvdcapmax">Capacidade maxima</label>
                <input type="number" name="dvdcapmax" id="idvdcapmax" style="width: 30%;">
                <legend>Tipo:</legend>
                <input type="radio" name="dvdtipo" id="isimples" value="simples">
                <label for="isimples">Simples</label>
                <input type="radio" name="dvdtipo" id="iduplaface" value="duplaface">
                <label for="iduplaface">Dupla face</label>
              </div>
            </fieldset>
            <button type="submit" name="addprod-btn">Adicionar Produto</button>
          </form>
        </div>
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
      <form action="code.php" method="POST" class="tm-login-form" style="width: 100%;">
        <label for="genero">Genero</label>
        <input name="genero" type="text" required />
        <label for="slug">Slug</label>
        <input name="slug" type="text" required />
        <button type="submit" name="addgenre-btn">Adicionar Genero</button>
      </form>
    </div>

    <script src=" index.js"></script>
</body>

</html>