<?php
include "admin/function.php";

$id = $_GET["id"];
$ambil = query("SELECT tb.id, tb.judul,tb.isi,tb.penulis,tbg.nama_gambar,DATE_FORMAT(STR_TO_DATE(tb.waktuPosting, '%d/%m/%Y'), '%d %M %Y') AS tanggal  
      FROM tbgaleri tb
      JOIN admin a ON a.id = tb.idAdmin
      JOIN tbdetailgaleri tbg ON tbg.idInduk = tb.id
      WHERE tb.id= $id")[0];

?>


<?php
include "header.php";
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('assets/img/hero-carousel/gmit_pict2.jpeg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2><?php echo $ambil["judul"]; ?></h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li><a href="galeri.php"> Galeri</a></li>
        <li>galeri details</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Projet Details Section ======= -->
  <section id="project-details" class="project-details">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="portfolio-description">
        <h2><?php echo $ambil["judul"]; ?></h2>
      </div>


      <div class="position-relative h-100">

        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">

            <!-- <div class="swiper-slide">
              <img src="<?php echo "admin/uploads/" . $ambil['nama_gambar']; ?>" alt="">
            </div> -->

            <!-- <div class="swiper-slide"> -->
            <?php
            include 'admin/config.php';

            $query = "SELECT * FROM tbdetailgaleri WHERE idInduk=$id";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $gambar = $stmt->fetchAll();

            $i = 1;
            foreach ($gambar as $g):
              $namaFile = $g['nama_gambar']; // Misalnya kolom di tabel Anda untuk nama file
              ?>
                <div class="swiper-slide">
              <img src="admin/uploads/<?php echo $namaFile?>" alt="">

            </div>
            <?php $i++; ?>
             <?php endforeach?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

      </div>

      <ul class="list-group list-group-horizontal mt-3">
        <li class="list-group-item"><i class="bi bi-person"></i> <?php echo $ambil["penulis"]; ?></li>
        <li class="list-group-item"><i class="bi bi-clock"></i> <?php echo $ambil["tanggal"]; ?></li>
      </ul>

      <p class="mt-4"><?php echo $ambil["isi"]; ?>

    </div>
  </section><!-- End Projet Details Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>