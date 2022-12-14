<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/style.css" />

    <link rel="icon" href="./img/favicon (2).ico" type="image/x-icon" />

    <title>Vegetable Juice</title>
  </head>
  <body>
    <main>
      <section class="container-fluid px-5">
        <div class="row">
          <div class="col-12">
            <?php include("./banner.php"); ?>
          </div>
        </div>
      </section>
      <section class="container-fluid px-0">
        <div class="row">
          <div class="col-12">
            <?php include("./navbar.php"); ?>
          </div>
        </div>
      </section>
      <section class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php include("./content.php"); ?>
          </div>
        </div>
      </section>
      <section class="container-fluid px-0 fixed-bottom">
        <div class="row">
          <div class="col-12">
            <?php include("./footer.php"); ?>
          </div>
        </div>
      </section>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <script src="./js/app.js"></script>
  </body>
</html>
