<div class="container-fluid px-4">
    <h1 class="mt-4">Form Tambah Berita</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item ">Master Berita</li>
        <li class="breadcrumb-item active">Form Tambah Berita</li>
    </ol>
    <form action="actions/add_berita.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul..">
</div>
<div class="mb-3">
    <label for="inputTanggal" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="inputTanggal" name="tanggal">
</div>
<div class="mb-3">
    <label for="inputKategori" class="form-label" >Kategori</label>
   <select name="kategori" id="inputKategori" class="form-control" >
    <?php
        include "connection.php";

        $selectKategori = "SELECT * FROM kategori";
        $query =mysqli_query($conn,$selectKategori) or die(mysqli_error($conn));
        while($row = mysqli_fetch_array($query) ){

    ?>
    <option value="<?= $row['kode_kategori']?>"> <?= $row ['kategori']?></option>
    <?php  }
   ?>
   </select>

</div>
<div class="mb-3">
    <label for="inputIsi" class="form-label">Isi</label>
    <textarea class="form-control" id="inputIsi" rows="3" cols="10" name="isi"></textarea>
</div>
<div class="mb-3">
    <label for="inputGambar" class="form-label">Gambar</label>
    <input type="file" class="form-control" id="inputGambar" name="gambar">
</div>
<button class="btn btn-primary">Tambah</button>
</form>
</div>