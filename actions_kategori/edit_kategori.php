<?php
    //memanggil file koneksi
    include "../connection.php";
    $kodekategori = $_POST['kode_kategori'];
    $kategori = $_POST['kategori'];


    $update ="UPDATE kategori SET kategori ='$kategori' WHERE kode_kategori = '$kodekategori'";
    mysqli_query($conn, $update)or die(mysqli_error($conn));

    header("location:../index.php?page=kategori");
?>