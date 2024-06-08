<?php
    // jalankan sesison
    session_start();

    // hapus data pada session
    session_unset();

    // hapus session
    session_destroy();

    // header ke login 
    header("location: user_login.php");

?>