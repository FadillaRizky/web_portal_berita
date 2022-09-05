<div class="container fluid px-4">
    <?php
    include "connection.php";
    $kodekategori = $_GET['kode_kategori'];
    $select = "SELECT * FROM kategori WHERE kode_kategori = '$kodekategori'";
    $query = mysqli_query($conn, $select) or die(mysqli_error($conn));

    //menampung hasil pencarian data dalam bentuk array assosiatif
    $data = mysqli_fetch_assoc($query);
    ?>
    <h1 class="mt-4">Form Edit Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item ">Master Kategori</li>
        <li class="breadcrumb-item active">Form Edit Kategori</li>
    </ol>
    <form action="actions_kategori/edit_kategori.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="kode_kategori" value="<?= $data['kode_kategori'] ?>" hidden>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input name="kategori" type="text" class="form-control" id="kategori" value="<?= $data['kategori'] ?>">
        </div>
        
        <button class="btn btn-warning">Edit</button>
    </form>