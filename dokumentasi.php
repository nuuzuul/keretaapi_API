<?php 
  // aktifkan session
  session_start();

  // cek sudah login atau belum
  if(!$_SESSION['login_data']){
      header("location: user_login.php");
  }
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
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- js -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <!-- =======================================================
  * Template Name: BizLand
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <style>
        body {
            /* font-family: Arial, sans-serif; */
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 1340px;
            margin: 20px auto;
            padding: 20px;
            /* border: 1px solid #ccc; */
        }

        h2 {
            margin-top: 30px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            overflow: auto;
        }

        code {
            color: #e83e8c;
        }


        .copy-btn {
          background-color: #106EEA; /* Ganti dengan warna latar belakang yang diinginkan */
          color: white; /* Ganti dengan warna teks yang diinginkan */
          border: none;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
        }

        #province-request-example pre {
          border: 1px solid black; /* Ganti dengan gaya tampilan border yang Anda inginkan */
          padding: 10px; /* Ganti dengan jumlah padding yang Anda inginkan */
        }

        .nav-tabs {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #f1f1f1;
          border: 1px solid #ccc;
          border-radius: 4px;
          max-width: 350px; /* Atur lebar maksimum sesuai kebutuhan Anda */
          margin: 0 auto; /* Untuk mengatur elemen tengah secara horizontal */
        }

        .nav-tabs {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #f1f1f1;
          border: 1px solid #ccc;
          border-radius: 4px;
        }

        .nav-tabs li {
          float: left;
          border-right: 1px solid #ccc;
        }

        .nav-tabs li:last-child {
          border-right: none;
        }

        .nav-tabs li a {
          display: block;
          color: #555;
          text-align: center;
          padding: 10px 20px;
          text-decoration: none;
        }

        .nav-tabs li.active a {
          background-color: #ccc;
          color: #fff;
        }

        .tab-content {
          max-width: 700px; /* Atur lebar maksimum sesuai kebutuhan Anda */
        }

    </style>
  
  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
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
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php">About</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="index.php">Team</a></li>
          <li><a class="nav-link scrollto active" href="#">Dokumentasi Api</a></li>
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

 

  <main id="main">
  <div class="container"><br>
    <h4>Dokumentasi API</h4>
    <p>Dokumentasi ini menjelaskan cara mengakses layanan API Kereta Api. Mulai dari URL yang digunakan, parameter yang dibutuhkan, dan contoh requestnya.<br> Namun perlu anda perhatikan bahwa layanan API ini hanya bisa ada akses jika anda sudah mempunyai API key, untuk mendapatkan API Key anda perlu <br>melakukan registrasi, login, kemudian  generate API key. Jika anda sudah mempunyai API Key maka anda dapat mengakses dan menggunakan endpoint yang<br>disediakan berikut.</p>
    <div class="row">
      <div class="col-sm-2">
        <div class="">
          <div class="list-group">
            <a href="#endpoint" class="list-group-item active scrollto">Endpoint</a>
            <a href="#endpoint1" class="list-group-item scrollto">Get Schedule</a>
            <a href="#endpoint2" class="list-group-item scrollto">Get Harga Tiket</a>
          </div>
        </div>
      </div> 
      <div class="col-sm-10">
        <div id="endpoint1">
          <h4>Get Schedule</h4>
          <p>Mengambil daftar schedule kereta api dari API.</p>

          <ul class="nav nav-tabs ro-doc-tabs">
            <li class="active"><a data-toggle="tab" href="#schedule-request-url">URL</a></li>
            <li><a data-toggle="tab" href="#schedule-request-parameter">Parameter</a></li>
            <li><a data-toggle="tab" href="#schedule-request-example">Contoh request</a></li>
          </ul>

          <div class="tab-content">
            <div id="schedule-request-url" class="tab-pane fade in active show">
              <div class="container">
                <p>URL:</p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Method</th>
                      <th>URL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>GET</td>
                      <td>http://localhost/apiuas_native/getonedata.php</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <div id="schedule-request-parameter" class="tab-pane fade">
              <div class="container">
              <p>Parameter:</p>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Method</th>
                        <th>Parameter</th>
                        <th>Wajib</th>
                        <th>Tipe</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>GET/HEAD</td>
                        <td>key</td>
                        <td>Ya</td>
                        <td>String</td>
                        <td>Api Key</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <h6>Catatan:</h6>
                <p>Parameter key wajib diisi agar dapat mengakses API Kereta Api. Jika anda belum mempunyai API Key anda harus registrasi terlebih dahulu, kemudian API Key anda dapat dilihat pada halaman profil</p>
            </div>
            
            <div id="schedule-request-example" class="tab-pane fade">
            <p>Contoh Request:</p>
            <p>code berikut dalam format php</p>
              <?php
                $filePath = 'getonedata.php';
                $fileContent = file_get_contents($filePath);
                $fileContentFormatted = htmlentities($fileContent);
              ?>
                <pre><code id="code-content"><?php echo $fileContentFormatted; ?></code></pre>
                <button class="copy-btn" onclick="copyCodeContent()">Salin kode</button>
                <input type="text" id="temp-input" style="position: absolute; top: -9999px;">
            </div>
          </div><br> 

          <div class="tab-content">
            <h6>Contoh Response:</h6>
            <ul class="nav nav-tabs ro-doc-tabs">
              <li class="active"><a data-toggle="tab" href="#schedule-response-valid">Valid</a></li>
              <li><a data-toggle="tab" href="#schedule-response-notvalid">Not valid</a></li>
            </ul>
            <div id="schedule-response-valid" class="tab-pane fade in active show"><br>
            <p>Response Valid:</p>
              <?php
                $filePath = 'schedule-response-valid.php';
                $fileContent = file_get_contents($filePath);
                $fileContentFormatted = htmlentities($fileContent);
              ?>
              <pre><code id="code-content"><?php echo $fileContentFormatted; ?></code></pre>
              <p>Keterangan:<br>
                ketika request yang dilakukan valid (method, url, dan parameter yang digunakan sudah benar)<br>
                maka akan menampilkan data-data schedule kereta api seperti diatas.
              </p>
            </div>
            <div id="schedule-response-notvalid" class="tab-pane fade"><br>
            <p>Response Not Valid:</p>
              <?php
                $filePath = 'schedule-response-notvalid.php';
                $fileContent = file_get_contents($filePath);
                $fileContentFormatted = htmlentities($fileContent);
              ?>
              <pre><code id="code-content"><?php echo $fileContentFormatted; ?></code></pre>
              <p>Keterangan:<br>
                Hal ini dapat terjadi ketika pada saat melakukan request tidak didefinisikan<br>
                parameter yang wajib di isi(API Key) atau API Key yang dimasukkan salah.
              </p>
            </div>
          </div>
        </div><br><br>

        <!--endpoint2 -->
        <div id="endpoint2">
          <h4>Get Harga Tiket</h4>
          <p>Mendapatkan harga tiket kereta api dari API.</p>

          <ul class="nav nav-tabs ro-doc-tabs">
            <li class="active"><a data-toggle="tab" href="#harga-request-url">URL</a></li>
            <li><a data-toggle="tab" href="#harga-request-parameter">Parameter</a></li>
            <li><a data-toggle="tab" href="#harga-request-example">Contoh request</a></li>
          </ul>

          <div class="tab-content">
            <div id="harga-request-url" class="tab-pane fade in active show"><br>
              <div class="container">
              <p>URL:</p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Method</th>
                      <th>URL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>GET</td>
                      <td>http://localhost/apiuas_native/getalldata.php</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            
            <div id="harga-request-parameter" class="tab-pane fade"><br>
              <div class="container">
              <p>Parameter:</p>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Method</th>
                        <th>Parameter</th>
                        <th>Wajib</th>
                        <th>Tipe</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>GET/HEAD</td>
                        <td>key</td>
                        <td>Ya</td>
                        <td>String</td>
                        <td>Api Key</td>
                      </tr>
                      <tr>
                        <td>GET/HEAD</td>
                        <td>jenis kereta</td>
                        <td>Ya</td>
                        <td>String</td>
                        <td>jenis kereta api</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <h6>Catatan:</h6>
                <p>Parameter key wajib diisi agar dapat mengakses API Kereta Api. Jika anda belum mempunyai API Key anda harus registrasi terlebih dahulu, kemudian API Key anda dapat dilihat pada halaman profil. Dan parameter jenis kereta juga wajib diisi agar dapat menampilkan data berdasarkan jenis kereta yang diinputkan</p>

            </div>

            <div id="harga-request-example" class="tab-pane fade">
            <p>Contoh Request:</p>
            <p>Code berikut dalam format php</p>
              <?php
                $filePath = 'getalldata.php';
                $fileContent = file_get_contents($filePath);
                $fileContentFormatted = htmlentities($fileContent);
              ?>
                <pre><code id="code-content"><?php echo $fileContentFormatted; ?></code></pre>
                <button class="copy-btn" onclick="copyCodeContent()">Salin kode</button>
                <input type="text" id="temp-input" style="position: absolute; top: -9999px;">
            </div> 
          </div>

          <div class="tab-content">
            <h6>Contoh Response:</h6>
            <ul class="nav nav-tabs ro-doc-tabs">
              <li class="active"><a data-toggle="tab" href="#harga-response-valid">Valid</a></li>
              <li><a data-toggle="tab" href="#harga-response-valid2">Data Not Found</a></li>
              <li><a data-toggle="tab" href="#harga-response-notvalid">Not valid</a></li>
            </ul>
            <div id="harga-response-valid" class="tab-pane fade in active show"><br>
            <p>Response Valid:</p>
              <?php
                $filePath = 'harga-response-valid.php';
                $fileContent = file_get_contents($filePath);
                $fileContentFormatted = htmlentities($fileContent);
              ?>
              <pre><code id="code-content"><?php echo $fileContentFormatted; ?></code></pre>
              <p>Keterangan:<br>
                ketika request yang dilakukan valid (method, url, dan parameter yang digunakan sudah benar)<br>
                maka akan menampilkan data-data harga tiket kereta api berdasarkan jenis kereta yang telah<br>
                didefinisikan pada parameter inputnya.
              </p>
            </div>
            <div id="harga-response-valid2" class="tab-pane fade"><br>
            <p>Response Data Not Found:</p>
              <?php
                $filePath = 'harga-response-valid2.php';
                $fileContent = file_get_contents($filePath);
                $fileContentFormatted = htmlentities($fileContent);
              ?>
              <pre><code id="code-content"><?php echo $fileContentFormatted; ?></code></pre>
              <p>Keterangan:<br>
                Hal ini dapat terjadi ketika pada saat melakukan request parameter jenis kereta<br>
                yang dimasukkan tidak benar, atau jenis kereta tersebut tidak ada dalam database.
              </p>
            </div>
            <div id="harga-response-notvalid" class="tab-pane fade"><br>
            <p>Response Not Valid:</p>
              <?php
                $filePath = 'harga-response-notvalid.php';
                $fileContent = file_get_contents($filePath);
                $fileContentFormatted = htmlentities($fileContent);
              ?>
              <pre><code id="code-content"><?php echo $fileContentFormatted; ?></code></pre>
              <p>Keterangan:<br>
                Hal ini dapat terjadi ketika pada saat melakukan request tidak dimasukkan parameter<br>
                API Key, atau ada kesalahan penulisan API Key.
              </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div><br>
  
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
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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

<script>
    function copyCodeContent() {
      const codeElement = document.getElementById('code-content');
      const codeText = codeElement.textContent || codeElement.innerText;

      navigator.clipboard.writeText(codeText).then(() => {
        alert('Kode berhasil disalin!');
      }).catch((error) => {
        console.error('Gagal menyalin kode:', error);
      });
    }
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    var currentPath = window.location.pathname.toLowerCase();

    var tabLinks = document.querySelectorAll('.nav-tabs li a');

    var defaultTab = null;

    for (var i = 0; i < tabLinks.length; i++) {
      var tabLink = tabLinks[i];
      var href = tabLink.getAttribute('href').toLowerCase();
      if (href === currentPath) {
        tabLink.parentElement.classList.add('active');
        defaultTab = tabLink;
      }
    }

    // Jika tidak ada tab aktif yang ditentukan, pilih tab pertama dan tampilkan kontennya
    if (!defaultTab) {
      document.querySelector('.nav-tabs li:first-child a[data-toggle="tab"]').classList.add("active");
      document.querySelector('.tab-content .tab-pane:first-child').classList.add("active", "show");
    }
  });
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>