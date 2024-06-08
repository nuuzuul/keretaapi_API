<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "apiuas_native";

    //koneksi DB
    $conn = new mysqli($servername, $username, $password, $dbname);

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    
    $sql = "INSERT INTO user (username,email,password)
    VALUES('$uname','$email','$pwd')";

    $conn->query($sql);

    // echo $img_name;
    header("Location:user_login.php");
?>
