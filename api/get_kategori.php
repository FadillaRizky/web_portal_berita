<?php
        include "../connection.php";
        // * semua kolom database
        // menampilkan beberapa kolom contohnya : SELECT judul,isi FROM berita
        $select = "SELECT * FROM kategori";
        // eksekusi query select jika error maka tampilan error database nya 
        $query = mysqli_query($conn,$select) or die (mysqli_error($conn));

        $data['data_kategori'] = [];
        $data['response'] = 200;

        $data['message'] = "data ditemukan";
        // lakukan perulangan 
        while($row = mysqli_fetch_assoc($query)){

            array_push($data['data_kategori'],$row);
        }
        echo json_encode($data);
    ?>