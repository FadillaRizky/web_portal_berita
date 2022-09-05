<?php
    //memanggil file koneksi
    include "../connection.php";
    $kategori = $_POST['kategori'];
    
    $insert = "INSERT INTO kategori VALUES(null,'$kategori')";

    mysqli_query($conn, $insert)or die(mysqli_error($conn));

    header("location:../index.php?page=kategori");
?>