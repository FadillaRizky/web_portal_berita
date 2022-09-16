<?php
    //memanggil file koneksi
    include "../connection.php";
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];
    $isi = ($_POST['isi']);
    
    // membuat variabel untuk meng convert simbol simbol seperti = $#%@
    $deskripsi = htmlentities($isi);
    
     // ambil file gambarnya
     $fileGambar = $_FILES['gambar']['tmp_name'];

     // kasih nama file baru
     $namaGambar = time() . ".png";
     // pindah filenya ke folder images
     move_uploaded_file($fileGambar,"../images/$namaGambar");
    
    $insert = "INSERT INTO berita VALUES(null,'$judul','$tanggal','$kategori','$deskripsi','$namaGambar')";

    
   mysqli_query($conn, $insert)or die(mysqli_error($conn));
    header("location:../index.php?page=master_berita");
?>