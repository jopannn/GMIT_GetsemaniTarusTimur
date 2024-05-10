<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_gmit_test");
function simpan($data)
{
  global $koneksi;

  $namaLengkap = $data['namaLengkap'];
  $email = $data['email'];
  $judulPesan = $data['judulPesan'];
  $isiPesan = $data['isiPesan'];
  $waktuKirim = date("d/m/Y H:i:s");



  $query = "INSERT INTO tbpesan(id,namaLengkap,email,judulPesan,isiPesan,waktuKirim)
			values 
			('','$namaLengkap','$email','$judulPesan','$isiPesan','$waktuKirim')";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);

}

if (isset($_POST["submit"])) {
  if (simpan($_POST) > 0) {
    echo "
      <script>
      alert('Pesan Berhasil Terkirim');
      document.location.href='contact.php';
      ;
      </script> ";
  } else {
    echo "
      <script>
      alert('Pesan Gagal Terkirim');
      // document.location.href='contact.php';
      </script> ";

  }
}
?>

<?php

include "admin/function.php";

$ambil = query("SELECT * 
FROM tbnomor WHERE role ='pendeta';
");

$ambilRole = query("SELECT * 
FROM tbnomor WHERE role ='pendeta'
LIMIT 1;
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

      <h2>Kontak</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>kontak</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <!-- <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>Lokasi Gereja</h3>
            <p>Jl. Soekarno No.3, Lahilai Bissi Kopan, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Tim.</p>
          </div>
        </div>End Info Item -->

        <div class="col-lg-6 ">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.221146053828!2d123.5751283748737!3d-10.162671489951181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569c8b653dc62b%3A0xef04a161d3466a06!2sGMIT%20Jemaat%20Kota%20Kupang!5e0!3m2!1sid!2sid!4v1709906828187!5m2!1sid!2sid  "
            frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email </h3>
            <p>sekretariatgmitkupang@gmail.com</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-3 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>Alamat Gereja</h3>
            <p>(0380)821457</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="row gy-4 mt-1">

        <!-- <div class="col-lg-6 ">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.221146053828!2d123.5751283748737!3d-10.162671489951181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569c8b653dc62b%3A0xef04a161d3466a06!2sGMIT%20Jemaat%20Kota%20Kupang!5e0!3m2!1sid!2sid!4v1709906828187!5m2!1sid!2sid  "
            frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
        </div>End Google Maps -->
        <div class="col-lg-6">
          <h4 class="fw-bold">Nomor Kontak</h4>
          <div class="info-item  d-flex flex-column justify-content-center ps-3 ">

            <table class="table table-borderless">
              <thead>
                <?php $i = 1; ?>
                <?php foreach ($ambilRole as $row): ?>
                  <th class="fs-5">Nomor <?php echo $row["role"]; ?></th>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($ambil as $row): ?>
                  <tr>
                    <td><?php echo $row["namaLengkap"]; ?> (<?php echo $row["nomorTelepon"]; ?>) </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>

            <?php
            $ambil = query("SELECT * 
            FROM tbnomor WHERE role ='Rayon';
            ");
            $ambilRole = query("SELECT * 
            FROM tbnomor WHERE role ='Rayon'
            LIMIT 1;
            ")
              ?>
         <table class="table table-borderless">
              <thead>
                <?php $i = 1; ?>
                <?php foreach ($ambilRole as $row): ?>
                  <th class="fs-5">Nomor <?php echo $row["role"]; ?></th>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($ambil as $row): ?>
                  <tr>
                    <td><?php echo $row["namaLengkap"]; ?> (<?php echo $row["nomorTelepon"]; ?>) </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>

            <?php
            $ambil = query("SELECT * 
            FROM tbnomor WHERE role ='Lainnya';
            ");
            $ambilRole = query("SELECT * 
            FROM tbnomor WHERE role ='Lainnya'
            LIMIT 1;
            ")
            ?>
           <table class="table table-borderless">
              <thead>
                <?php $i = 1; ?>
                <?php foreach ($ambilRole as $row): ?>
                  <th class="fs-5">Nomor <?php echo $row["role"]; ?></th>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($ambil as $row): ?>
                  <tr>
                    <td><?php echo $row["namaLengkap"]; ?> (<?php echo $row["nomorTelepon"]; ?>) </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>
        </div><!-- End Info Item -->

        <div class="col-lg-6">
          <h4 class="fw-bold">Kirim Pesan</h4>
          <form action="" method="post" role="form">
            <div class="row gy-4 mb-3">
              <div class="col-lg-6 form-group">
                <input type="text" name="namaLengkap" class="form-control" id="name" placeholder="Masukkan Nama"
                  required>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
              </div>
            </div>
            <div class="form-group mb-3">
              <input type="text" class="form-control" name="judulPesan" id="subject" placeholder="Judul" required>
            </div>
            <div class="form-group mb-3">
              <textarea class="form-control" name="isiPesan" rows="5" placeholder="Isi Pesan" required></textarea>
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary">Kirim Pesan</button>
            </div>
          </form>
        </div>




      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
include "footer.php";
?>