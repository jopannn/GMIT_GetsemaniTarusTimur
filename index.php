<?php

include "admin/function.php";


?>


<?php
include "header.php";
?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

  <div class="info d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">SELAMAT DATANG DI <span>GEREJA MASEHI INJILI DI TIMOR(GMIT) GETSEMANI TARUS TIMUR
            </span></h2>
          <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Tentang Kami</a>
        </div>
      </div>
    </div>
  </div>

  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/gmit_pict.jpeg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/gmit_pict2.jpeg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/gmit_pict3.jpeg)"></div>
    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/gmit_pict4.jpeg)"></div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>

</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= Get Started Section ======= -->
  <section id="get-started" class="get-started section-bg">
    <div class="container">

      <div class="row justify-content-between gy-4">

        <div class="col-lg d-flex align-items-center" data-aos="fade-up">
          <div class="content">
            <h3 class="text-center">Tentang Kami</h3>
            <p class="fs-4 mx-2" style="text-align:justify;">Gereja Masehi Injili di Timor (GMIT) Getsemani Tarus Timur
              merupakan
              satu dari sekian banyak gereja yang ada di Kabupaten Kupang Provinsi Nusa
              Tenggara Timur, berlokasi tepat di jalan perbatasan negara Kupang – Dili (Timor
              Leste), 15 km dari Kupang, Ibukota Provinsi. Secara geografis, GMIT Getsemani
              Tarus Timur terletak di jalan Timor Raya, Desa Mata Air, Kelurahan Tarus,
              Kecamatan Kupang Tengah, Kabupaten Kupang.40
              Gedung Gereja Getsemani Tarus Timur berdiri pada tanggal 20 Juni 1960
              kemudian mengalami renovasi dan ditahbiskan pada tanggal 19 Agustus 2007.
              Sampai dengan tahun 2016, sudah empat (4) tenaga pelayan (pendeta) yang
              pernah melayani di gereja tersebut dengan total jumlah jemaat yang terdaftar ialah
              452 KK, yang tersebar dalam 30 rayon pelayanan (1a-15b) masing-masing
              berjumlah antara 10-22 KK/ rayon
              <a href="about.php">[selengkapnya...]</a>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Get Started Section -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <?php
      $ambil = query("SELECT * FROM tbpendeta");
      ?>
      <div class="section-header">
        <h2>Pendeta Kami</h2>
        <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis
          omnis tiledo stran delop</p>
      </div>

      <div class="row gy-5">

        <?php $i = 1; ?>
        <?php foreach ($ambil as $row): ?>
          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="<?php echo "admin/imgs/" . $row['gambar']; ?>" class="img-fluid" alt="">
            </div>
            <div class="member-info text-center">
              <h4> <?php echo $row["namaPendeta"]; ?></h4>
              <span><?php echo $row["jabatan"]; ?></span>
            </div>
          </div><!-- End Team Member -->
          <?php $i++; ?>
        <?php endforeach; ?>

      </div>

    </div>
  </section><!-- End Our Team Section -->

  <!-- ======= Constructions Section ======= -->
  <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Informasi Ibadah dan Lokasi Gereja</h2>
        <p>Informasi seputar peribadatan dan lokasi Gereja dapat dilihat pada daftar dibawah</p>
      </div>

      <!-- <div class="row gy-4"> -->

      <div class="col-lg-10 mx-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <!-- <div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div> -->
              <div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div>
            </div>
            <div class="col-xl-7 d-flex">
              <div class="card-body">
                <h4 class="card-title fs-1">Jam Kebaktian</h4>
                <h4 class="fs-4">Kebaktian Umum</h4>
                <?php
                $ambil = query("SELECT *,DATE_FORMAT(tanggal, '%W %d %b %Y') AS tanggalKhusus
              FROM waktuibadah ");
                ?>
                <?php $i = 1; ?>
                <?php foreach ($ambil as $row): ?>
                  <?php
                  $tanggal = $row["tanggal"];
                  if ($tanggal == "0000-00-00") {
                    ?>
                    <p class="fs-6 "><?php echo $row["namaKebaktian"], " ", $row["hari"], " (", $row["jam"], " WITA)"; ?></p>
                    <?php
                  }
                  ?>
                  <?php $i++; ?>
                <?php endforeach; ?>
                <br>
                <h4 class="fs-4">Kebaktian Khusus</h4>
                <?php $i = 1; ?>
                <?php foreach ($ambil as $row): ?>
                  <?php
                  $tanggal = $row["tanggal"];
                  if ($tanggal != "0000-00-00") {
                    ?>
                    <p class="fs-6 ">
                      <?php echo $row["namaKebaktian"], ", ", $row["tanggalKhusus"], " (", $row["jam"], " WITA)"; ?></p>
                    <?php
                  }
                  ?>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

      <div class="col-lg-10 mx-4 mt-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg position-relative">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15710.303509047233!2d123.6951158!3d-10.1337597!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c5683ce172e9703%3A0xa9d0662ce78aeef9!2sGMIT%20Jemaat%20Getsemani%20Tarus%20Timur!5e0!3m2!1sid!2sid!4v1712162740546!5m2!1sid!2sid"
                  style="border:0;" allowfullscreen="" loading="lazy" class="position-absolute w-100 h-100"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="col-xl-7 d-flex ">
              <div class="card-body align-items-center">
                <h4 class="card-title fs-1">Lokasi Gereja</h4>
                <div class="d-flex mb-2">
                  <span class="icon"><i class="fas fa-map-location-dot fa-xl me-2"></i></span>
                  <p class="fs-5">Jl. Timor Raya, Mata Air, Kec. Kupang Tengah, Kabupaten Kupang, Nusa Tenggara Tim.</p>
                </div>
                <div class="d-flex">
                  <span class="icon"><i class="fas fa-phone fa-xl me-2"></i></span>
                  <p class="fs-5">(0380)821457</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->
    </div>

    </div>
  </section><!-- End Constructions Section -->



  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Galeri Foto</h2>
        <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus
          fugit aut qui distinctio</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">



        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <!-- Start Galeri Item -->
           
          <?php $i = 1; ?>
          <?php foreach ($ambil as $row): ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="<?php echo "admin/uploads/" . $row['nama_gambar']; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $row["penulis"]; ?></h4>
                  <p><?php echo $row["judul"]; ?></p>
                  <a href="<?php echo "admin/uploads/" . $row['nama_gambar']; ?>" title="<?php echo $row["judul"]; ?>"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="galeri-details.php?id=<?php echo $row["nomor"] ?>" class="details-link"><i
                      class="bi bi-book-half"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->
            <?php $i++; ?>
          <?php endforeach; ?>        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->


  <!-- ======= Recent Blog Posts Section ======= -->
  <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up"">

    
    
  <div class=" section-header">
      <h2>Postingan Terbaru</h2>
      <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
    </div>

    <?php
    $ambil = query("SELECT *,t.id as nomor,k.id as idKategori ,DATE_FORMAT(STR_TO_DATE(waktuPosting, '%d/%m/%Y'), '%d %M %Y') AS tanggal 
    FROM tbbacaan t
    JOIN kategori k ON k.id = t.idKategori
    WHERE t.status= 1");
    ?>
    <div class="row gy-5">
    <?php $i = 1; ?>
        <?php foreach ($ambil as $row): ?>
      <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

          <div class="post-img position-relative overflow-hidden">
            <img src="<?php echo "admin/imgs/" . $row['gambar']; ?>" class="img-fluid" alt="">
            <span class="post-date"><?php echo $row["tanggal"]; ?></span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title"><?php echo $row["judul"]; ?></h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2"><?php echo $row["penulis"]; ?></span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2"><?php echo $row["namaKategori"]; ?></span>
              </div>
            </div>

            <hr>

            <a href="blog-details.php?id=<?php echo $row["nomor"] ?>" class="readmore stretched-link">
                  <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>
      </div><!-- End post item -->
      <?php $i++; ?>
                            <?php endforeach; ?>
    </div>

    </div>
  </section>
  <!-- End Recent Blog Posts Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>