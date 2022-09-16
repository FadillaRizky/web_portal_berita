<?php
    //memanggil file koneksi
    include "../connection.php";
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $insert = "INSERT INTO user VALUES(null,'$username','$email','$password')";
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