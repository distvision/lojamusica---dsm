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

    include('./includes/sidebar.php'); ?>
    <main>
      <div>
        <div>
          <h2>Add Product</h2>
        </div>
        <div>
          <div>
            <form action="">
              <div>
                <label for="name">Product Name</label>
                <input id="name" name="name" type="text" required />
              </div>
              <div>
                <label for="description">Description</label>
                <textarea rows="3" required></textarea>
              </div>
              <div class="form-group mb-3">
                <label for="category">Category</label>
                <select id="category">
                  <option selected>Select category</option>
                  <option value="1">New Arrival</option>
                  <option value="2">Most Popular</option>
                  <option value="3">Trending</option>
                </select>
              </div>
              <div class="row">
                <div>
                  <label for="expire_date">Expire Date
                  </label>
                  <input id="expire_date" name="expire_date" type="text" data-large-mode="true" />
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                  <label for="stock">Units In Stock
                  </label>
                  <input id="stock" name="stock" type="text" class="form-control validate" required />
                </div>
              </div>

          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
            <div class="tm-product-img-dummy mx-auto">
              <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
            </div>
            <div class="custom-file mt-3 mb-3">
              <input id="fileInput" type="file" style="display:none;" />
              <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();" />
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
          </div>
          </form>
        </div>
      </div>
    </main>
  </div>
  <script src="index.js"></script>
</body>

</html>