<?php
include "admin/function.php";

$encrypted_id = $_GET['id'];
$id = base64_decode(urldecode($encrypted_id));
// $id = $_GET["id"];
$ambil = query("SELECT p.id, p.penulis,p.gambar,p.judul,p.isiPostingan,DATE_FORMAT(STR_TO_DATE(p.waktuPosting, '%d/%m/%Y'), '%d %M %Y') AS tanggal
FROM tbprogresspembangunan as p 
JOIN admin as a ON a.id = p.idAdmin WHERE p.id = $id")[0];
?>

<?php
include "header.php";
?>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('assets/img/hero-carousel/gmit_pict2.jpeg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Berita Pembangunan</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Berita Pembangunan</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Details Section ======= -->
  <section id="blog" class="blog">
    <div class="container " data-aos="fade-up" data-aos-delay="100">

      <div class="row g-2">

        <div class="col-lg-10">

          <article class="blog-details">

            <div class="post-img">
              <img src="<?php echo "admin/imgs/" . $ambil["gambar"]; ?>" alt=" " class="img-fluid rounded mx-auto d-block">
            </div>

            <h2 class="title">
              <?php echo $ambil["judul"];?>
            </h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                  <?php echo $ambil["penulis"]; ?>
                </li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                  <?php echo $ambil["tanggal"]; ?>
                </li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">

              <?php echo $ambil["isiPostingan"]; ?>

            </div><!-- End post content -->

          </article><!-- End blog post -->
        </div>
      </div>

    </div>


  </section><!-- End Blog Details Section -->



</main><!-- End #main -->

<?php
include "footer.php";
?>