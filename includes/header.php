<!DOCTYPE html>
<html>

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
   <!-- materila CDN -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <!-- styles -->
   <link rel="stylesheet" href="stylecliente.css">
   <title>Minha Loja de Música</title>
</head>

<body>
   <?php
   session_start();
   include('../controller/funcoes.php');
   ?>
   <nav>
      <div class="nav-principal">
         <div class="logo">
            <a href="index.php">
               <span>LOGOLOJA</span>
            </a>
         </div>
         <div>
            <ul class="navbar">
               <li><a href="index.php">PAGINA INICIAL</a></li>
               <li id="dropdown" class="dropdown">
                  <a href="#" id="secoes-dropdown">
                     SECÇÕES
                  </a>
                  <ul id="secoes-dropdown-menu">
                     <li>
                        <a>Audio</a>
                     </li>
                     <li>
                        <a>Video</a>
                     </li>
                  </ul>
               </li>
               <li id="dropdown2" class="dropdown">
                  <a href="colecoes.php" id="secoes-dropdown2">COLEÇÕES</a>
                  <div id="secoes-dropdown-menu2">
                     <ul style="    display: grid;grid-template-columns: repeat(3, 8rem);gap: .5rem;">
                        <?php
                        $generos = getAllDisponiveis("Generos");
                        if (mysqli_num_rows($generos) > 0) {
                           foreach ($generos as $item) {
                        ?>
                              <li>
                                 <a href="clientes-produtos.php?genero=<?= $item['Slug']; ?>"><?= $item['NomeGenero']; ?></a>
                              </li>
                        <?php
                           }
                        } else {
                           echo "Dados Nao disponiveis";
                        }
                        ?>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
         <div class="icones">
            <a href="entrarcliente.php" style="display: flex; gap: .5rem; align-items: center; font-size: 1.2rem; font-weight: 700;">
               <span>Entrar</span>
               <span class="material-symbols-outlined">
                  login
               </span>
            </a>
            <a href="registrocliente.php">
               <span>Criar Conta</span>
            </a>
            <a href="entrarcliente.php">
               <span class="material-symbols-outlined">
                  account_circle
               </span>
            </a>
            <a href="#">
               <span class="material-symbols-outlined">
                  shopping_cart
               </span>
            </a>
         </div>
      </div>
   </nav>