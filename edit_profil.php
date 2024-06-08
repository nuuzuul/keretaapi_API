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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>

    <!-- Custom fonts for this template-->
    <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bootstrap/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex align-items-center justify-content-center">
                        <img src="assets/img/keretaapi4.jpg" alt="Image" class="img-fluid" style="max-width: 100%; max-height: 100%; margin-left: 65px;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Profile</h1>
                            </div>
                            
                            <form class="user" action="aksi_edit_profil.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" id="email" name="email" class="form-control form-control-user" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="uname" name="uname" class="form-control form-control-user" value="<?php echo $username; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="pwd" name="pwd" class="form-control form-control-user" value="<?php echo $password; ?>">
                                </div>
                                <button class="btn btn-primary btn-user btn-block" name="edit_profile">
                                    Save Changes
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="profil.php">Back to Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="bootstrap/js/sb-admin-2.min.js"></script>

</body>

</html>
