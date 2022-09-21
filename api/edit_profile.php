<?php
    include "../connection.php";
    $idUser = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    if (isset($_POST['profileimage']) && $_POST['profileimage'] != null && $_POST['profileimage'] != "") {
        $profileImage = $_POST['profileimage'];
        $filename = guidv4() . ".png";
        $outputFile = "../images/profile_user/$filename";

        //buka file url nya
        //$outputfile = untuk menentukan lokasi direktori gambar profile itu nanti
        $filehandler = fopen($outputFile,'wb');
        //file open with "wb mode treat as binary file

        //buat file dari hasil konversi base64 menjadi gambar
        fwrite($filehandler,base64_decode($profileImage));

        //membersihkan file resource
        fclose($filehandler);

        $insert ="UPDATE user SET username = '$username',email = '$email',profilepicture = '$filename' WHERE id_user = '$idUser' ";
        $result = mysqli_query($conn, $insert)or die (mysqli_error($conn));
        if ($result == true) {
            $data["status"] = 200;
            $data["message"] = "edit profile berhasil";
        }else{
            $data["status"] = 200;
            $data["message"] = "edit profile gagal";
        }
    }else{
        $insert ="UPDATE user SET username = '$username',email = '$email' WHERE id_user = '$idUser' ";
        $result = mysqli_query($conn, $insert)or die (mysqli_error($conn));
        if ($result == true) {
            $data["status"] = 200;
            $data["message"] = "edit profile berhasil";
        }else{
            $data["status"] = 200;
            $data["message"] = "edit profile gagal";
        }
    }

    echo json_encode($data);

    function guidv4($data = null) {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);
    
        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    
        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
?>