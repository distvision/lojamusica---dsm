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
    ?>
    <main>
      <div>
        <h1 id="titulo">Produtos</h1>
      </div>
      <div id="Produtos" class="recent-orders produtos">
        <table border="1">
          <thead>

            <tr>
              <th>Gênero</th>
              <th>Título da Música</th>
              <th>Artista</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="3">Rock</td>
              <td>Bohemian Rhapsody</td>
              <td>Queen</td>
            </tr>
            <tr>
              <td>Stairway to Heaven</td>
              <td>Led Zeppelin</td>
            </tr>
            <tr>
              <td>Hotel California</td>
              <td>Eagles</td>
            </tr>
            <tr>
              <td rowspan="2">Pop</td>
              <td>Shape of You</td>
              <td>Ed Sheeran</td>
            </tr>
            <tr>
              <td>Billie Jean</td>
              <td>Michael Jackson</td>
            </tr>
          </tbody>
        </table>
        <a href="add-product.php">Add new product</a>
        <button>
          Delete selected products
        </button>
      </div>
    </main>
    <!-- table container -->
    <!-- Product Categories======================================= -->
    <div class="right">
      <div class="recent-orders">
        <h2>Product Categories</h2>
        <table>
          <tbody>
            <tr>
              <td>Product Category 1</td>
              <td class="text-center">
                <a href="#" class="tm-product-delete-link">
                  <span class="material-symbols-outlined">
                    delete
                  </span>
                </a>
              </td>
            </tr>
            <tr>
              <td>Product Category 2</td>
              <td class="text-center">
                <a href="#" class="tm-product-delete-link">
                  <span class="material-symbols-outlined">
                    delete
                  </span>
                </a>
              </td>
            </tr>
            <tr>
              <td>Product Category 3</td>
              <td class="text-center">
                <a href="#" class="tm-product-delete-link">
                  <span class="material-symbols-outlined">
                    delete
                  </span>
                </a>
              </td>
            </tr>
            <tr>
              <td>Product Category 4</td>
              <td class="text-center">
                <a href="#" class="tm-product-delete-link">
                  <span class="material-symbols-outlined">
                    delete
                  </span>
                </a>
              </td>
            </tr>
            <tr>
              <td>Product Category 5</td>
              <td class="text-center">
                <a href="#" class="tm-product-delete-link">
                  <span class="material-symbols-outlined">
                    delete
                  </span>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- table container -->
        <button>
          Add new category
        </button>
      </div>
    </div>
</body>
<script src="index.js"></script>

</html>