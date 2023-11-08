<?php
session_start();
include('./config/dbconfig.php');
include('../controller/funcoes.php');

if (isset($_POST['addgenre-btn'])) {
  $genero = $_POST['genero'];
  $slug = $_POST['slug'];


  $genero_query = "INSERT INTO Generos (NomeGenero, Slug) VALUES ('$genero', '$slug')";

  $genero_query_run = mysqli_query($con, $genero_query);

  if ($genero_query_run) {
    redirect("add-product.php", "genero adicionado com sucesso");
  } else {
    redirect("add-product.php", "Algo deu erado");
  }
} else
if (isset($_POST['delete_genero-btn'])) {
  $id_genero = mysqli_real_escape_string($con, $_POST['id_genero']);

  $delete_query = "DELETE FROM Generos WHERE ID='$id_genero'";
  $delete_query_run = mysqli_query($con, $delete_query);

  if ($delete_query_run) {
    redirect("products.php", "Genero deletado com sucesso");
  } else {
    redirect("products.php", "Algo de errado");
  }
} else
if (isset($_POST['addprod-btn'])) {
  $nomealbum = $_POST['nomealbum'];
  $artistas = $_POST['artistas'];

  $capa = $_FILES['image']['name'];

  $path = "../uploads";

  $image_ext = pathinfo($capa, PATHINFO_EXTENSION);
  $filename = time() . '.' . $image_ext;

  $slug = $_POST['slug'];
  $preco = $_POST['preco'];
  $qtd = $_POST['qtd'];
  $genero = $_POST['genero']; //**
  $anolacamento = date('y-m-d', strtotime($_POST['anolacamento']));
  $media = $_POST['media'];
  $tipofita = $_POST['tipofita']; //radiob
  $modograv = $_POST['modograv'];
  // $capmax = $_POST['cdcapmax'];
  // $capmax = $_POST['cdcapmax']['cdvcapmax']['dvdcapmax'];
  // $dvdtipo = isset($_POST['dvdtipo']) ? '1' : '0';

  if ($nomealbum != "" && $artistas != "" && $slug != "") {

    $prod_query = "INSERT INTO Produtos (NomeAlbum, Artistas, Capa, Slug, Preco, Qtd, Genero, AnoLacamento, Media, Tipofita, Modograv)
  VALUES ('$nomealbum','$artistas','$filename','$slug','$preco','$qtd', '$genero','$anolacamento', '$media', '$tipofita','$modograv')";

    $prod_query_run = mysqli_query($con, $prod_query);

    if ($prod_query_run) {
      move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);

      redirect("add-product.php", "Producto adicionado com sucesso");
    } else {
      redirect("add-product.php", "Algo deu erado");
    }
  } else {
    redirect("add-product.php", "Algo deu erado");
  }
} else
if (isset($_POST['update-prod-btn'])) {

  $id_produto = $_POST['id_produto'];

  $nomealbum = $_POST['nomealbum'];
  $artistas = $_POST['artistas'];

  $slug = $_POST['slug'];
  $preco = $_POST['preco'];
  $qtd = $_POST['qtd'];
  $genero = $_POST['genero']; //**
  $anolacamento = date('y-m-d', strtotime($_POST['anolacamento']));
  $media = $_POST['media'];
  $tipofita = $_POST['tipofita']; //radiob
  $modograv = $_POST['modograv'];

  $nova_capa = $_FILES['image']['name'];
  $capa_antiga = $_POST['capa_antiga'];

  $path = "../uploads";

  if ($nova_capa != "") {
    $image_ext = pathinfo($nova_capa, PATHINFO_EXTENSION);
    $update_filename = time() . '.' . $image_ext;
  } else {
    $update_filename = $capa_antiga;
  }

  $update_produto_query = "UPDATE Produtos SET Genero='$genero', NomeAlbum='$nomealbum', Artistas='$artistas', Capa='$update_filename', Slug='$slug', Preco='$preco', Qtd='$qtd', AnoLacamento='$anolacamento', Media='$media', Tipofita='$tipofita', Modograv='$modograv' WHERE ID='$id_produto'";
  $update_produto_query_run = mysqli_query($con, $update_produto_query);

  if ($update_produto_query_run) {
    if ($_FILES['image']['name'] != "") {
      move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
      if (file_exists("../uploads" . $capa_antiga)) {
        unlink("../uploads/" . $capa_antiga);
      }
    }
    redirect("edit-product.php?id=$id_produto", "Produto atualizado com sucesso");
  } else {
    redirect("edit-product.php?id=$id_produto", "Algo deu errado");
  }
} else {
  header('Location: ../home.php');
}
