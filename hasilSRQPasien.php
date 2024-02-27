<?php 
include 'function.php';
if (isset($_SESSION['role'])) 
    if ($_SESSION['role'] == "admin") {
        header("location: indexAdmin.php");
    }


setlocale(LC_ALL, 'id-ID', 'id_ID');
$tanggal= strftime("%A, %d %B %Y");

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
  <link rel="stylesheet" href="custom.css" />
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
          <a class="navbar-brand fw-bold" href="#page-top">
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
<section class="test mt-5">
    <div class="container">
        <div class="row">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 style="font-family: poppins; margin-top: 20px";>HASIL DIAGNOSA</h3>
                    <a style="font-family: poppins; margin-top: 20px";>Berdasarkan gejala yang Anda pilih, berikut adalah hasil Skrining Anda:</a>
                </div>
                <div class="panel-body">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr> 
                                <th>Gejala</th>
                                <th>Kode Skrining</th>
                                <th>Hasil Skrining</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                                    <?php			
                                    if(isset($_POST['submit'])){
                                        $gejala = $_POST['gejala'];
                                        $jumlah_dipilih = count($gejala);
                                        for($x=0;$x<$jumlah_dipilih;$x++){
                                                $tampil ="SELECT DISTINCT p.id_penyakit, p.kode_penyakit, p.penyakit, g.gejala from relasi b, penyakit p, gejala g where b.id_gejala='$gejala[$x]' and p.id_penyakit=b.id_penyakit group by id_penyakit";
                                                $result = mysqli_query($koneksi, $tampil);
                                                $hasil  = mysqli_fetch_array($result);  
                                                
                                                }
                                                
                                                echo "
                                                    <tr>  
                                                            <td>".$x."</td>
                                                            <td>".$hasil['kode_penyakit']."</td> 
                                                            <td>".$hasil['penyakit']."</td>
                                                            <td><a href=\"#detail\"  ><i class='fas fa-pen'>Detail</i></a></td>
                                                    </tr>";
                                                    ?>
                        </tbody>                 <br>
                    </table>              
                </div>
                </div>            
            </div>
        </div>
    </div>
</section>

<section id="detail">
<div class="">
        <div class="solid">
            <div class="form-row">
                <div class="panel-heading">
                    <h3 style="font-family: poppins; margin-top: 20px; text-align:center;">LAPORAN HASIL DIAGNOSA SRQ-29</h3>
                    <a style="font-family: poppins; margin-top: 20px"></a>
                </div>
                <div class="panel-body">
                <div class="box-body table-responsive">
                    <form action="function.php?act=tambahLaporan" id="tambah" method="POST" class="tambah_pasien">
                                <div class="form-group ">
                                    <label for="tanggal_pengisian">Tanggal Pengisian</label>
                                    <input type="text" class="form-control form-control-user" id="tanggal_pengisian" name="tanggal_pengisian"   value="<?php echo $tanggal?>"  readonly>
                                </div>
                                <?php 
                                    $tampiluser = mysqli_query($koneksi, "SELECT DISTINCT p.id_user, p.nama_lengkap, p.nik, p.ttl, p.jenis_kelamin, p.alamat, p.kota, p.provinsi, p.tlp, p.pendidikan, p.pekerjaan, p.status, p.goldar from user b, profil_user p where b.nik=p.nik and b.id_user='$_SESSION[id_user]' group by nik");
                                    $tampil = mysqli_fetch_array($tampiluser);
                                        $alamat = $tampil['alamat'];
                                        $kota = $tampil['kota'];
                                        $provinsi = $tampil['provinsi'];
                                ?>
                                
                                <input type="hidden" id="id_user" name="id_user" value="<?php echo $tampil['id_user']?>">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control form-control-user" id="nik" name="nik"  value="<?php echo $tampil['nik']?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control form-control-user" id="nama_lengkap" name="nama_lengkap"  value="<?php echo $tampil['nama_lengkap']?>" readonly>
                                </div>
                                <div class="form-group ">
                                    <label for="ttl">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-user" id="ttl" name="ttl"  value="<?php echo $tampil['ttl']?>" readonly>
                                </div>
                                <div class="form-group ">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat"  value="<?php echo "$alamat, "; echo "$kota, "; echo "$provinsi, ";?>" readonly>
                                </div>
                                <div class="form-group ">
                                    <label for="tlp">No. Telepon</label>
                                    <input type="text" class="form-control form-control-user" id="tlp" name="tlp" value="<?php echo $tampil['tlp']?>" readonly>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="gejala"><i>Daftar Gejala yang dipilih:</i></label>
                                    <?php foreach($_POST['gejala'] as $item)
                                                {
                                                    $tampil ="SELECT DISTINCT p.id_gejala, p.kode_gejala, p.gejala from relasi b, gejala p where b.id_gejala=p.id_gejala and p.id_gejala='$item' group by id_gejala";
                                                    $result = mysqli_query($koneksi, $tampil);
                                                    $read  = mysqli_fetch_array($result);
                                               ?>
                                               <input class="form-control form-control-user" id="gejala" name="gejala[]" style="border: none; outline: none; margin-bottom:-5px;font-size: 16px;" value="<?php echo $read['gejala']?>" readonly>
                                    <?php }?>
                                </div>
                                <br>
                                <i class="text">Berdasarkan dari gejala-gejala yang telah dipilih pasien di atas, hasil menunjukan:</i>
                                <br>
                                <input type="hidden" id="kode_penyakit" name="kode_penyakit" value="<?php echo $hasil['kode_penyakit']?>">
                                <div class="form-group ">
                                    <label for="penyakit">Pasien Mengalami</label>
                                    <input type="text" class="form-control form-control-user" id="penyakit" name="penyakit" style="font-size: 16px;" value="<?php echo $hasil['penyakit']?>" readonly>
                                </div>
                                <br>
                        <div class="modal-footer">
                            <button type="button" onclick="history.back();" class="registerbtn btn btn-secondary">Batal</button>
                            <button type="submit" name="submit" id="tambah" value="tambah" class="btn btn-success">Simpan</button>
                            <button type="button" class="btn btn-warning" onclick="window.print()" style="color:white;"><i class="fas fa-print" > Print</i></button>
                        </div>
                    </form>
                </div>
                <?php } ?>
</section>    
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
function checkDiagnosa(){
    return confirm('Apakah sudah benar gejalanya?');
}

</script>
 
<style>
    @media print {
    .test, .modal-footer, .navbar, .logo, .main, header {
      display: none;
    }
}

.solid {
    border: solid;
    padding : 25px;
    margin : 20px;
    }


.form-group{
    font-family : "poppins";
    font-size: 16px;
    margin-top : 10px;
    
}

.label-text{
    margin-top:15px;
    margin-bottom : 10px;

}

.text {
    margin-top:30px;
    margin-bottom : 10px;
}

.form-control{
    
}

</style>
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



