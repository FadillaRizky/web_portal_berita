<?php 
 
    include "../connection.php";
//  jika nilai yang dikirimkan itu ada
    if (isset($_POST)) {
        // maka ambil semua nilai termasuk username dan password dan masukan ke masing2 variabel 
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // menentukan perintah untk memanggil data user berdasarkan username dan password 
        $query = "SELECT * FROM user WHERE email='$email' AND password=md5('$password')";
        
        // eksekusi perintahnya
        $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
        // ambil 1 object ketika data sudah berhasil di fetch/ di panggil
        $dataUser = mysqli_fetch_assoc($result);
        $data['data_user'] = $dataUser;
        $data['response'] = 200;
        // cek apakah jumlah data yang dipanggil itu ada
        if (mysqli_num_rows($result) > 0) {
            // maka muncul pesan ini
            $data ['message'] = "data ditemukan";
        }else{
            // sebaliknya, muncul pesan ini
            $data ['message'] = "data tidak ditemukan";
        }

        echo json_encode($data);
    }
 
?>