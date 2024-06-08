<?php
	//header hasil berbentuk json
	header("Content-Type:application/json");

	// tangkap key
	$header = apache_request_headers();
	$key = $header['key'];
	$jenis_kereta =$header['jenis_kereta'];

	// tangkap metode akses
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
	// E: koneksi database

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
			// buat query
			$sql = "SELECT tb_schedule.jenis_kereta,tb_schedule.rute,tb_schedule.waktu,tb_schedule.kapasitas_kursi,tb_informasi_tiket.harga FROM tb_schedule JOIN tb_informasi_tiket ON tb_schedule.id_sc = tb_informasi_tiket.id_sc Where jenis_kereta='$jenis_kereta';
			";
			// $sql = "SELECT * FROM tb_informasi_tiket";
			// eksekusi query
			$hasil_query = $conn->query($sql);
			// masukkan ke array result
			$result['results'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
		}else{
			$result['status'] =[
				"code" => 400,
				"description" => 'Request Not Valid'
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