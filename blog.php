<?php
include "admin/function.php";

$id = $_GET["id"];
$ambil = query("SELECT *,t.id as nomor,k.id as idKategori ,DATE_FORMAT(STR_TO_DATE(waktuPosting, '%d/%m/%Y'), '%d %M %Y') AS tanggal 
FROM tbbacaan t
JOIN kategori k ON k.id = t.idKategori
WHERE idKategori = $id AND t.status= 1");

$ambilKategori = query("SELECT * FROM kategori WHERE id = $id")[0];


?>

<?php
include "header.php";
?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('assets/img/hero-carousel/gmit_pict2.jpeg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Baca <?php echo $ambilKategori["namaKategori"]; ?></h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Bacaan</li>
        <li><?php echo $ambilKategori["namaKategori"]; ?></li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Galeri Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 posts-list">
        <?php $i = 1; ?>
        <?php foreach ($ambil as $row): ?>
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

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
                <p>
                  <?php
                  $text = $row["isiBacaan"];

                  if (strlen($text) > 75) {
                    $text_short = substr($text, 0, 75) . "...";
                    echo $text_short;
                  } else {
                    echo $text;
                  }
                  ?>

                </p>
                <?php
                $encrypted_id = base64_encode($row["nomor"]);
                ?>
                <a href="blog-details.php?id=<?php echo $encrypted_id?>"" class="readmore stretched-link">
                  <span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>

              </div>

            </div>
          </div><!-- End post list item -->


        </div><!-- End blog posts list -->
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
    </div>


  </section><!-- End Blog Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>