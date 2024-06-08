<?php
	//header hasil berbentuk json
	header("Content-Type:application/json");

	// tangkap key
	$header = apache_request_headers();

	$key = $header['key'];
	// $jenis_kereta =$header['jenis_kereta'];
	$method = $_SERVER['REQUEST_METHOD'];
	// variabel hasil
	$result = array();

	// S: koneksi database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "apiuas_native";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Cek user
	$sql = "SELECT * FROM user WHERE key_token='$key'";
	$user = $conn->query($sql);

	if($user->num_rows > 0){
		// user valid
		//cek metode
		if($method=='GET'){
				//jika metode sesuai
				$result['status'] =[
					"code" => 200,
					"description" => 'Request Valid'
				];
				// E: koneksi database
				// buat query
				$sql = "SELECT * FROM tb_schedule";
				// eksekusi query
				$hasil_query = $conn->query($sql);
				// masukkan ke array result
				$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}else{
			$result['status'] =[
				"code" => 400,
				"description" => 'API Key/Token Not Valid'
			];
		}
	}else{
		$result['status'] =[
			"code" => 400,
			"description" => 'API Key/Token Not Valid'
		];
	}	
	// tampilkan data dalam format json
	echo json_encode($result);

?>