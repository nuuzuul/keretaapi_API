<?php
    // aktifkan session
    session_start();
    // cek sudah login atau belum
    if(!$_SESSION['login_data']){
        header("location: user_login.php");
    }

    // Koneksi ke database
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database_name = "apiuas_native";

    // Membuat koneksi ke database
    $connection = mysqli_connect($hostname, $username, $password, $database_name);

    // Memeriksa koneksi
    if (!$connection) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Memeriksa apakah form edit telah dikirimkan
    if (isset($_POST['edit_profile'])) {
        // Mendapatkan data yang diinputkan dari form edit
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];


        // Mengambil nilai id dari session login_data
        $id = $_SESSION['login_data']['id'];

        // Query untuk melakukan pembaruan data di database
        $sql = "UPDATE user SET email = '$email', username = '$uname', password = '$pwd' WHERE id = '$id'"; // Ganti dengan query yang sesuai

        // Menjalankan query pembaruan data
        if (mysqli_query($connection, $sql)) {
            // Menutup koneksi database
            // mysqli_close($connection);
            $sql2 = "SELECT email, username, password, key_token FROM user WHERE id= '$id'";
            // Eksekusi query
            $result = mysqli_query($connection, $sql2);

            // Ambil baris hasil
            $row = mysqli_fetch_assoc($result);

            // Periksa apakah baris hasil ditemukan
            if ($row) {
                // Mendapatkan nilai email dan username dari baris hasil
                $newEmail = $row['email'];
                $newUsername = $row['username'];
                $newPassword = $row['password'];

                // Perbarui nilai-nilai session yang relevan
                $_SESSION['login_data']['email'] = $newEmail;
                $_SESSION['login_data']['username'] = $newUsername;
                $_SESSION['login_data']['password'] = $newPassword;
            } else {
            // Menampilkan pesan jika data tidak ditemukan
            echo "Data profil tidak ditemukan.";
            }

            // Redirect ke halaman profil.php
            header("Location: profil.php");

            // Menampilkan pop-up data berhasil diedit menggunakan JavaScript
            echo '<script>alert("Data berhasil diedit.");</script>';
            exit;
        } else {
            echo "Terjadi kesalahan saat memperbarui data: " . mysqli_error($connection);
        }
    }

    // Menutup koneksi database
    // mysqli_close($connection);
?>
