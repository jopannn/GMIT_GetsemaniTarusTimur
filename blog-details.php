<?php
include "admin/function.php";


$encrypted_id = $_GET['id'];
$id = base64_decode(urldecode($encrypted_id));
//$id = $_GET["id"];
$ambil = query("SELECT *,p.id as nomor, k.namaKategori as nama ,DATE_FORMAT(STR_TO_DATE(p.waktuPosting, '%d/%m/%Y'), '%d %M %Y') AS tanggal
FROM tbbacaan as p
JOIN kategori k ON k.id = p.idKategori 
WHERE p.id = $id")[0];


?>

<?php
include "header.php";
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/hero-carousel/gmit_pict2.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Baca <?php echo $ambil["nama"]; ?></h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><?php echo $ambil["nama"]; ?></li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img ">
                <img src="<?php echo "admin/imgs/" . $ambil["gambar"]; ?>"  class="img-fluid rounded mx-auto d-block" alt="...">
                
              </div>

              <h2 class="title"> <?php echo $ambil["judul"];?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"> <?php echo $ambil["penulis"];?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"> <?php echo $ambil["tanggal"];?></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
              <?php echo $ambil["isiBacaan"];?>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#"> <?php echo $ambil["nama"];?></a></li>
                </ul>

              </div><!-- End meta bottom -->

            </article><!-- End blog post -->



            
          </div>

          
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <?php
  include "footer.php";
  ?>