<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>php berryl</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link belajar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Barang</a></li>
              <li><a class="dropdown-item" href="#">Kabisat</a></li>
              <li><a class="dropdown-item" href="nilai.php">Nilai</a></li>
              <li><a class="dropdown-item" href="#">Perkalian</a></li>
              <li><a class="dropdown-item" href="#">Soal_nilai</a></li>
              <li><a class="dropdown-item" href="#">Looping</a></li>
              <li><a class="dropdown-item" href="#">Nilai_bagus</a></li>
              <li><a class="dropdown-item" href="#">SK_warna</a></li>
              <li><a class="dropdown-item" href="#">SK_1</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
      case 'home':
        include "barang.php";
        break;
      case 'tentang':
        include "halaman/tentang.php";
        break;
      case 'kontak':
        include "halaman/kontak.php";
        break;
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  } else {
    include "barang.php";
  }

  ?>
  <!-- SCRIPT BOOTSRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>