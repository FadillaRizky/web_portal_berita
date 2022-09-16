<?php 
 
    include "../connection.php";
//  jika nilai yang dikirimkan itu ada
    if (isset($_POST)) {
        // maka ambil semua nilai termasuk username dan password dan masukan ke masing2 variabel 
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // menentukan perintah untk memanggil data user berdasarkan username dan password 
        $query = "SELECT * FROM admin WHERE username='$username' AND password=md5('$password')";
        
        // eksekusi perintahnya
        $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
        // ambil 1 object ketika data sudah berhasil di fetch/ di panggil
        $data = mysqli_fetch_assoc($result);
 
        // jika sudah berhasil di temukan 
        // mulai session
            session_start();
            
            // masukkan data sessionnnya
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['username'] = $data['username'];
            if($_SESSION['id_admin'] !=NULL && $_SESSION['username'] != NULL){
                echo "
                <script>
                    alert('Login berhasil');
                    window.location.href = '../index.php';
                </script>";
            }else{
                echo "
                <script>
                    alert('Username atau Password anda salah');
                    window.location.href = '../login.php';
                </script>";
            }
        }
    
 
?>