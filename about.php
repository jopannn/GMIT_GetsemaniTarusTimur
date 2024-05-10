<?php
include 'admin/function.php';

$ambil = query("SELECT * FROM tbpendeta");
?>

<?php
include "header.php";
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
    style="background-image: url('assets/img/hero-carousel/gmit_pict2.jpeg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Tentang Kami</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Tentang</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row position-relative">
        <div class="col-lg-5 about-img px-2" style="background-image: url(assets/img/hero-carousel/gmit_pict2.jpeg); ">
        </div>
        <!-- <div class="col-lg-5 about-img px-2">
          <img src="assets/img/hero-carousel/gmit_pict2.jpeg" class="img-fluid" alt="">
        </div> -->
        <div class="col-lg-7">
          <h2>Sejarah GMIT Kota Kupang</h2>
          <!-- <div class="our-story"> -->
          <p class="me-4" style="text-align:justify;">Jemaat GMIT Kota Baru merupakan salah satu gereja anggota Sinode
            Gereja Masehi Injili
            di Timor (GMIT) dan berada di lingkungan Klasis Kota Kupang. Jemaat ini awalnya didirikan seiring dengan
            pembukaan pemukiman baru di daerah Kelapa Lima, sehingga warga yang pindah dari wilayah pelayanan GMIT
            Paulus Naikoten dan GMIT Kota Kupang membutuhkan tempat ibadah yang lebih dekat. Untuk menjawab kebutuhan
            warga yang baru pindah tersebut, maka tanggal 15 Januari 1989 secara resmi dibuka pelayanan baru yang diberi
            nama Gereja GMIT Kota Baru. Pada tanggal 6 Juli 1989, Surat Keputusan Majelis Sinode GMIT Nomor
            176A/II.2/1989 menetapkan GMIT Kota Baru sebagai Gereja Anggota GMIT.</p>

          <!-- </div> -->
        </div>
      </div>
    </div>

  </section>
  <!-- End About Section -->

  <!-- ======= Stats Counter Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row gy-4">
        <p style="text-align:justify;">
          GMIT Jemaat Kota Baru melalui program-program pelayanan dan pembangunannya melalui UPP kategorial,
          Komisi-komisi dan rayon serta BPPnya terus untuk menjadi jemat yang missioner, tangguh dan simpatik. Gereja
          ada sebagai persekutuan umat yang percaya kepada Yesus Kristus Sang Juru Selamat, gereja sebagai persekutuan
          umat yang terpanggil untuk menjadi saluran terang dan kasih Tuhan kepada dunia, gereja sebagai persekutuan
          umat yang saling mengasihi, saling menopang, saling menguatkan, harus terus menerus menyatakan panggilannya
          kepada dunia ini, kepada umat dan masyarakat di manapun ia bertumpu pada berada. Gereja ada bukan
          semata-mata untuk dirinya sendiri melainkan untuk menjadi agen pembawa damai sejahtera dan syalom Allah bagi
          umat manusia di sekitarnya dan di mana saja berada.
        </p>

        <div class="watch-video d-flex align-items-center position-relative">
            <iframe width="700" height="315" src="https://www.youtube.com/embed/rALWlutvJZA?si=phvjOtTD6Y6w3Uuk"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
      </div>
  </section><!-- End Stats Counter Section -->


  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

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
              <h4><?php echo $row["namaPendeta"]; ?></h4>
              <span><?php echo $row["jabatan"]; ?></span>

            </div>
          </div><!-- End Team Member -->
          <?php $i++; ?>
        <?php endforeach; ?>



      </div>

    </div>
  </section><!-- End Our Team Section -->


</main><!-- End #main -->

<?php
include "footer.php";
?>