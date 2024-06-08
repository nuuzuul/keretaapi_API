<?php
	// aktifkan session
    session_start();
    // cek sudah login atau belum
    if(!$_SESSION['login_data']){
        header("location: user_login.php");
    }
	// koneksi db
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apiuas_native";

	// buat koneksi
	$conn = new mysqli($servername, $username, $password, $dbname);

	// tangkap data
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];

	// buat token
	$token = md5($uname.$pwd);

	// Cek user
	$sql = "UPDATE user SET key_token='$token' WHERE username='$uname' AND password='$pwd'";
	$result = $conn->query($sql);

	// Memperbarui nilai key_token pada session
	$_SESSION['login_data']['key_token'] = $token;


	// echo "Key/Token API Anda: ".$token;
	header("Location: profil.php");

?>