<div class="container-fluid px-4">
    <h1 class="mt-4">Kelola Kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kelola Kategori</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <svg class="svg-inline--fa fa-table me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M448 32C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM224 256V160H64V256H224zM64 320V416H224V320H64zM288 416H448V320H288V416zM448 256V160H288V256H448z"></path>
            </svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
            DataTable Example
        </div>
        <div class="card-body">
            <a href="index.php?page=add_kategori" class="btn btn-primary mb-3">Tambah Kategori</a>
            <a href="index.php?page=master_berita" class="btn btn-success mb-3">Done</a>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">

                <div class="dataTable-container">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kategori</th>
                                <th>Kategori</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "connection.php";
                            // * semua kolom database
                            // menampilkan beberapa kolom contohnya : SELECT judul,isi FROM berita
                            // menampilkan data berita yang direlasikan dengan tabel kategori dengan kolom id_berita,judul,dll
                            $select = "SELECT kode_kategori,kategori FROM kategori ";
                            // eksekusi query select jika error maka tampilan error database nya 
                            $query = mysqli_query($conn, $select) or die(mysqli_error($conn));

                            $no = 1;
                            // lakukan perulangan 
                            while ($row = mysqli_fetch_array($query)) {

                            ?>
                                <tr>
                                    <td><?=$no++ ?></td>
                                    <td><?=$row['kode_kategori'] ?></td>
                                    <td><?=$row['kategori'] ?></td>
                                    <td>
                                        <a class="btn btn-warning mb-2" href="index.php?page=edit_kategori&kode_kategori=<?php echo $row['kode_kategori'] ?>"><i class="fa-solid fa-pen-to-square"></i>  Edit</a><br>
                                        <a class="btn btn-danger " href="actions_kategori/delete_kategori.php?id_berita=<?php echo $row['kode_kategori'] . '&gambar=' . $row['gambar'] ?>"><i class="fa-solid fa-trash-can"></i>   Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>