<?php
include "admin/function.php";
// $ambil = query("SELECT * FROM tbgaleri  ORDER BY waktuPosting DESC");
$ambil = query("SELECT tb.id as nomor, tb.judul,tb.penulis,tbg.nama_gambar  FROM tbgaleri tb
      JOIN admin a ON a.id = tb.idAdmin
      JOIN tbdetailgaleri tbg ON tbg.idInduk = tb.id
      GROUP by nomor");


?>

<?php
include "header.php";
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('assets/img/hero-carousel/gmit_pict2.jpeg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Galeri</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Galeri</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order">

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

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
          <?php endforeach; ?>




        </div><!-- End Projects Container -->

      </div>

    </div>
  </section><!-- End Our Projects Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>