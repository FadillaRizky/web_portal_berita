<?php 
    include "../connection.php";
    $id = $_GET['id_berita'];
    $image = $_GET['gambar'];

    //JIKA FILE ADA PADA FOLDER IMAGES
    if (file_exists('../images/' . $image)) {
        //maka hapus file gambar
        unlink('../images/' . $image);
    }

    $delete = "DELETE FROM berita WHERE id_berita='$id'";

    mysqli_query($conn,$delete) or die (mysqli_error($conn));

    // setelah selesai mengeksekusi query diatas,maka lanjut ke file index
    
    header('location:../index.php?page=master_berita');
?>