<?php
        include "../connection.php";
        // menerima data kode kategori dari mobile
        $kodeKategori = $_GET['kdKategori'];
        // * semua kolom database
        // menampilkan beberapa kolom contohnya : SELECT judul,isi FROM berita
        $select = "SELECT id_berita,judul,tanggal,kategori.kategori,isi,gambar FROM berita INNER JOIN kategori ON berita.kode_kategori = kategori.kode_kategori WHERE berita.kode_kategori=$kodeKategori";
        // eksekusi query select jika error maka tampilan error database nya 
        $query = mysqli_query($conn,$select) or die (mysqli_error($conn));

        $data['data_kategori'] = [];
        $data['response'] = 200;
        // cek apakah jumlah data yang dipanggil itu ada
        if (mysqli_num_rows($query) > 0) {
            // maka muncul pesan ini
            $data ['message'] = "data ditemukan";
        }else{
            // sebaliknya, muncul pesan ini
            $data ['message'] = "data tidak ditemukan";
        }
        // lakukan perulangan 
        while($row = mysqli_fetch_assoc($query)){

            array_push($data['data_kategori'],$row);
        }
        echo json_encode($data);
    ?>