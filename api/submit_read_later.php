<?php 
 
    include "../connection.php";
//  jika nilai yang dikirimkan itu ada
    if (isset($_POST)) {

        $idUser = $_POST['id_user'];
        $idBerita = $_POST['id_berita'];

        $cekreadlater = "SELECT * FROM read_later WHERE id_user='$idUser' AND id_berita = '$idBerita'";
        
        // eksekusi perintahnya
        $adaData = mysqli_query($conn,$cekreadlater) or die (mysqli_error($conn));

        //cek apakah data read later ada
        if (mysqli_num_rows($adaData) > 0) {
            //jika ada maka hapus data read later
            $delete = "DELETE FROM read_later WHERE id_user='$idUser' AND id_berita = '$idBerita'";
            mysqli_query($conn,$delete) or die (mysqli_error($conn));

        
            $data ['message'] = "data read later dihapus";
            die(json_encode($data));
        }
        
        // menentukan perintah untk memanggil data user berdasarkan username dan password 
        $query = "INSERT INTO read_later VALUES('$idUser','$idBerita')";
        
        // eksekusi perintahnya
        $result = mysqli_query($conn,$query) or die (mysqli_error($conn));

        // cek apakah jumlah data yang dipanggil itu ada
        if ($result) {
            // maka muncul pesan ini
            $data ['message'] = "data read later ditambahkan";
        }else{
            // sebaliknya, muncul pesan ini
            $data ['message'] = "data read later gagal ditambahkan";
        }

        echo json_encode($data);
    }
 
?>