<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT . 'bootstrap/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?= $Constantes::WEB_ROOT . 'css/header.css' ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link other -->
  <title>Document</title>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="header">
        <div class="logo">
          <img src="<?= $Constantes::WEB_ROOT . 'image/logo.png' ?>" alt="Logo de l'application" height="130" loading="lazy" />
        </div>
        <div class="title">
          <h1>Projet APP</h1>
          <p>Construisons l'avenir, ligne de code par ligne de code.</p>
        </div>
      </div>

      <!-- Collapsible wrapper -->

      <!-- Right elements -->

  </nav>
  <!-- END NAVBAR-->
  <?= $contents_for_views ?>

  <script src="<?= $Constantes::WEB_ROOT . 'bootstrap/jquery.min.js' ?>"></script>
  <script src="<?= $Constantes::WEB_ROOT . 'bootstrap/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?= $Constantes::WEB_ROOT . 'js/script.js' ?>"></script>
  <script src="<?= $Constantes::WEB_ROOT . 'bootstrap/bootstrap-select.min.js' ?>"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>