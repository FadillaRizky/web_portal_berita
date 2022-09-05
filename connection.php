<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "db_portal_berita";

    //lakukan koneksi php dengan database
    //jika proses koneksi gagal maka muncul pesan error dengan menggunakan or die()
    $conn = mysqli_connect($host,$user,$password,$dbName) or die(mysqli_error($conn));
    
?>