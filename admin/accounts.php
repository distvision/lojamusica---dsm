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
  <title>Accounts - Product Admin Template</title>
</head>

<body id="reportsPage">
  <div class="container">
    <?php
    session_start();


    include('./includes/sidebar.php'); ?>
    <!--  -->
    <main>
      <div>
        <div>
          <div>
            <div>
              <h2>List of Accounts</h2>
              <p>Accounts</p>
              <select class="custom-select">
                <option value="0">Select account</option>
                <option value="1">Admin</option>
                <option value="2">Editor</option>
                <option value="3">Merchant</option>
                <option value="4">Customer</option>
              </select>
            </div>
          </div>
        </div>
        <!-- row -->
        <div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Account Settings</h2>
              <form action="" class="tm-signup-form row">
                <div class="form-group col-lg-6">
                  <label for="name">Account Name</label>
                  <input id="name" name="name" type="text" class="form-control validate" />
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Account Email</label>
                  <input id="email" name="email" type="email" class="form-control validate" />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input id="password" name="password" type="password" class="form-control validate" />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password2">Re-enter Password</label>
                  <input id="password2" name="password2" type="password" class="form-control validate" />
                </div>
                <div class="form-group col-lg-6">
                  <label for="phone">Phone</label>
                  <input id="phone" name="phone" type="tel" class="form-control validate" />
                </div>
                <div class="form-group col-lg-6">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <button type="submit" class="btn btn-primary btn-block text-uppercase">
                    Update Your Profile
                  </button>
                </div>
                <div>
                  <button type="submit">
                    Delete Your Account
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="right">
      <div>
        <h2>Change Avatar</h2>
        <div>
          <img src="img/avatar.png" alt="Avatar" class="tm-avatar img-fluid mb-4" />
          <a href="#" class="tm-avatar-delete-link">
            <i class="far fa-trash-alt tm-product-delete-icon"></i>
          </a>
        </div>
        <button class="btn btn-primary btn-block text-uppercase">
          Upload New Photo
        </button>
      </div>
    </div>
    <!-- Avatar -->
  </div>
  <script src="index.js"></script>
</body>

</html>