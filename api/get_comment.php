<?php
        include "../connection.php";
        $idBerita = $_GET['id_berita'];
        // id berita, id user, id komentar, username, profile picture, komentar, tanggal komentar
        // ORDER BY menampilkan komentar paling atas karna komentar dengan tanggal/waktu yang sekarang
        $select = "SELECT berita.id_berita, user.id_user,komentar.id_komen, user.username, user.profilepicture, komentar.komentar, komentar.tanggal FROM komentar INNER JOIN berita ON berita.id_berita = komentar.id_berita INNER JOIN user ON komentar.id_user = user.id_user WHERE komentar.id_berita = $idBerita ORDER BY komentar.tanggal DESC";
        // eksekusi query select jika error maka tampilan error database nya 
        $query = mysqli_query($conn,$select) or die (mysqli_error($conn));

        $data['data'] = [];
        $data['response'] = 200;
        // menghitung jumlah data di database
        $jumlahData = mysqli_num_rows($query);
        if ($jumlahData > 0) {
            $data['message'] = "Data ditemukan";
        } else {
            $data['message'] = "Data Kosong";
        }
        // lakukan perulangan 
        while ($row = mysqli_fetch_assoc($query)) {
            // $dataBerita['id_komen'] = $row['id_komen'];
            // $dataBerita['nama_user'] = $row['username'];
            // $dataBerita = [
            //     "id_komen" => $row['id_komen'],
            //     "nama_user" => $row['nama_user'],
            // ];
            array_push($data['data'],$row);
        }

        echo json_encode($data);
    ?>