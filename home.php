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
   <title>Dashboard</title>
</head>

<body>
   <div class="container">
      <?php
      session_start();

      include('./includes/sidebar.php');
      ?>
      <main>
         <h1 id="titulo">Painel de Administraçao</h1>
         <div class="date">
            <input type="date">
         </div>
         <div>
            <?php if (isset($_SESSION['message'])) { ?>
               <div class="alert" id="senha-error" role="alert">
                  <strong></strong>, <?= $_SESSION['message']; ?>
                  <a href="home.php">
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
         <div class="insights">
            <div class="sales">
               <span class="material-symbols-outlined">
                  analytics
               </span>
               <div class="middle">
                  <div class="left">
                     <h3>Total de vendas</h3>
                     <h1>$25,024</h1>
                  </div>
                  <div class="progress">
                     <svg>
                        <circle cx='38' cy='38' r='36'></circle>
                     </svg>
                     <div class="number">
                        <p>81%</p>
                     </div>
                  </div>
               </div>
               <small class="text-muted">
                  Ultimas 24 Horas
               </small>
            </div>
            <!-- END SALES(VENDAS -->

            <div class="expenses">
               <span class="material-symbols-outlined">
                  bar_chart
               </span>
               </span>
               <div class="middle">
                  <div class="left">
                     <h3>Total de gastos</h3>
                     <h1>$25,024</h1>
                  </div>
                  <div class="progress">
                     <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                     </svg>
                     <div class="number">
                        <p>81%</p>
                     </div>
                  </div>
               </div>
               <small class="text-muted">
                  Ultimas 24 Horas
               </small>
            </div>
            <!-- END Expences -->

            <div class="income">
               <span class="material-symbols-outlined">
                  stacked_line_chart
               </span>
               <div class="middle">
                  <div class="left">
                     <h3>Total de faturação</h3>
                     <h1>$25,024</h1>
                  </div>
                  <div class="progress">
                     <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                     </svg>
                     <div class="number">
                        <p>81%</p>
                     </div>
                  </div>
               </div>
               <small class="text-muted">
                  Ultimas 24 Horas
               </small>
            </div>
            <!-- END Income -->
         </div>
         <!-- END OF INSIGHTS -->
         <div class="recent-orders">
            <h2>Pedidos Recentes</h2>
            <table>
               <thead>
                  <tr>
                     <th>Product Name</th>
                     <th>Product Numbers</th>
                     <th>Payments</th>
                     <th>Status</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Foladable Mini drone</td>
                     <td>$5631</td>
                     <td>Due</td>
                     <td class="warning">Pending</td>
                     <td class="primary">Details</td>
                  </tr>
                  <tr>
                     <td>Foladable Mini drone</td>
                     <td>$5631</td>
                     <td>Due</td>
                     <td class="warning">Pending</td>
                     <td class="primary">Details</td>
                  </tr>
                  <tr>
                     <td>Foladable Mini drone</td>
                     <td>$5631</td>
                     <td>Due</td>
                     <td class="warning">Pending</td>
                     <td class="primary">Details</td>
                  </tr>
                  <tr>
                     <td>Foladable Mini drone</td>
                     <td>$5631</td>
                     <td>Due</td>
                     <td class="warning">Pending</td>
                     <td class="primary">Details</td>
                  </tr>
               </tbody>
            </table>
            <a href="#">Show All</a>
         </div>
      </main>
      <!-- END OF MAIN -->
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
         <!-- ==================END of Top ==============-->
         <div class="recent-updates">
            <h2>Atualizacoes recentes</h2>
            <div class="updates">
               <div class="update">
                  <div class="profile-photo">
                     <img src="./images/IMG_1508.JPG" alt="">
                  </div>
                  <div class="message">
                     <p>
                        <b>Mike tyson</b>
                        Recebeu a sua encomenda de drone
                     </p>
                     <small class="text-muted">2 minutes</small>
                  </div>
               </div>
               <div class="update">
                  <div class="profile-photo">
                     <img src="./images/IMG_1508.JPG" alt="">
                  </div>
                  <div class="message">
                     <p>
                        <b>Mike tyson</b>
                        Recebeu a sua encomenda de drone
                     </p>
                     <small class="text-muted">2 minutes</small>
                  </div>
               </div>
               <div class="update">
                  <div class="profile-photo">
                     <img src="./images/IMG_1508.JPG" alt="">
                  </div>
                  <div class="message">
                     <p>
                        <b>Mike tyson</b>
                        Recebeu a sua encomenda de drone
                     </p>
                     <small class="text-muted">2 minutes</small>
                  </div>
               </div>
            </div>
            <!-- END OF RECENT UPDATES  -->
            <div class="sales-analytics">
               <h2>Relatorio de Vendas</h2>
               <div class="item online">
                  <div class="icon">
                     <span class="material-symbols-outlined">
                        shopping_cart
                     </span>
                  </div>
                  <div class="right">
                     <div class="info">
                        <h3>Pedidos Online</h3>
                        <small class="text-muted">Last 24 hours</small>
                     </div>
                     <h5 class="success">+39%</h5>
                     <h3>3849</h3>
                  </div>
               </div>
               <!--  -->
               <div class="item offline">
                  <div class="icon">
                     <span class="material-symbols-outlined">
                        local_mall
                     </span>
                  </div>
                  <div class="right">
                     <div class="info">
                        <h3>Pedidos Na Loja</h3>
                        <small class="text-muted">Last 24 hours</small>
                     </div>
                     <h5 class="warning">-17%</h5>
                     <h3>300</h3>
                  </div>
               </div>
               <!--  -->
               <div class="item customers">
                  <div class="icon">
                     <span class="material-symbols-outlined">
                        person
                     </span>
                  </div>
                  <div class="right">
                     <div class="info">
                        <h3>Novos Clientes</h3>
                        <small class="text-muted">Last 24 hours</small>
                     </div>
                     <h5 class="success">+25%</h5>
                     <h3>23</h3>
                  </div>
               </div>
               <!--  -->
               <div class="item add-product">
                  <div><span class="material-symbols-outlined">add</span>
                     <h3>Add Product</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<script src="./index.js"></script>

</html>