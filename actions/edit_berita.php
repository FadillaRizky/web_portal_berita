<?php
    //memanggil file koneksi
    include "../connection.php";
    $idberita = $_POST['id_berita'];
    $gambarLama = $_POST['gambar_lama'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];
    $isi = $_POST['isi'];
     // ambil file gambarnya
     $fileGambar = $_FILES ['gambar']['tmp_name'];
     // kasih nama file baru
     $namaGambar = time() . ".png";
     // jika sudah menyisipkan gambar pada form edit
    if ($fileGambar != null){
        //jika file lamanya ada
        if (file_exists("../images/$gambarLama")){
            //hapus gambarnya
            unlink("../images/$gambarLama");
        }

        // pindah filenya ke folder images
        move_uploaded_file($fileGambar,"../images/$namaGambar");
        $insert = "UPDATE berita SET judul ='$judul', tanggal='$tanggal',kategori='$kategori', isi='$isi' ,gambar='$namaGambar' WHERE id_berita = '$idberita'";
    }else {
        //jika tidak menyertakan gambar, maka kolom gambar diabaikan
        $insert = "UPDATE berita SET judul ='$judul', tanggal='$tanggal',kategori='$kategori', isi='$isi' WHERE id_berita = '$idberita'";
    }

    mysqli_query($conn, $insert)or die(mysqli_error($conn));

    header("location:../index.php?page=master_berita");
?>