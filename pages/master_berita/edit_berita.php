<div class="container fluid px-4">
    <?php
    include "connection.php";
    $idberita = $_GET['id_berita'];
    // $kategoriList = [
    //     "LifeStyle","Sport","Politik",
    // ];
    //ambil data berita berdasarkan id produk 
    $select = "SELECT * FROM berita WHERE id_berita = '$idberita'";
    $query = mysqli_query($conn, $select) or die(mysqli_error($conn));

    //menampung hasil pencarian data dalam bentuk array assosiatif
    $data = mysqli_fetch_assoc($query);
    ?>
    <h1 class="mt-4">Form Edit Berita</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item ">Master Berita</li>
        <li class="breadcrumb-item active">Form Edit Berita</li>
    </ol>
    <form action="actions/edit_berita.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="id_berita" value="<?= $data['id_berita'] ?>" hidden>

        <div class="mb-3">
            <label for="inputBerita" class="form-label">Judul</label>
            <input name="judul" type="text" class="form-control" id="inputBerita" value="<?= $data['judul'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputTanggal" class="form-label">Tanggal</label>
            <input name="tanggal" type="date" class="form-control" id="inputTanggal" value="<?= $data['tanggal'] ?>">
        </div>
        <div class="mb-3">
            <label for="inputKategori" class="form-label">Kategori</label>
            <select name="kategori" class="form-control">
                <?php
                include "connection.php";

                $selectKategori = "SELECT * FROM kategori ";
                $query = mysqli_query($conn, $selectKategori) or die(mysqli_error($conn));
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <!--pada value = menampilkan data kode kategori di dalam atribut value  -->
                    <!-- setelah atribut value, cek apakah kode_kategori dari tabel kategori itu sama dengan kode_kategori dari tabel berita, jika sama maka atur option ini sebagai "selected" -->
                    <option value="<?= $row['kode_kategori'] ?>" <?php echo ($row['kode_kategori'] == $data['kode_kategori']) ? 'selected' : '' ?>> <?= $row['kategori'] ?> </option>
                <?php
                }
                ?>
            </select><br>
        </div>
        <div class="mb-3">
            <label for="inputIsi" class="form-label">Isi</label>
            <textarea name="isi" class="form-control" id="inputIsi" rows="3" cols="10"><?= $data['isi'] ?></textarea>
        </div>

        <div class="mb-3">
            <input name="gambar_lama" type="text" class="form-control" id="inputGambar" value="<?= $data['gambar'] ?>" hidden>
        </div>

        <div class="mb-3">
            <label for="inputGambar" class="form-label">Gambar</label>
            <input name="gambar" type="file" class="form-control" id="inputGambar">
        </div>
        <button class="btn btn-warning">Edit</button>
    </form>