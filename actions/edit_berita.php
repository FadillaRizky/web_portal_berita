<?php
    //memanggil file koneksi
    include "../connection.php";
    $idberita = $_POST['id_berita'];
    $gambarLama = $_POST['gambar_lama'];
    $judul = mysqli_real_escape_string($conn, $_POST['judul']) ;
    $tanggal = $_POST['tanggal'];
    $kategori = $_POST['kategori'];
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    // die(print_r($_POST));
     // ambil file gambarnya
     $fileGambar = $_FILES ['gambar']['tmp_name'];
     // kasih nama file baru
     $namaGambar = time() . ".png";
     // jika sudah menyisipkan gambar pada form edit
    if ($fileGambar != null){
        //jika file lamanya ada
        if (file_exists("../../images/$gambarLama")){
            //hapus gambarnya
            unlink("../../images/$gambarLama");
        }

        $deskripsi = htmlentities($isi);

        // pindah filenya ke folder images
        move_uploaded_file($fileGambar,"../images/$namaGambar");
        $insert = "UPDATE berita SET judul ='$judul', tanggal='$tanggal', kode_kategori='$kategori', isi='$deskripsi' ,gambar='$namaGambar' WHERE id_berita = '$idberita'";
    }else {
        //jika tidak menyertakan gambar, maka kolom gambar diabaikan
        $insert = "UPDATE berita SET judul ='$judul', tanggal='$tanggal', kode_kategori='$kategori', isi='$deskripsi' WHERE id_berita = '$idberita'";
    }

    mysqli_query($conn, $insert)or die(mysqli_error($conn));

    header("location:../index.php?page=master_berita");
?>