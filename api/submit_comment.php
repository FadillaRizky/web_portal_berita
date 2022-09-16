<?php 
 
    include "../connection.php";
//  jika nilai yang dikirimkan itu ada
    if (isset($_POST)) {

        
        $idBerita = $_POST['id_berita'];
        $idUser = $_POST['id_user'];
        $comment = $_POST['komentar'];

        $insert = "INSERT INTO komentar VALUES (null,$idBerita,$idUser,'$comment',NOW())";

        // eksekusi perintahnya
        $adaData = mysqli_query($conn,$insert) or die(mysqli_error($conn));

        if ($insert) {
            $data['status'] = 200;
            $data["message"] = "Komentar berhasil ditambahkan";
        }else {
            $data['status'] = 400;
            $data ['message'] = "komentar gagal ditambahkan";
        }
        

        echo json_encode($data);
    }
 
?>