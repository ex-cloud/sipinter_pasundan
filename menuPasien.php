<?php 
include 'function.php';
if (isset($_SESSION['role'])) {
  if ($_SESSION['role'] == "admin") {
      header("location: indexAdminbiasa.php");
  } else if ($_SESSION['role'] == "administrator") {
    header("location: indexadmin.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SI PINTER</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="gambar/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
          <a class="navbar-brand fw-bold" href="menupasien.php">
              <div class="sidebar-brand-icon">
                  <img src="gambar/Logo-Sipinter.png" width="175" height="auto" alt="logo" />
              </div>
          </a>
       
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="menupasien.php">Menu</a></li>
          <li><a class="nav-link scrollto" href="riwayat.php">Riwayat</a></li>
          <li class="dropdown"><a href="#"><span>User Pasien</span> <i class="fas fa-user"></i></a>
            <ul>
              <li><a href="user_profile.php"><span>Profile</span> <i class="fas fa-address-card"></i></a></li>
              <li><a href="logout.php"><span>Log Out</span> <i class="fas fa-door-open"></i></a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<main id="main">
<!-- ======= Services Section ======= -->
<section id="Menupasien" class="services" style="margin-top: 50px;">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Menu Pasien</h2>
      <p>Silahkan Pilih Salah Satu Menu:</p>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
        <a href="" style="color:black" data-bs-toggle="modal" data-bs-target="#profile">
          <img src="gambar/Profile-sipinter.png" class="card-img-top" alt="...">
          <h4 class="title">Isi Profile</h4>
          <p class="description">Pengguna diwajibkan mengisi kelengkapan profile user terlebih dahulu sebelum lanjut ke tahap skrining kesehatan. Ayo tambahkan Profile disini!!</p>
          </a>
        </div>
      </div>

      

      <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
        <a href="" style="color:black" data-bs-toggle="modal" data-bs-target="#skrining" >
          <img src="gambar/SFRPTM.png" class="card-img-top" alt="...">
          <h4 class="title">Skrining Faktor Resiko Penyakit Tidak Menular</h4>
          <p class="description">Pengguna akan diberikan form pengisian untuk diisi sesuai dengan keaadaan Anda yang sebenarnya.</p>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
        <a href="" style="color:black" data-bs-toggle="modal" data-bs-target="#petunjuk">
          <img src="gambar/SRQ.png" class="card-img-top" alt="...">
          <h4 class="title">Skrining Kesehatan Jiwa <br> (SRQ-29)</h4>
          <p class="description">Pengguna akan diberikan beberapa pertanyaan terkait dengan gejala yang dialami dan lakukan ceklis/centang pada gejala yang dialami.</p>
        </a>
        </div>
      </div>
    </div>
    

     <!-- Petunjuk -->
    <div class="modal fade" id="petunjuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content" style="font-family:poppins">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bacalah terlebih dahulu</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <p style="text-align: poppins; text-align:justify"><b>Anda diwajibkan mengisi profile terlebih dahulu sebelum lanjut.</b></p>
                        <p style="text-align: poppins; text-align:justify">Bacalah petunjuk ini seluruhnya sebelum mulai mengisi. Pertanyaan berikut berhubungan dengan masalah yang mungkin mengganggu Anda selama 30 hari terakhir. Apabila Anda menganggap pertanyaan itu Anda alami dalam 30 hari terakhir, berilah tanda ceklis  pada kolom (berarti Ya). Sebaliknya, Apabila anda menganggap pertanyaan itu tidak Anda alami dalam 30 hari terakhir, jangan beri tanda ceklis pada kolom (berarti tidak). Jika Anda tidak yakin tentang jawabannya, berilah jawaban yang paling sesuai dengan Anda. Kami tegaskan bahwa jawaban Anda bersifat rahasia dan akan digunakan hanya untuk membantu pemecahan masalah Anda.</p>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button onclick="document.location='testSRQ.php'" class="btn btn-success">Mengerti</button>
                    </div>
                </div>
              </div>
            </div>
        </div>
  </div>

  <!-- Profile -->
  <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content" style="font-family:poppins">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bacalah terlebih dahulu</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p style="text-align: poppins; text-align:justify">Isilah profie pasien secara lengkap dan benar sebelum memulai tes diagnosa SRQ-29 (Self Reporting Questioner 29) maupun tes Skrining Faktor Resiko Penyakit Tidak Menular. Klik tombol 'Oke' untuk melakukan pengisian profile. Jika Anda sudah mengisi profile klik 'Batal' dan Anda sudah bisa melakukan tes diagnosa. Untuk melihat profile Anda, kunjungi User Pasien dan pilih 'Profile' untuk melihat dan mengubah data profile. </p>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button onclick="document.location='tambahProfilePasien.php'" class="btn btn-success">Oke</button>
                    </div>
                </div>
              </div>
            </div>
        </div>
  </div>


<!-- Skrining -->
<div class="modal fade" id="skrining" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content" style="font-family:poppins">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bacalah terlebih dahulu</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <p style="text-align: poppins; text-align:justify"><b>Anda diwajibkan mengisi profile terlebih dahulu sebelum lanjut.</b></p>
                        <p style="text-align: poppins; text-align:justify">Isilah form skrining dengan lengkap dan benar, data yang diinputkan akan diperiksa oleh petugas puskesmas untuk pemeriksaan.  </p>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button onclick="document.location='formPTMPasien.php'" class="btn btn-success">Oke</button>
                    </div>
                </div>
              </div>
            </div>
        </div>
  </div>
  
</section><!-- End Services Section -->

<section class="services" style="margin-top: -50px;">
  <div class="container">

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Hasil Pemeriksaan PTM</h6>
      </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-top: 70px; font-family:poppins; font-size:14px;">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal Pengisian</th>
              <th>Tanggal Pemeriksaan</th>
              <th>NIK</th>
              <th>Nama Lengkap</th>
              <th>Tanggal Lahir</th>
              <th>No. Telepon</th>
              <th>Kelola</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $urut = 0;
          $queryPTMPeriksa = mysqli_query($koneksi, "SELECT DISTINCT b.id_ptm, b.tanggal_pengisian, b.tanggal_pemeriksaan, b.nama_lengkap, b.tlp, b.ttl, b.nik FROM ptm_hasil b, user p where b.nik = p.nik and id_user='$_SESSION[id_user]' group by id_ptm");
          while ($result = mysqli_fetch_array($queryPTMPeriksa)) { 
          $urut ++;?>
            <tr>
              <td><?= $urut ?></td>
              <td><?= $result['tanggal_pengisian']; ?></td>
              <td><?= $result['tanggal_pemeriksaan']; ?></td>
              <td><?= $result['nik']; ?></td>
              <td><?= $result['nama_lengkap']; ?></td>
              <td><?= $result['ttl']; ?></td>
              <td><?= $result['tlp']; ?></td>
              <td>
                <a href="hasilPTM.php?id_ptm=<?php echo $result['id_ptm']; ?>" class="btn btn-warning btn-icon-split">
                  <span class="text">Lihat</span>
                </a>
              </td>
            </tr>
            <?php } ?> 
          </tbody>
        </table>
      </div>
    </div>
    </div>
  </div>
  
</section><!-- End Services Section -->


<footer id="footer">
<div class="container">
  <div class="row d-flex align-items-center">
    <div class="text-center">
      <div class="copyright">
        &copy; Copyright <strong>SIPINTER</strong>. Puskesmas Pasundan 2024. All Rights Reserved
      </div>
    </div>
  </div>
</div>
</footer><!-- End Footer -->
</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>


