<?php
    //memanggil file koneksi
    include "../connection.php";
    $ppicture = $_POST['profilepicture'];


    $insert = "INSERT INTO user VALUES(null,'$ppicture')";
    $result = mysqli_query($conn, $insert)or die(mysqli_error($conn));
    if ($result == true) {
        $data["status"] = 200;
        $data["message"] = "register berhasil";
    }
    else {
        $data["status"] = 400;
        $data["message"] = "register gagal";
    }
    echo json_encode($data);
    
?>