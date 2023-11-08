<aside>
  <div class="top">
    <div class="logo">
      <img src="./admin/images/02logoDistorthings.svg" alt="logo">
    </div>
    <div class="close" id="close-btn">
      <span class="material-symbols-outlined">
        close
      </span>
    </div>
  </div>

  <div class="sidebar">
    <a href="home.php">
      <span class="material-symbols-outlined">
        grid_view
      </span>
      <h3>Inicio</h3>
    </a>
    <a href="produtos.php">
      <span class="material-symbols-outlined">
        inventory_2
      </span>
      <h3>Produtos</h3>
    </a>

    <?php
    if (isset($_SESSION['auth'])) {
    ?>
      <div class="dropdown">
        <a href="fred.in">
          <span class="material-symbols-outlined">
            manage_accounts
          </span>
          <h3><?= $_SESSION['auth_user']['nome']; ?></h3>
          <span class="material-symbols-outlined">
            arrow_drop_down
          </span>
        </a>
        <ul class="sub-menu">
          <li><a href="./sair.php" class="sub-item">logout</a></li>
        </ul>
      </div>

    <?php } ?>
  </div>
</aside>