<?php	
	$header = apache_request_headers();
	$key = $header['key'];
	// koneksi db
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apiuas_native";

	// buat koneksi
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Cek user
	$sql = "SELECT * FROM user WHERE key_token='$key'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		echo "key/token valid";
	}else{
		echo "key/token invalid";
	}
?>