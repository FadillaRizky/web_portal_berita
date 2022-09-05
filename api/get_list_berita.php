<?php
        include "../connection.php";
        // * semua kolom database
        // menampilkan beberapa kolom contohnya : SELECT judul,isi FROM berita
        $select = "SELECT * FROM berita";
        // eksekusi query select jika error maka tampilan error database nya 
        $query = mysqli_query($conn,$select) or die (mysqli_error($conn));

        $data['data_berita'] = [];
        $data['response'] = 200;
        $data['message'] = "data ditemukan";
        // lakukan perulangan 
        while($row = mysqli_fetch_assoc($query)){
            array_push($data['data_berita'],$row);
        }
        echo json_encode($data,);
    ?>