
<?php
function query2($query)
{
  $koneksi = mysqli_connect("localhost", "root", "", "db_gmit_test");
  $ambil1 = mysqli_query($koneksi, $query);
  $row = [];
  while ($row = mysqli_fetch_assoc($ambil1)) {
    $rows[] = $row;
  }
  return $rows;
}
$ambil2 = query2("SELECT * FROM kategori");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GMIT Getsemani Tarus Timur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- <style>
    .box {
      width: 200px;
      /* Lebar kotak */
      height: 200px;
      /* Tinggi kotak */
      background-color: #ccc;
      /* Warna latar belakang */
      border: 1px solid #000;
      /* Garis pinggir */
      padding: 20px;
      /* Ruang di dalam kotak */
      box-sizing: border-box;
      /* Memastikan padding tidak mempengaruhi lebar dan tinggi kotak */
    }
  </style> -->

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="text-white">GMIT GETSEMANI TARUS TIMUR<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a href="index.php" class="active">Beranda</a></li> -->
          <li><a href="index.php">Beranda</a></li>
          <li><a href="about.php">Tentang Kami </a></li>
          <li><a href="services.php">Pembangunan</a></li>
          <li><a href="contact.php">Kontak</a></li>

          <li><a href="galeri.php">Galeri</a></li>
          <li class="dropdown"><a href="#"><span>Bacaan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <?php $i = 1; ?>
              <?php foreach ($ambil2 as $row): ?>
                <li><a href="blog.php?id=<?php echo $row["id"]?>"><?php echo $row["namaKategori"]; ?></a></li>
                <?php $i++; ?>
              <?php endforeach; ?>
            </ul>
          </li>
          <!-- <li><a href="projects.php">Contact</a></li> -->
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->