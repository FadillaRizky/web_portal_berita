<?php
    session_start();

    if(!isset($_SESSION['id_admin'])){
        echo "
        <script>
        alert('Anda Harus login dahulu');
        window.location.href='login.php';
        </script>
        ";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include "partials/navbar.php" ?>
    <div id="layoutSidenav">
        <!-- sidenav -->
        <?php include "partials/sidenav.php"  ?>
        <div id="layoutSidenav_content">
            <main>
                <?php
                if (isset($_GET['page'])) {
                    switch ($_GET['page']) {
                            // tampil halaman master berita
                        case 'dashboard':
                             include "pages/dashboard.php";
                             break;
                        case 'master_berita':
                            include "pages/master_berita/berita.php";
                            break;
                        case 'add_berita':
                            include "pages/master_berita/add_berita.php";
                            break;
                         case 'edit_berita':
                            include "pages/master_berita/edit_berita.php";
                            break;
                        default:
                            echo "<h1> 404, error </h1>
                            <h3> Halaman yang anda cari tidak ditemukan </h3> ";
                            break;
                    }
                }
                ?>
                
               
            </main>
            <!-- footer -->
            <?php include "partials/footer.php" ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>