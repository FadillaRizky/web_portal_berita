<?php
        include "../connection.php";
        // menerima data kode kategori dari mobile
        $idUser = $_GET['idUser'];
        // * semua kolom database
        // menampilkan beberapa kolom contohnya : SELECT judul,isi FROM berita
        $select = "SELECT berita.id_berita,read_later.id_user,user.username,berita.judul,berita.gambar,berita.tanggal FROM read_later INNER JOIN user ON read_later.id_user = user.id_user INNER JOIN berita ON read_later.id_berita = berita.id_berita WHERE read_later.id_user=$idUser";
        // eksekusi query select jika error maka tampilan error database nya 
        $query = mysqli_query($conn,$select) or die (mysqli_error($conn));

        $data['data_read_later'] = [];
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

            array_push($data['data_read_later'],$row);
        }
        echo json_encode($data);
    ?>