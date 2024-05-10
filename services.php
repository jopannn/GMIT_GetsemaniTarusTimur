


<?php
include "admin/function.php";
$ambil1 = query("SELECT * 
FROM progressbar 
WHERE persenProgress = (SELECT MAX(persenProgress) FROM progressbar);
")
  ?>




<?php
include "header.php";
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('assets/img/hero-carousel/gmit_pict2.jpeg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Pembangunan</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Pembangunan</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Servie Cards Section ======= -->

  <section id="services-cards" class="services-cards">
    <div class="container" data-aos="fade-up">
      <?php $i = 1; ?>
      <?php foreach ($ambil1 as $row): ?>
        <div class="row gy-4 justify-content-center">
          <h1 class="text-center">Progress Pembangunan Gereja</h1>
          <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="100"
            aria-valuemin="0" aria-valuemax="100" style="height: 100px; width:250px;">
            <div class="progress-bar progress-bar-striped bg-warning fs-1 fw-bold"
              style="width: <?php echo $row["persenProgress"]; ?>%; margin-left:-10px;">
              <?php echo $row["persenProgress"]; ?>%
            </div>
          </div>
          <div class="mx-auto" data-aos="zoom-in" data-aos-delay="100">
            <p class="text-center">Eius non minus autem soluta ut ui labore omnis quisquam corrupti autem odit voluptas
              quos commodi magnam
              occaecati.</p>
            <?php $i++; ?>
          <?php endforeach; ?>
        </div><!-- End feature item-->
      </div>

    </div>
  </section><!-- End Servie Cards Section -->


  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-solid fa-helmet-safety"></i>
            </div>
            <h3>Progress dan Rencana Kerja</h3>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis
              tempore et consequatur.</p>
            <a href="#progressPembangunan" class="readmore stretched-link">Learn more <i
                class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-trowel-bricks"></i>
            </div>
            <h3>Kebutuhan Material</h3>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut
              nesciunt dolorem.</p>
            <a href="#kebutuhanMaterial" class="readmore stretched-link">Learn more <i
                class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-file-contract"></i>
            </div>
            <h3>Dokumen</h3>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos
              earum corrupti.</p>
            <a href="#dokumen" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-image"></i>
            </div>
            <h3>Foto</h3>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident
              adipisci neque.</p>
            <a href="galeri.php" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <!-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <!-- <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3></h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div> 
        </div>End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-hand-holding-dollar"></i>
            </div>
            <h3>Dukungan</h3>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem
              alias eius labore.</p>
            <a href="#dukungKami" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->


      </div>

    </div>
  </section><!-- End Services Section -->

  <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up"">

    <?php

$ambil = query("SELECT p.id as nomor, p.penulis,p.gambar,p.judul,DATE_FORMAT(STR_TO_DATE(p.waktuPosting, '%d/%m/%Y'), '%d %M %Y') AS tanggal
FROM tbprogresspembangunan as p 
JOIN admin as a ON a.id = p.idAdmin
WHERE p.status=1 
ORDER BY p.waktuPosting DESC");

?>
    
  <div class=" section-header">
      <h2 id="progressPembangunan">Berita Progress Pembangunan</h2>
      <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
    </div>

    <?php
    if ($ambil > 0) {
      ?>
      <div class="row gy-5">


        <?php $i = 1; ?>
        <?php foreach ($ambil as $row): ?>
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <!-- <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""> -->
                <img src="<?php echo "admin/imgs/" . $row['gambar']; ?>" class="img-fluid">
                <span class="post-date">
                  <?php echo $row["tanggal"]; ?>
                </span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">

                  <?php
                  $text = $row["judul"];

                  if (strlen($text) > 50) {
                    $text_short = substr($text, 0, 50) . "...";
                    echo $text_short;
                  } else {
                    echo $text;
                  }
                  ?>
                </h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">
                      <?php echo $row["penulis"]; ?>
                    </span>
                  </div>

                </div>

                <hr>
                <?php
                $encrypted_id = base64_encode($row["nomor"]);
                ?>
                <a href="service-details.php?id=<?php echo $encrypted_id ?>" class="readmore stretched-link"><span>Read
                    More</span><i class="bi bi-arrow-right"></i></a>


              </div>

            </div>
          </div><!-- End post item -->
          <?php $i++; ?>
        <?php endforeach; ?>
        <?php
    } else {
      echo " ";
    }
    ?>



    </div>

    </div>
  </section>
  <!-- End section Progress Pembangunan Gereja -->

  <!-- Start Section Kebutuhan Material -->



  <section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">
      <div class=" section-header">
        <h2 id="kebutuhanMaterial">Kebutuhan Material</h2>
        <p>Mohon bagi bapak / ibu yang ingin menyumbangkan material dapat menghubungi Panitia/ Ketua Panitia (Bpk.
          Erasmus Mooy HP. 082 131 848 277) dan Majelis Jemaat pada setiap hari kerja.</p>
      </div>

      <ul class="nav nav-tabs row  g-2 d-flex">
        <li class="nav-item col-3">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
            <h4 id="dukungKami">Kartu Sumbangan Tetap</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
            <h4>Sumbangan Material</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
            <h4>Sumbangan Dana</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item col-3">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
            <h4>Dana Talangan Jemaat</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>

      <div class="tab-content">

        <div class="tab-pane active show" id="tab-1">
          <div class="row">
            <div class=" order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up"
              data-aos-delay="100">
              <h3>Kartu Sumbangan Tetap</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                  pariatur.</li>
              </ul>
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane" id="tab-2">
          <div class="row">
            <div class=" order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Sumbangan Material</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum
                  neque dolor voluptate nisi sed.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                  pariatur.</li>
              </ul>
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane" id="tab-3">
          <div class="row">
            <div class=" order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Sumbangan Dana</h3>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum
                  neque dolor voluptate nisi sed.</li>
              </ul>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
            </div>
          </div>
        </div><!-- End tab content item -->

        <div class="tab-pane" id="tab-4">
          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
              <h3>Dana Talangan Jemaat</h3>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                  irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                  pariatur.</li>
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 text-center">
              <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div><!-- End tab content item -->

      </div>

    </div>
  </section><!-- End Features Section -->


  <!-- End section kebutuhan Material -->


  <!-- ======= Alt Services Section 2 ======= -->
  <section id="alt-services-2" class="alt-services section-bg">
    <div class="container" data-aos="fade-up">
      <div class=" section-header">
        <h2 id="dokumen">Dokumen</h2>
      </div>
      <div class="row justify-content-around gy-4">
        <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Berkas: Desain Rencana Pembangunan Gedung Kebaktian GMIT Kota Baru</h3>

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
            <i class="bi bi-easel flex-shrink-0"></i>
            <div>
              <h4><a href="assets/img/dokumen/dokumen1.pdf" class="stretched-link">Desain GMIT Kota Kupang</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-patch-check flex-shrink-0"></i>
            <div>
              <h4><a href="assets/img/dokumen/dokumen1.pdf" class="stretched-link">Beton</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                deleniti atque</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-house flex-shrink-0"></i>
            <div>
              <h4><a href="assets/img/dokumen/dokumen1.pdf" class="stretched-link">Atap</a></h4>
              <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut
                eligendi omnis</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="assets/img/dokumen/dokumen1.pdf" class="stretched-link">Laporan Kontur</a></h4>
              <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
                Et eligendi</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-brightness-high flex-shrink-0"></i>
            <div>
              <h4><a href="assets/img/dokumen/dokumen1.pdf" class="stretched-link">Data Ukur</a></h4>
              <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet.
                Et eligendi</p>
            </div>
          </div><!-- End Icon Box -->
        </div>

        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);" data-aos="zoom-in"
          data-aos-delay="100"></div>
      </div>

    </div>
  </section><!-- End Alt Services Section 2 -->




</main><!-- End #main -->

<?php
include "footer.php";
?>