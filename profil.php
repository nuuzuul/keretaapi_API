<?php
// aktifkan session
session_start();

// cek sudah login atau belum
if(!$_SESSION['login_data']){
    header("location: user_login.php");
}
// Mengambil nilai dari session login_data
$id = $_SESSION['login_data']['id'];
$username = $_SESSION['login_data']['username'];
$email = $_SESSION['login_data']['email'];
$password = $_SESSION['login_data']['password'];
$key_token = $_SESSION['login_data']['key_token'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>API Kereta APi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">APIKeretaApi@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62852 1022 5253</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">API Kereta Api<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <li><a class="nav-link scrollto" href="index.php">Team</a></li>
          <li><a class="nav-link scrollto" href="dokumentasi.php">Dokumentasi Api</a></li>
          <li class="dropdown"><a href="#"><span>Setting</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profil.php">Profil</a></li>
              <li><a href="aksi_logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <style>
    /* body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    } */

    .container2 {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      text-align: center;
    }

    .profile-info {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .profile-info .profile-image {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-right: 20px;
    }

    .profile-info .profile-details {
      flex-grow: 1;
    }

    .profile-info .profile-details h3 {
      margin: 0;
      margin-bottom: 10px;
    }

    .profile-info .profile-details p {
      margin: 0;
      color: #777;
    }

    .profile-info .profile-actions {
      display: flex;
      justify-content: space-between;
    }

    .profile-info .profile-actions a {
      padding: 8px 16px;
      border-radius: 4px;
      border: none;
      background-color: #106EEA;
      color: #fff;
      cursor: pointer;
      margin-top: 10px;
      margin-right: 10px;
      display: flex;
      justify-content: flex-end;
    }

    .profile-info .profile-actions a:hover {
      background-color: #B0E0E6;
    }

    .column-container {
        display: flex;
        justify-content: center;
    }

    .column {
        width: 50%; /* Lebar kolom, bisa disesuaikan */
        padding: 10px;
        border: 1px solid #000;
        position: relative;
    }
    

  </style>

  <div class="container2">
    <!-- <h5>Halaman Profil</h5><br> -->
    <div class="profile-info">
      <img class="profile-image" src="assets/img/profil.png" alt="Profile Image">
      <div class="profile-details">
        <h3><?php echo $username; ?></h3>
        <p><?php echo $email; ?></p>
      </div>
      <div class="profile-actions">
        <a href="edit_profil.php?id='.$row['id'].'" type="button">Edit Profil</a>
      </div>
    </div>
    <div class="column-container">
      <div class="column">
        <h6>API Key</h6>
        <p id="keyToken"><?php echo $key_token; ?></p>
        <button onclick="copyToClipboard()">Salin</button>
      </div>
    </div>
    <form action="user_generate_key.php" method="POST">
      <input type="hidden" name="uname" value="<?php echo $username; ?>">
      <input type="hidden" name="pwd" value="<?php echo $password; ?>">
      <input type="submit" name="submit" value="Generate key">
    </form>
    <p>Gunakan API Key diatas untuk mengakses API Kereta Api. Untuk informasi lebih lanjut mengenai cara menggunakan API Kereta Api, silakan baca halaman dokumentasi. Jika anda belum mempunyai API Key silahkan klik "Generate Key" untuk mendapatkan API Key anda</p>
  </div><br><br><br>

  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>API Kereta Api<span>.</span></h3>
            <p>
            Tamalanrea Indah, Kec.Tamalanrea,<br>Kota Makassar, Sulawesi Selatan<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62852 1022 5253<br>
              <strong>Email:</strong> apikeretaapi@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="dokumentasi.php">Dokumentasi API</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Kunjungi sosial media kami</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>APIKeretaApi</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    function copyToClipboard() {
      var keyTokenElement = document.getElementById("keyToken");
      var keyToken = keyTokenElement.innerText;

      navigator.clipboard.writeText(keyToken).then(function () {
        var copyButton = document.querySelector(".column button");
        copyButton.innerText = "Disalin!";
        copyButton.disabled = true;
      }).catch(function (error) {
        console.error('Gagal menyalin teks: ', error);
      });
    }
  </script>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
