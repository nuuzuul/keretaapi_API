<?php
    // jalankan session
    session_start();

    // inisialisasi variable koneksi
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apiuas_native";

    // pembuatan koneksi db
    $conn = new mysqli($servername, $username, $password,$dbname);

    // tangkap username dan password
    $uname = $_POST['uname'];
    $passwd = $_POST['pwd'];

    // bikin query cek login
    $sql = "SELECT * FROM user WHERE username = '$uname' AND password = '$passwd'";

    
    // eksekusi query
    $hasil = $conn->query($sql);

    // echo $hasil->num_rows;
    if($hasil->num_rows == 1){
        // echo "Login valid";
        $_SESSION['login_data'] = $hasil->fetch_assoc();
        header("location: index.php");
    }else{
        echo 'Login gagal, silahkan <a href="user_login.php">ulangi</a>';
    }

?>