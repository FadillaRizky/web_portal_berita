<?php
        include "../connection.php";

        if (!isset($_GET['id'])) {
            $data['response'] = 404;
            $data['message'] = "ID TIDAK DITEMUKAN";
            die (json_encode($data));
        }
        $id = $_GET['id'];
        // * semua kolom database
        // menampilkan beberapa kolom contohnya : SELECT judul,isi FROM berita
        $select = "SELECT * FROM berita WHERE id_berita='$id'";
        // eksekusi query select jika error maka tampilan error database nya 
        $query = mysqli_query($conn,$select) or die (mysqli_error($conn));
        $row = mysqli_fetch_assoc($query);
        $data['data_berita'] = $row;
        $data['response'] = 200;
        $data['message'] = ($row != null) ? "data ditemukan" : "data tidak ditemukan";
        // konversi array ke json
        echo json_encode($data);
    ?>